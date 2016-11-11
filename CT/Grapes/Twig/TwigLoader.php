<?php
/**
 * @file TwigLoader.php
 * @brief The TwigLoader class
 * @details This file contains the TwigLoader class
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

use CT\Grapes\Grapes\GrapesTreatment;
/**
 * @brief The TwigLoader class
 * @author 0xCT
 */
class TwigLoader {
    public static $dirs;
    public static $dirsExt;
    public static $fileExt;
    
    /**
     * @brief Get view and twigExt dir in all grape source
     * @details For each grape check if a view dir exist and add to list if yes.
     * @return <I>array</I> — List of all view dir
     */   
    public static function getDirs(){
        for ($i = 0, $m = count(GrapesTreatment::$Grapes);$i<$m;$i++){
            $Grape = GrapesTreatment::$Grapes[$i];
            if (is_dir($Grape->getSpace().'/view')) {
                self::$dirs[] = $Grape->getSpace().'/view';
            }
            if (is_dir($Grape->getSpace().'/twigExt')) {
                self::$dirsExt[] = $Grape->getSpace().'/twigExt';
            }
        }
        return self::$dirs;
    }

  
    /**
     * @brief Get all extension of twig, function and filter.
     * @details For each grape check if a twigExt exist in dir and add to twig
     */   
    public static function getExt(){
        for ($i = 0, $m = count(self::$dirsExt);$i<$m;$i++){
            $scan = scandir(self::$dirsExt[$i]);
            foreach ($scan as $file){
                if ( strpos($file,'twigExt.php') != FALSE ){
                    self::$fileExt[] = self::$dirsExt[$i] . '/' . $file;
                    require_once self::$dirsExt[$i] . '/' . $file;
                }
            }
        }
    }
}
