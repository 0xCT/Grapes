<?php
/**
 * @file RouterTreatment.php
 * @brief Treatment of Router
 * @details This file contains the <B>static</B> class <B>RouterTreatment</B>.
 * @author Thibaud Canaud
 * @date 10-26-2016
 * @par License
 * 
 * 
 *      Copyright © 2016, Thibaud CANAUD
 *      Permission is hereby granted, free of charge, to any person obtaining 
 *      a copy of this software and associated documentation files 
 *      (the “Software”), to deal in the Software without restriction, including
 *      without limitation the rights to use, copy, modify, merge, publish,
 *      distribute, sublicense, and/or sell copies of the Software, and to 
 *      permit persons to whom the Software is furnished to do so, subject to 
 *      the following conditions:
 * 
 *      The above copyright notice and this permission notice shall be included 
 *      in all copies or substantial portions of the Software.
 * 
 *      The Software is provided “as is”, without warranty of any kind, express 
 *      or implied, including but not limited to the warranties of 
 *      merchantability, fitness for a particular purpose and noninfringement. 
 *      In no event shall the authors or copyright holders X be liable for any 
 *      claim, damages or other liability, whether in an action of contract, 
 *      tort or otherwise, arising from, out of or in connection with the 
 *      software or the use or other dealings in the Software.
 * 
 *      Except as contained in this notice, the name of the Thibaud CANAUD 
 *      shall not be used in advertising or otherwise to promote the sale, 
 *      use or other dealings in this Software without prior written 
 *      authorization from the Thibaud CANAUD.
 */

namespace CT\Grapes\Router;

use CT\Grapes\Router\RouterConst as RC;
use CT\Grapes\HTTP\Server;

/**
 * @brief The RouterTreatment class
 */
class RouterTreatment {
    /**
     * @brief <I>array</I> — List of router files
     * @details This variable constains a array of all file routing in Grapes.
     */
    public static $RouterFiles   = NULL;
    /**
     * @brief <I>array</I> — List of parent router
     * @details This variable constains a array of all configuration of parent routing in Grapes.
     */
    public static $RouterParents = NULL;
    /**
     * @brief <I>array</I> — List of real router
     * @details Real router is factorized between the parents router and childs router. 
     */
    public static $RealRouter    = array();
    /**
     * @brief <I>boolean</I> — Route found
     * @details This variables is used to found or no a routes asked by the request.
     */
    public static $RouteFound    = NULL;


    /**
     * @brief Define the \p RouterTreatment::$RouterFiles
     * @details Define the \p RouterTreatment::$RouterFiles with the parameter \p $router_files
     * @version 1.0.0
     *
     * @param $router_files <I>array</I> — List of router files Grapes
     * @return NULL
     * 
     * @par Source
     * 
     */
    public static function setRouterFiles($router_files){
        self::$RouterFiles = $router_files;
    }
    
    /**
     * @brief Return \p RouterTreatment::$RouterFiles
     * @details Return the \p RouterTreatment::$RouterFiles defined in \p RouterTreatment::setRouterFiles()
     * @version 1.0.0
     *
     * @return <I>array</I> — List of routing configuration files
     * 
     * @par Source
     * 
     */
    public static function getRouterFiles(){
        return self::$RouterFiles;
    }
    
    /**
     * @brief Define the \p RouterTreatment::$RouterParents 
     * @details Define the \p RouterTreatment::$RouterParents with the parameter \p $router_parents
     * @version 1.0.0
     *
     * @param $router_parents <I>array<\I> — List of router parents Grapes
     * @return NULL
     * 
     * @par Source
     * 
     */    
    public static function setRouterParents($router_parents){
        self::$RouterParents = $router_parents;
    }
    
    /**
     * @brief Return \p RouterTreatment::$RouterParents
     * @details Return the \p RouterTreatment::$RouterParents defined in \p RouterTreatment::setRouterParents()
     * @version 1.0.0
     *
     * @return <I>array</I> — List of routing configuration files
     * 
     * @par Source
     * 
     */
    public static function getRouterParents(){
        return self::$RouterParents;
    }
    
