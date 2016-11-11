<?php
/**
 * @file Kernel.php
 * @brief Kernel of Grapes
 * @details This file contains the <B>static</B> class <B>Kernel</B>.
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

namespace CT\Grapes\Kernel;

use CT\Grapes\HTTP\Server;
use CT\Grapes\HTTP\Header;
use CT\Grapes\HTTP\HeaderConst;
use CT\Grapes\Grapes\GrapesLoader;
use CT\Grapes\Grapes\GrapesTreatment;
use CT\Grapes\Router\RouterLoader;
use CT\Grapes\Router\RouterTreatment;
use CT\Grapes\Twig\TwigTreatment;
use CT\Grapes\Doctrine\DoctrineTreatment;
use CT\Grapes\Edb\EdbTreatment;
/**
 * @brief The Kernel class
 */
class Kernel {
    /**
     * @brief <I>boolean</I> — State of Kernel
     * @details This variable is true when the Kernel is started and fall when the Kernel is not initialized.
     */
    protected static $instance;
    
    /**
     * @brief <I>string</I> — The value of URI request
     * @details This variable constains the URI request. The Kernel is going to base itself on this variable for found the grapes called.
     */
    protected static $request;
    
    /**
     * @brief <I>string</I> — The verb of request
     * @details This variable like \p Kernel::$request will be surving to found the grapes called
     */
    protected static $method;

    /**
     * @brief <I>string</I> — Contains the response text genered by the grapes
     * @details This variable is the return of the grapes called
     */    
    protected static $render;
    
    /**
     * @brief <I>string</I> — Contains the response text genered by the grapes called from twig or other vendor
     * @details This variable is the return of the grapes called from function Kernel::route_exe_plus()
     */    
    protected static $render_plus;
    
    /**
     * @brief <I>int</I> — Contains the state of response HTTP
     * @details This variable is the state of response HTTP. He is used in particular during the function \p Kernel::echo_response() for display the \p Kernel::$render Or other response example if the route not found then he can display a 404 page.
     */
    protected static $stats;

    /**
     * @brief Initialize the Kernel
     * @details Initialize the Kernel acquired it the request and the method of the request receive
     * @version 1.0.0
     *
     * @return <I>boolean<\I> — True if the Kernel as correctly started and false if the Kernel is already running
     * 
     * @par Source
     * 
     */
    public static function start()
    {
        if ( self::$instance == true ){
            return false;
        }
        self::$request  = Server::getUri();
        self::$method   = Server::getMethod();
        self::$instance = true;
        return true;
    }

    /**
     * @brief Load Grapes
     * @details Load Grapes via the grapes configuration file. See \p Grapes::loader().
     * @version 1.0.0
     *
     * @return <I>boolean<\I> — False if the Kernel is not started else true
     * 
     * @par Source
     * 
     */    
    public static function load_grapes()
    {
        if ( self::$instance == false ){
            return false;
        }
        GrapesTreatment::setGrapes( GrapesLoader::loader() );
        return true;
    }
    
    /**
     * @brief Load routes
     * @details Load routes defined in routing files content in routing grapes dir
     * @version 1.0.0
     *
     * @return <I>boolean<\I> — False if the Kernel is not started else true
     * 
     * @par Source
     * 
     */   
    public static function load_routes()
    {
        if ( self::$instance == false ){
            return false;
        }
        RouterTreatment::setRouterFiles( RouterLoader::load( GrapesTreatment::getGrapes() ) );
        return true;
    }

    /**
     * @brief Factorize routing
     * @details This function is used to found the Grapes wanted by repport a HTTP request receipt.
     * @version 1.0.0
     *
     * @return <I>boolean<\I> — False if the Kernel is not started else true
     * 
     * @par Source
     * 
     */       
    public static function treatment_routes()
    {
        if ( self::$instance == false ){
            return 0;
        }
        RouterTreatment::setRouterParents( RouterLoader::loadParentsRouter( RouterTreatment::getRouterFiles() ) );
        RouterTreatment::developChildsRoutes();
        RouterTreatment::createRealRouter();
        RouterTreatment::routerPatternToReg();
        return 1;
    }
    
    /**
     * @brief Match the route 
     * @details Found the Grapes wanted by reppoer a HTTP request receipt.
     * @version 1.0.0
     *
     * @return <I>boolean<\I> — False if the Kernel is not started else true
     * 
     * @par Source
     * 
     */   
    public static function route_match()
    {
        if ( self::$instance == false ){
            return false;
        }
        RouterTreatment::getRoute();
        return true;
    }
    
