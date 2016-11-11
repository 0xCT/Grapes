<?php
/**
 * @file TwigExtention.php
 * @brief The TwigExtension class
 * @details This file contains the TwigExtension class
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

use CT\Grapes\Twig\TwigTreatment;
/**
 * @brief The TwigExtension class
 * @author 0xCT
 */
class TwigExtension {
    /**
     * @brief Create a new filter in Twig
     * @param $name <I>string</I> — Name of filter
     * @param $function <I>funciton</I> — Funciton of filter
     * @return <I>boolean</I> — True for valid and False for fail
     */
    public static function addFilter($name,$function){
        if ( TwigTreatment::$twig == NULL ) return false;
        $filter = new \Twig_SimpleFilter($name,$function);
        TwigTreatment::$twig->addFilter($filter);
        return true;
    }

    /**
     * @brief Create a new function in Twig
     * @param $name <I>string</I> — Name of filter
     * @param $function <I>funciton</I> — Funciton
     * @return <I>boolean</I> — True for valid and False for fail
     */    
    public static function addFunction($name,$function){
        if ( TwigTreatment::$twig == NULL ) return 0;
        $function = new \Twig_SimpleFunction($name,$function);
        TwigTreatment::$twig->addFunction($function);
        return 1;
    }
}
