<?php
/**
 * @file RouterLoader.php
 * @brief Loader of Router
 * @details This file contains the <B>static</B> class <B>RouterLoader</B>.
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

/**
 * @brief The RouterLoader class
 */
class RouterLoader {
    /**
     * @brief Load the paths of Grapes routing defined
     * @details Load all paths of Grapes routing in a array
     * @version 1.0.0
     *
     * @return <I>array</I> — This array constains the paths of Grapes routing
     * 
     * @par Source
     * 
     */
    public static function load($grapes){
        $RouterFiles = array();
        for ($i = 0,$m = count($grapes);$i<$m;$i++){
            $RouterFiles[] = [ $grapes[$i], $grapes[$i]->getSpace() . '/config/routing.php' ];
        }
        return $RouterFiles;
    }
    
    /**
     * @brief Load the files routing
     * @details Make a array with the information of routing. For each route, he save the Grapes object, the path of Grapes and the route defined.
     * @version 1.0.0
     *
     * @param $router_files <I>array</I> — \p RouterTreatment::getRouterParents()
     * @return <I>array</I> — Parent files routing
     * 
     * @par Source
     * 
     */
    public static function loadParentsRouter($router_files){
        $RouterParent = array();
        for ($i = 0,$m = count($router_files);$i<$m;$i++){  // For each files
            $router = require $router_files[$i][RC::RP_PATH_FILES]; // Save the return of file
            for ($ii = 0, $mm = count($router);$ii<$mm;$ii++){      // For each parents defined
                // Save the object, the path dir of grapes, and the routes defined
                $RouterParent[] = [ $router_files[$i][RC::RP_OBJ] , dirname( dirname( $router_files[$i][RC::RP_DIR] ) ), $router[$ii] ];
            }
        }
        return $RouterParent;
    }
    
    /**
     * @brief Load the child files routing
     * @details Return constains of router child files asked
     * @version 1.0.0
     *
     * @return <I>array</I> — Return the array of child routing
     * 
     * @par Source
     * 
     */
    public static function loadChildRouter($router_childs , $grape_dir){
        return require $grape_dir.'/config/routing/'.$router_childs;
    }
    
}