    /**
     * @brief Add the child in parent routing
     * @details Develop the childs files routing in \p RouterTreatment::$RouterParents.
     * @version 1.0.0
     *
     * @return NULL
     * 
     * @par Source
     * 
     */
    public static function developChildsRoutes(){
        for ($i = 0,$m = count( self::$RouterParents ); $i<$m ; $i++){ // For each parents routing files
            if ( isset(self::$RouterParents[$i][RC::RP_DATA][RC::RP_FILES]) ){   // If the child routing files is defined
                for ($ii = 0,$mm = count( self::$RouterParents[$i][RC::RP_DATA][RC::RP_FILES] ); $ii<$mm ;$ii++){   // For each childs routing files defined in the parent routes
                    self::$RouterParents[$i][RC::RP_CHILDS][] = RouterLoader::loadChildRouter( self::$RouterParents[$i][RC::RP_DATA][RC::RP_FILES][$ii] , self::$RouterParents[$i][RC::RP_DIR] );
                    // The parents route add his child her array
                }
            }
        }
    }

    /**
     * @brief Factorize the \p RouterTreatment::$Router
     * @details For each childs routing set a new row in \p RouterTreatment::$RealRouter with a name, pattern, id of parent router, id of child router and id of child route.
     * @version 1.0.0
     *
     * @return NULL
     * 
     * @par Source
     * 
     */    
    public static function createRealRouter(){
        for ($i = 0, $m = count(self::$RouterParents);$i<$m;$i++){
            if (isset(self::$RouterParents[$i][2])){
                for ($ic = 0, $mc = count(self::$RouterParents[$i][RC::RP_CHILDS]);$ic<$mc;$ic++){
                    if (is_array(self::$RouterParents[$i][RC::RP_CHILDS][$ic])){
                        for ($icr = 0, $mcr = count (self::$RouterParents[$i][RC::RP_CHILDS][$ic]);$icr<$mcr;$icr++){
                            self::$RealRouter[] = [
                                'RealName'          => sprintf('%s.%s',isset(self::$RouterParents[$i][RC::RP_DATA]['name']) == TRUE ? self::$RouterParents[$i][RC::RP_DATA]['name'] : NULL, isset(self::$RouterParents[$i][RC::RP_CHILDS][$ic][$icr]['action']) == TRUE ? self::$RouterParents[$i][RC::RP_CHILDS][$ic][$icr]['name'] : 'NC'),
                                'RealPattern'       => sprintf('%s%s',isset(self::$RouterParents[$i][RC::RP_DATA]['prefix']) == TRUE ? self::$RouterParents[$i][RC::RP_DATA]['prefix'] : NULL , isset(self::$RouterParents[$i][RC::RP_CHILDS][$ic][$icr]['pattern']) == TRUE ? self::$RouterParents[$i][RC::RP_CHILDS][$ic][$icr]['pattern'] : NULL ),
                                'RouterParent'      => $i,
                                'RouterChild'       => $ic,
                                'RouterChildRoute'  => $icr,
                            ];
                        }
                    }
                }
            }
        }
        
    }

    /**
     * @brief Transform the pattern to regex
     * @details For each \p RouterTreatment::$RealRouter set Regex from RealPattern
     * @version 1.0.0
     *
     * @return NULL
     * 
     * @par Source
     * 
     */        
    public static function routerPatternToReg(){
        for ($i = 0, $m = count(self::$RealRouter) ; $i<$m;$i++){ // For each \p RouterTreatment::$RealRouter
            $pattern = self::$RealRouter[$i]['RealPattern'];
            preg_match_all('~{(.+?)}~', self::$RealRouter[$i]['RealPattern'], $varRoutes); // Get variables in the pattern
            for ($iVar = 0, $mVar = count($varRoutes[1]); $iVar < $mVar ; $iVar++){ // For each variables in the pattern
                if ( isset(self::$RouterParents[self::$RealRouter[$i]['RouterParent']]['childs'][self::$RealRouter[$i]['RouterChild']][self::$RealRouter[$i]['RouterChildRoute']]['rules'][$varRoutes[1][$iVar]])){ // Check if a rule exist for this variable
                    $pattern = str_replace('{'.$varRoutes[1][$iVar].'}','('.self::$RouterParents[self::$RealRouter[$i]['RouterParent']]['childs'][self::$RealRouter[$i]['RouterChild']][self::$RealRouter[$i]['RouterChildRoute']]['rules'][$varRoutes[1][$iVar]].')',$pattern); // Replace the variable by the rule
                } else { // If the rule doesn't exist
                    $pattern = str_replace('{'.$varRoutes[1][$iVar].'}','(.+?)',$pattern); // Replace the variable by a any rule
                }
            }
            $pattern = str_replace('/', '\\/', $pattern);
            self::$RealRouter[$i]['Regex'] = '/^' .$pattern. '$/'; // Set a column 'Regex' in a this row with the pattern calculed
        }
    }
    