    /**
     * @brief Execute the Grapes 
     * @details Execute the Grapes founded, if the route is not founded then the response HTTP status change for a code not found. If the Kernel is not started, the response HTTP status change for a code service unavailable.
     * @version 1.0.0
     *
     * @return <I>int<\I> — 1 for a correctly processing or other value like 404 or 503 for a failure
     * 
     * @par Source
     * 
     */   
    public static function route_exe()
    {
        if ( self::$instance == false ){
            Header::setStatus(HeaderConst::CODE_SERVICE_UNAVAILABLE);
            self::$stats = HeaderConst::CODE_SERVICE_UNAVAILABLE;
            return HeaderConst::CODE_SERVICE_UNAVAILABLE;
        }
        
        if ( RouterTreatment::$RouteFound === NULL ){
            Header::setStatus(HeaderConst::CODE_NOT_FOUND);
            self::$stats = HeaderConst::CODE_NOT_FOUND;
            return HeaderConst::CODE_NOT_FOUND;
        }

        Header::setStatus(HeaderConst::CODE_OK);
        self::$stats = HeaderConst::CODE_OK;
        $routeP  = RouterTreatment::$RealRouter[RouterTreatment::$RouteFound]['RouterParent'];
        $routeC  = RouterTreatment::$RealRouter[RouterTreatment::$RouteFound]['RouterChild'];
        $routeCR = RouterTreatment::$RealRouter[RouterTreatment::$RouteFound]['RouterChildRoute'];
        $arg = RouterTreatment::getVar();

        $obj  = RouterTreatment::$RouterParents[$routeP]['childs'][$routeC][$routeCR]['controller'];
        $func = RouterTreatment::$RouterParents[$routeP]['childs'][$routeC][$routeCR]['action'];
        
        self::$render = $obj::$func($arg);
        
        return 1;
    }
    
    /**
     * @brief Execute the Grapes called manually
     * @details Like \p Kernel::route_exe() but is called manually with the argument 'routeId' this is a id of route desired and the uri contains probably of variables
     * @version 1.0.0
     *
     * @return <I>int<\I> — 1 for a correctly processing or other value like 404 or 503 for a failure
     * 
     * @par Source
     * 
     */    
    public static function route_exe_plus($routeId = NULL, $uri = NULL)
    {
        if ( self::$instance == false ){
            Header::setStatus(HeaderConst::CODE_SERVICE_UNAVAILABLE);
            self::$stats = HeaderConst::CODE_SERVICE_UNAVAILABLE;
            return HeaderConst::CODE_SERVICE_UNAVAILABLE;
        }
        
        if ($routeId === NULL){
            return 0;
        }
        
        $routeP  = RouterTreatment::$RealRouter[$routeId]['RouterParent'];
        $routeC  = RouterTreatment::$RealRouter[$routeId]['RouterChild'];
        $routeCR = RouterTreatment::$RealRouter[$routeId]['RouterChildRoute'];
        $arg     = RouterTreatment::getVar($uri,$routeId);
        
        $obj     = RouterTreatment::$RouterParents[$routeP]['childs'][$routeC][$routeCR]['controller'];
        $func    = RouterTreatment::$RouterParents[$routeP]['childs'][$routeC][$routeCR]['action'];
        
        self::$render_plus = $obj::$func($arg);
        
        return 1;
    }

    /**
     * @brief Get the render plus 
     * @details Get the render of Grapes call with \p Kernel::route_exe_plus()
     * @version 1.0.0
     *
     * @return <I>mixed<\I> — This the return of Grapes called
     * 
     * @par Source
     * 
     */ 
    public static function get_render_plus()
    {
        return self::$render_plus;
    }
    
    /**
     * @brief Load Twig
     * @details Load the service Twig
     * @version 1.0.0
     *
     * @return NULL
     * 
     * @par Source
     * 
     */ 
    public static function twig_loader()
    {
        TwigTreatment::start();
    }
    
    /**
     * @brief Load Edb
     * @details Load the service Edb
     * @version 1.0.0
     *
     * @return NULL
     * 
     * @par Source
     * 
     */ 
    public static function edb_loader()
    {
        EdbTreatment::start();
    }
    
    /**
     * @brief Echo the response
     * @details This function echo the render of Grapes called. See \p Kernel::route_exe() and \p Kernel::$render.
     * @version 1.0.0
     *
     * @return <I>mixed<\I> — \p Kernel::$render
     * 
     * @par Source
     * 
     */ 
    public static function echo_response()
    {
        if (self::$stats == 404 ){
            echo 'PAGE NON TROUVEE';
        } else {
            echo self::$render;
        }
    }
}
