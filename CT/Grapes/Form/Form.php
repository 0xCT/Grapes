<?php
/**
 * @file Form.php
 * @brief The Form class
 * @details This file contains the Form class 
 * @author Thibaud Canaud
 * @date 11-10-2016
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
namespace CT\Grapes\Form;

/**
 * @brief The Form class
 * @author 0xCT
 */
class Form
{
    /**
     * @brief Check data value with form given
     * @details For each post value check with the assigned by pattern in form
     * @version 1.0.0
     * 
     * @param $post <I>array</I> — List of inputs posted ( $_POST )
     * @param $form <I>array</I> — List of pattern
     * @return <I>mixed</I> — true or key of input not valid
     * 
     * @par Source
     * 
     */
    public static function checkData($post,$form){
        $keys = array_keys($form);
        foreach ($keys as $key){
            if ( ! isset($post[$key]) ) return $key;
            if ( ! preg_match('/'.$form[$key].'/', $post[$key]) ) return $key;
        }
        return true;
    }
}