<?php
/**
 * @file GrapesTreatment
 * @brief Treatment of Grapes
 * @details This file contains the <B>static</B> class <B>GrapesTreatment</B>.
 * @author Thibaud Canaud
 * @todo comment this file
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
namespace CT\Grapes\Grapes;

/**
 * @brief The GrapesTreatment class
 */
class GrapesTreatment {
    public static $Grapes;
    
    public static function setGrapes($grapes){
        self::$Grapes = $grapes;
    }
    
    public static function getGrapes(){
        return self::$Grapes;
    }
    
    public static function treatment(){
        for ($i = 0, $m = count(self::$Grapes); $i<$m; $i++){
            echo $i.' : ';
            $grape = self::$Grapes[$i];
            echo $grape::getSpace();
            echo '<hr>';
        }
    }
}
