<?php
/**
 * @file Session.php
 * @brief The SessionManager class
 * @details This file contains the SessionManager class
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

class SessionManager extends Session
{
    /**
     * @brief <I>string</I> — The name of item
     * @details This is a name of sub item used in session
     */
    protected $item;

    /**
     * @brief Construct class
     * @param $item <I>string</I> — Name of sub item used
     * @par Source
     */ 
    public function __construct($item)
    {
        parent::start();
        $this->item = $item;
    }
    
    /**
     * @brief Set a subjet in subitem
     * @param $subject <I>string</I> — Name of subject
     * @param $value <I>string</I> — Value of subject
     * @param $type <I>string</I> — Type of subject. Default is string.
     * @par Source
     */ 
    public function set($subject,$value,$type='string'){
        parent::_set($this->item.'.'.$subject,$value,$type);
        return $this;
    }
    
    /**
     * @brief get a subjet in subitem
     * @param $subject <I>string</I> — Name of subject
     * @param $type <I>string</I> — Type of subject. Default is string.
     * @return <I>mixed</I> — The value of subject request
     * @par Source
     */ 
    public function get($subject,$type='string'){
        return parent::_get($this->item.'.'.$subject,$type);
    }
    
    /**
     * @brief Get item complet
     * @return <I>mixed</I> — All subjects of this item
     * @par Source
     */ 
    public function getItem(){
        $item = array();
        foreach ($_SESSION as $key => $value) {
            if ( substr($key, 0, strlen($this->item)) == $this->item) $item[substr($key,strlen($this->item)+1)] = $value;
        }
        return $item;
    }

    /**
     * @brief Delete this item of session
     * @par Source
     */ 
    public function delItem(){
        foreach ($_SESSION as $key => $value) {
            if ( substr($key, 0, strlen($this->item)) == $this->item) unset($_SESSION[$key]);
        }
    }

    /**
     * @brief Delete a subject of this item
     * @par Source
     */ 
    public function del($subject){
        unset($_SESSION[$this->item.'.'.$subject]);
    }
}