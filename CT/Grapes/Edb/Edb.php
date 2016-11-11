<?php
/**
 * @file Edb.php
 * @brief Edb or EasyDataBase
 * @details This file contains the <B>static</B> class <B>Edb</B>, it brings the basic functions to have a dialogue with MySQL.
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

/**
 * @brief The Edb class
 */
class Edb
{
    /**
     * @brief <I>string</I> — The MySQL login
     * @details Default value is defined by mysql.default_user. In SQL safe mode, this parameter is ignored and the name of the user that owns the server process is used.
     */
    static private $login;
    
    /**
     * @brief <I>string</I> — The MySQL password 
     * @details The password. Default value is defined by mysql.default_password. In SQL safe mode, this parameter is ignored and empty password is used. 
     */
    static private $password;
    
    /**
     * @brief <I>string</I> — The MySQL server
     * @details It can also include a port number. e.g. "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for the localhost. 
     */
    static private $url;
    
    /**
     * @brief <I>object</I> — The object mysqli
     */
    static $mysqli_obj;
    
    /**
     * @brief <I>object</I> — The object mysqli_result
     */
    static $result;

    /**
     * @brief Save the login information for MySQL
     * @details The information of connection is protected in the object Edb
     * @version 1.0.0
     *
     * @param $login <I>string</I> — The MySQL login
     * @param $password <I>string</I> — The MySQL password
     * @param $url <I>string</I> — The MySQL server
     * @return NULL
     * 
     * @par Example
     * @code{.php}
     *  use CT\Grapes\Edb\Edb;
     *  Edb::setParamCo('root','','localhost'); // Set MySQL login
     * @endcode
     * 
     * @see http://php.net/manual/en/book.mysqli.php
     * 
     * @par Source
     * 
     */
    public static function setParamCo($login,$password,$url)
    {
        self::$login 	= $login;
        self::$password = $password;
        self::$url      = $url;
    }
    
    
    /**
     * @brief Open a new connection to the MySQL server
     * @details The function connect uses variables static Edb object (\p Edb::$login, \p Edb::$password, \p Edb::$url) as well as the argument \p $ndb to connect to MySQL. If an error arises during the connection the script throw an exception into the generator.
     * @version 1.0.0
     *
     * @param $ndb <I>string</I> — The database name
     * @throw Display the failure
     * @return NULL
     * 
     * @par Example
     * @code{.php}
     *  use CT\Grapes\Edb\Edb;
     *  Edb::setParamCo('root','','localhost'); // Set MySQL login
     *  Edb::conect('base1');   // Attempt of connection with the database named base1
     * @endcode
     * 
     * @see http://php.net/manual/en/function.mysqli-connect.php
     * @see http://php.net/manual/en/book.mysqli.php
     * 
     * @par Source
     * 
     */
    public static function connect($ndb)
    {
        self::$mysqli_obj = new \mysqli(self::$url,self::$login,self::$password,$ndb);
        if (self::$mysqli_obj->connect_errno) throw new \Exception('Failure during the connection to MySQL ! ('. self::$mysqli_obj->connect_errno . ') ' . self::$mysqli_obj->connect_error );
    }
    
    /**
     * @brief Sets the default client character set
     * @details Defined the collation with the argument \p $col to have a dialogue in the same language.
     * @version 1.0.0
     *
     * @param $col <I>string</I> — The collation
     * @throw Display the failure
     * @return NULL
     * 
     * @par Example
     * @code{.php}
     *  use CT\Grapes\Edb\Edb;
     *  Edb::setParamCo('root','','localhost'); // Set MySQL login
     *  Edb::connect('test');   // Attempt of connection with the database named base1
     *  Edb::setCharset('utf8'); // Define the encoding used for speaking at MySQL 
     * @endcode
     * 
     * @see http://php.net/manual/en/mysqli.set-charset.php
     * @see http://php.net/manual/en/book.mysqli.php
     * 
     * @par Source
     * 
     */
    public static function setCharset($col)
    {
        if (!self::$mysqli_obj->set_charset($col))
            throw new \Exception('charset failure ! ('. self::$mysqli_obj->connect_errno . ') ' . self::$mysqli_obj->connect_error );
        
    }
    
