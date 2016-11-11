<?php
/**
 * @file TwigTreatment.php
 * @brief The TwigTreatment class
 * @details This file contains the TwigTreatment class
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
namespace CT\Grapes\Twig;

use CT\Grapes\Session\SessionManager;
use CT\Grapes\Twig\TwigLoader;
use CT\Grapes\Twig\TwigExtension;

use CT\Grapes\Router\RouterTreatment;
use CT\Grapes\Kernel\Kernel;
/**
 * @brief The TwigTreatment class
 * @author 0xCT
 */
class TwigTreatment {
    /**
     * @brief <I>object</I> — The instance of Twig object
     * @details This is object witch the which one display a twig html file
     */
    public static $twig;
    
    /**
     * @brief Initialize twig
     */   
    public static function start(){
        if (self::$twig != NULL) return 0;
        \Twig_Autoloader::register();
        $dirs = TwigLoader::getDirs();
        $loaderTwig = new \Twig_Loader_Filesystem($dirs, array(
            'cache' => false,
        ));
        self::$twig = new \Twig_Environment($loaderTwig);
        TwigLoader::getExt();
        
        TwigExtension::addFunction('path', function($name, $arg = NULL){
            return RouterTreatment::path($name, $arg);
        });
        
        TwigExtension::addFunction('grapes_dir', function(){
            return _GRAPES_DIR_;
        });

        TwigExtension::addFunction('show', function($path){
            if (is_array($path) ){
                if ( isset($path['stats']) ){
                    if ($path['stats'] == true){
                        $route = RouterTreatment::getRoute($path['path']);
                        Kernel::route_exe_plus($route,$path['path']);
                        return Kernel::get_render_plus();
                    }
                }
            }
        });

        TwigExtension::addFunction('SessionManager', function($item){
            $Session_item = new SessionManager($item);
            return $Session_item;
        });


        TwigExtension::addFunction('SessionManager_getItem', function(SessionManager $Session_item){
            return $Session_item->getItem();
        });


    }
}
