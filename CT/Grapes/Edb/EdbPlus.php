<?php
/**
 * @file EdbPlus.php
 * @brief EdbPlus
 * @details This file contains the <B>no-static</B> class <B>EdbPlus</B>, it facilitates the conversation with MySQL in particular during the requests with variables.
 * @see Class Edb
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

namespace CT\Grapes\Edb;

use CT\Grapes\Edb\Edb;

/**
 * @brief The EdbPlus class, the child of Edb class
 */
class EdbPlus extends Edb
{
    /**
     * @brief <I>string</I> — Request
     * @details The request SQL
     */
    public $req;
    /**
     * @brief <I>array</I> — They are subjets request
     * @details The subjets in the prepared request
     */
    public $req_s;
    /**
     * @brief <I>array</I> — They are types request
     * @details The types in the prepared request
     */
    public $req_t;
    /**
     * @brief <I>array</I> — They are values request
     * @details The verboses in the prepared request
     */
    public $req_v;
    /**
     * @brief <I>mixed</I> — The return of request
     * @details This variable give the state of last throwing query
     */
    public $req_rq;
    
    /**
     * @brief Initialize and prepares a query to prepare
     * @details Before throwing a request, we prepare her in advance with variables marked out by the following characters ":"
     * @version 1.0.0
     * 
     * @param $q <I>string</I> — The SQL query with a posibility of print variable between ":" caracters
     * @return <I>object</I> — Instancie of \t EdbPlus
     * 
     * @see http://sql.sh/
     * 
     * @par Example of variable parsing
     * 
     * @code {.php} 
     *  $Edb->prepare('SELECT * INTO `galery` WHERE `title` = :thetitle:')
     *      ->setParam('thetitle','A cat')
     *      ->execute();
     * @endcode
     * 
     * @par Example 
     * 
     * @code {.php}
     *  use CT\Grapes\Edb\Edb;
     *  use CT\Grapes\Edb\EdbPlus;
     *  
     *  Edb::setParamCo('root','','localhost');
     * 
     *  $Edb = new EdbPlus();
     *  $Edb->connect('test');
     * 
     *  // Check if database galery exists
     *  $query = $Edb->query("SELECT * FROM `galery` WHERE 1");  
     *  // Check if Edb::result() is not empty array
     *  if ($Edb->result() != array()){
     *      echo 'The database "galery" exists'.PHP_EOL;
     *  } else {
     *      echo 'The database not found'.PHP_EOL;
     *      
     *      // Make a database "galary"
     *      $query = $Edb->query("CREATE TABLE `test`.`galery` ( `id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `url` TEXT NOT NULL , `add` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
     *      if ($query == 1){
     *          echo 'Make database "galery" in "test" : successfull'.PHP_EOL;
     *      } else {
     *          echo 'Make database "galery" in "test" : fail'.PHP_EOL.'Ended program';
     *          exit();
     *      }
     *  }
     *  
     *  $Edb->prepare("INSERT INTO `galery` (`id`, `title`, `url`, `add`) VALUES (NULL, :title:, :url:, CURRENT_TIMESTAMP);")
     *      ->setParam('title','A dog')
     *      ->setParam('url','http://localhost/test/images/dog.jpg')
     *      ->execute();
     *  if ( $Edb->req_rq != 1 ) {
     *      echo 'Insert failled !'.PHP_EOL.$Edb->req_rq.PHP_EOL.'sql request : '.$Edb->req.PHP_EOL.'Ended program';
     *      exit();
     *   }
     *  
     *  // Insert a row in "galery"
     *  if ( $query != 1){
     *      echo 'Insert failled !'.PHP_EOL.$query.PHP_EOL.'Ended program';
     *      exit();
     *  }
     * 
     *  echo 'Row inserted'.PHP_EOL;
     *  $query = Edb::query('SELECT * FROM `galery` WHERE 1');
     *  if ( $query != 1){
     *      echo 'Select failled !'.PHP_EOL.$query.PHP_EOL.'Ended program';
     *      exit();
     *  }
     * 
     *  echo 'GALERY : '.PHP_EOL;
     *  // For each rows
     *  foreach ( Edb::result() as $row ){
     *      // Report the name and value of this row
     *      foreach ($row as $key => $value) {
     *          echo $key ."\t". $value . PHP_EOL;
     *      }
     *      echo PHP_EOL;
     *  }
     * @endcode
     * 
     * @par Source
     * 
     */
    public function prepare($q)
    {
            $this->req = $q;
            $this->req_s = array();
            $this->req_v = array();
            $this->req_t = array();
            return $this;
    }
    
    /**
     * @brief Sets the var for prepare the query
     * @details Add the subject, the verbose and the type in array. Her used when creating the final query.
     * @version 1.0.5
     * 
     * @param $q <I>string</I> — The subjet, the name of variable used in prepare query
     * @param $q <I>mixed</I> — The value, this var may be a int or string
     * @param $q <I>string</I> — The type, define wich by their print the var in final query. Default is 's' for string and if you want use int them add this argument to 'd'
     * @return <I>object</I> — Current instancie of \t EdbPlus
     * 
     * @par Example
     * 
     * @code {.php} 
     *  $Edb->prepare('SELECT * INTO `galery` WHERE `id` = :id:') // The query with var id
     *      ->setParam('id',1,'d') // Define the var id at 1
     *      ->execute();
     * @endcode
     *
     * @code {.php} 
     *  $Edb->prepare('SELECT * INTO `galery` WHERE `name` = :thename:') // The query with var name
     *      ->setParam('thename','A cat') // Define the var name at 'A cat'
     *      // Default the type is 's' for string variable.
     *      ->execute();
     * @endcode
     *
     * @par Source
     * 
     */
    public function setParam($s,$v,$t = 's')
    {
            $this->req_s[] = $s;
            if ($t == 's'){
                $this->req_v[] = self::$mysqli_obj->real_escape_string($v);
            } else {
                $this->req_v[] = $v;
            }
            $this->req_t[] = $t;
            return $this;
    }

    /**
     * @brief Execute the query prepared
     * @details This function generate the query prepared with the initial query gived by function \p EdbPlus::prepare() and the variables gived with function \p EdbPlus::setParam(). After the final query generated, this function throw the query to mysqli
     * @version 1.0.1
     * 
     * @return NULL
     * 
     * @par Example
     * 
     * @code {.php} 
     *  $Edb->prepare('SELECT * INTO `galery` WHERE `name` = :name:')
     *      ->setParam('name','A dog')
     *      ->execute(); // Execute the query
     * @endcode
     *
     * @par Bonus
     *
     * @code {.php}
     *  $Edb->prepare('SELECT * INTO `galery` WHERE `name` = :name:')
     *      ->setParam('name','A dog')
     *      ->execute(); // Execute the query
     *
     *  $result = $Edb->result(); // Get the result of query prepared
     *
     *  var_dump($result); // Display the result
     * @endcode
     *
     * @par Source
     * 
     */
    public function execute()
    {
            foreach ($this->req_s as $key => $value) {
                if ($this->req_t[$key] == "d"){
                        $this->req = str_replace(":".$this->req_s[$key].":", $this->req_v[$key], $this->req );
                }
                else if ($this->req_t[$key] == "s"){
                        $this->req = str_replace(":".$this->req_s[$key].":", '"'.$this->req_v[$key].'"' , $this->req );
                }
            }

            $this->req_rq = self::query($this->req);
    }
}