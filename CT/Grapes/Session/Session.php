<?php
/**
 * @file Session.php
 * @brief The Session class
 * @details This file contains the Session class
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
namespace CT\Grapes\Session;

/**
 * @brief The Session class
 * @author 0xCT
 */
class Session
{
    /**
     * @brief <I>boolean</I> — Stats of Session class
     * @details false or null if the start has never be called
     */
    private static $instancie;
    
    /**
     * @brief Initialise class
     * @details If \p $instancie is NULL or FALSE the class has never been called. which means that \p session_start() has never be called too. And when \p $intancie is true then \p session_start in already be called. 
     * @par Source
     */
    public static function start(){
        if ( self::$instancie == true ) return false;
        session_start();
        self::$instancie = true;
    }
    
    /**
     * @brief Get the value in session
     * @param $item <I>string</I> — Name of item to get in session
     * @param $type <I>string</I> — Default is string or array for unserialize the item searched
     * @return <I>mixed</I> Return the item session value
     * @par Source
     */    
    public static function _get($item, $type = 'string'){
        switch ($type){
            case 'string':
                return empty($_SESSION[$item]) ? NULL : $_SESSION[$item];
                break;
            case 'array':
                return empty($_SESSION[$item]) ? NULL : unserialize($_SESSION[$item]);
                break;
        }
    }
    /**
     * @brief Set the value in session
     * @param $item <I>string</I> — Name of item to set in session
     * @param $type <I>string</I> — Value of this item
     * @param $type <I>string</I> — Type of this item
     * @par Source
     */    
    public static function _set($item, $value, $type = 'string'){
        switch ($type){
            case 'string':
                $_SESSION[$item] = $value;
                break;
            case 'array':
                $_SESSION[$item] = serialize($value);
                break;
        }

    }

}