    /**
     * @brief Get route match
     * @details Get the route match in accordance with \p Server::getUri() or the parameter \p $url
     * @version 1.0.0
     *
     * @param $url <I>string</I> — the uri of substition
     * @return NULL
     * 
     * @par Source
     * 
     */     
    public static function getRoute($url = NULL){
        if ($url == NULL)   $urlr = substr(Server::getUri() ,strlen(_GRAPES_DIR_));
        if ($url != NULL)   $urlr = substr($url ,strlen(_GRAPES_DIR_));
        for ($i = 0,$m = count(self::$RealRouter);$i<$m;$i++){
            if (preg_match(self::$RealRouter[$i]['Regex'], $urlr)){
                if ( isset(self::$RouterParents[self::$RealRouter[$i]['RouterParent']]['childs'][self::$RealRouter[$i]['RouterChild']][self::$RealRouter[$i]['RouterChildRoute']]['onlyInvoke']) ){
                    if ( self::$RouterParents[self::$RealRouter[$i]['RouterParent']]['childs'][self::$RealRouter[$i]['RouterChild']][self::$RealRouter[$i]['RouterChildRoute']]['onlyInvoke'] == true ){
                        if ( $url != NULL ) return $i;
                        if ( $url == NULL ) continue;
                    }
                }
                if ( isset(self::$RouterParents[self::$RealRouter[$i]['RouterParent']]['childs'][self::$RealRouter[$i]['RouterChild']][self::$RealRouter[$i]['RouterChildRoute']]['method']) ){
                    if ( substr_count(self::$RouterParents[self::$RealRouter[$i]['RouterParent']]['childs'][self::$RealRouter[$i]['RouterChild']][self::$RealRouter[$i]['RouterChildRoute']]['method'], Server::getMethod()) ){
                        if ($url == NULL){
                            self::$RouteFound = $i;
                        } else {
                            return $i;
                        }
                        break;
                    }
                } else {
                    if ($url == NULL){
                        self::$RouteFound = $i;
                    } else {
                        return $i;
                    }
                    break;
                }
            }
        }
    }
    
    public static function getVar($url = NULL,$routeId = NULL){
        $var = array();
        $url = ( $url == NULL ? Server::getUri() : $url );
        $url = substr( $url ,strlen(_GRAPES_DIR_));
        if ( $routeId === NULL ){
            preg_match_all(self::$RealRouter[self::$RouteFound]['Regex'], $url ,$matchsVar);
            preg_match_all('~{(.+?)}~',self::$RealRouter[self::$RouteFound]['RealPattern'],$matchsNameVar);
        } else {
            preg_match_all(self::$RealRouter[$routeId]['Regex'], $url ,$matchsVar);
            preg_match_all('~{(.+?)}~',self::$RealRouter[$routeId]['RealPattern'],$matchsNameVar);
        }
        for ($i = 1, $m = count($matchsVar);$i<$m;$i++){
            $var[ $matchsNameVar[1][$i-1] ] = $matchsVar[$i][0];
        }
        return $var;
    }    
        
    public static function path($name,$arg = NULL){
        if ( $arg != NULL ){
            $argK = array_keys($arg);
        }
        if ( is_array($name) ){
            foreach ($name as $key => $n) {
                if ( isset($nameOfPath) ){
                    $nameOfPath .= '.'.$n;
                } else {
                    $nameOfPath = $n;
                }
            }
        } else {
            $nameOfPath = $name;
        }
        for ($iroute = 0, $m = count(self::$RealRouter);$iroute<$m;$iroute++){
            if ( self::$RealRouter[$iroute]['RealName'] == $nameOfPath ){
                $return['path'] = self::$RealRouter[$iroute]['RealPattern'];
                if ( $arg != NULL ){
                    for ( $iarg = 0, $marg = count ($arg); $iarg < $marg; $iarg++){
                        $return['path'] = str_replace('{'. $argK[$iarg] .'}', $arg[$argK[$iarg]], $return['path']);
                    }
                }
                break;
            }
        }
        
        $return['path'] =  preg_replace('/{.+?}/', '', $return['path']);
        
        if (preg_match(self::$RealRouter[$iroute]['Regex'], $return['path'])){
            $return['stats'] = 1;
        }
        else
        {
            $return['stats'] = 0;
        }
        
        $return['path'] = _GRAPES_DIR_ . $return['path'];
        
        return $return;
    }
}