    /**
     * @brief Performs a query on the database
     * @details Execute the request \p $q with the function query of Edb::mysqli_obj instanced and set \p Edb::$result with the return of the query function of \p Edb::$mysql_obj
     * @version 1.0.2
     * 
     * @param $q <I>string</I> — The query string
     * @return <I>mixed</I> — true if the query is successful or string if the query failure
     *  
     * @par Example
     * @code{.php}
     *  use CT\Grapes\Edb\Edb;
     *  Edb::setParamCo('root','','localhost'); // Set MySQL login
     *  Edb::conect('base1');   // Attempt of connection with the database named base1
     *  Edb::setCharset('utf8'); // Define the encoding used for speaking at MySQL 
     *  // Make galery in test
     *  $query = Edb::query("CREATE TABLE `test`.`galery` ( `id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `url` TEXT NOT NULL , `add` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
     *  // Check query's state
     *   if ($query == 1){
     *       echo 'Make database "galery" in "test" : successfull'.PHP_EOL;
     *   } else {
     *       echo 'Make database "galery" in "test" : fail'.PHP_EOL.'FAILURE : '.$query.PHP_EOL.'Ended program';
     *   }
     * @endcode
     * 
     * @see http://php.net/manual/en/mysqli.query.php
     * @see http://php.net/manual/en/class.mysqli-result.php
     * @see http://php.net/manual/en/book.mysqli.php
     * 
     * @par Source
     * 
     */
    public static function query($q)
    {
        self::$result = self::$mysqli_obj->query($q);
        if (!self::$result) return 'Query failure ! ('. self::$mysqli_obj->connect_errno . ') ' . self::$mysqli_obj->connect_error;
        return 1;
    }
    
    /**
     * @brief Compile the query result in array
     * @details Return the cases found since the object mysql_result ( \p Edb::$result )
     * @version 1.0.0
     *
     * @return <I>array</I> — The answers lines of requests, a void array if the result failure
     * 
     * @par Example
     * @code {.php}
     *  use CT\Grapes\Edb\Edb;
     * 
     *  Edb::setParamCo('root','','localhost');
     *  Edb::connect('test');
     * 
     *  // Check if database galery exists
     *  $query = Edb::query("SELECT * FROM `galery` WHERE 1");  
     *  // Check if Edb::result() is not empty array
     *  if (Edb::result() != array()){
     *      echo 'The database "galery" exists'.PHP_EOL;
     *  } else {
     *      echo 'The database not found'.PHP_EOL;
     *      
     *      // Make a database "galary"
     *      $query = Edb::query("CREATE TABLE `test`.`galery` ( `id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `url` TEXT NOT NULL , `add` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
     *      if ($query == 1){
     *          echo 'Make database "galery" in "test" : successfull'.PHP_EOL;
     *      } else {
     *          echo 'Make database "galery" in "test" : fail'.PHP_EOL.'Ended program';
     *          exit();
     *      }
     *  }
     * 
     *  // Insert a row in "galery"
     *  $query = Edb::query("INSERT INTO `galery` (`id`, `title`, `url`, `add`) VALUES (NULL, 'A cat', 'http://localhost/test/images/cat.jpg', CURRENT_TIMESTAMP);");
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
     * @see http://php.net/manual/en/mysqli-result.data-seek.php
     * @see http://php.net/manual/en/mysqli-result.fetch-assoc.php
     * @see http://php.net/manual/en/class.mysqli-result.php
     * @see http://php.net/manual/en/book.mysqli.php
     * 
     * @par Source
     * 
     */
    public static function result()
    {
        $return = array();
        if ( self::$result === FALSE || is_bool(self::$result) ) return $return;
        self::$result->data_seek(0);
        while ($row = self::$result->fetch_assoc())
        {
            $return[] = $row;
        }
        return $return;
    }

    public static function lastInsertId()
    {
        return self::$mysqli_obj->insert_id;
    }
}