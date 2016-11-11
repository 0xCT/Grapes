<?php
/**
 * @file Server.php
 * @brief Server class
 * @details This file contains the <B>static</B> class <B>Server</B>.
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

namespace CT\Grapes\HTTP;

/**
 * Description of HTTP Request
 *
 * @author 0xCT
 */
Class Server 
{
    /**
     * Chemin du script
     * @return string
     */
    public static function getUri(){
        return $_SERVER['REQUEST_URI'];
    }
    
    /**
     * Méthode d'appel du script
     * @return string
     */
    public static function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }
    
    /**
     * Racine du serveur
     * @return string
     */
    public static function getDocumentRoot(){
        return $_SERVER['DOCUMENT_ROOT'];
    }
    
    /**
     * Langage accepté par le navigateur
     * @return string
     */
    public static function getAcceptLanguage(){
        return $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    }
    
    /**
     * Nom de domaine du serveur
     * @return string
     */
    public static function getHost(){
        return $_SERVER['HTTP_HOST'];
    }
    
    /**
     * Type de navigateur
     * @return string
     */
    public static function getHttpUserAgent(){
        return $_SERVER['HTTP_USER_AGENT'];
    }
    
    /**
     * Chemin web du script
     * @return string
     */
    public static function getPHPSelf(){
        return $_SERVER['PHP_SELF'];
    }
    
    /**
     * Adresse du serveur
     * @return string
     */
    public static function getRemoteAddress(){
        return $_SERVER['REMOTE_ADDR'];
    }
    
    /**
     * Port du serveur
     * @return string
     */
    public static function getRemotePort(){
        return $_SERVER['REMOTE_PORT'];
    }
    
    /**
     * Liste des paramètres passés au script
     * @return string
     */
    public static function getQueryString(){
        return $_SERVER['QUERY_STRING'];
    }
    
    /**
     * Adresse IP du serveur
     * @return string
     */
    public static function getServeurAddress(){
        return $_SERVER['SERVER_ADDR'];
    }

    /**
     * Adresse de l'administrateur du serveur
     * @return string
     */       
    public static function getServeurEmailAdmin(){
        return $_SERVER['SERVER_ADMIN'];
    }
    
    /**
     * Nom local du serveur
     * @return string
     */ 
    public static function getServeurName(){
        return $_SERVER['SERVER_NAME'];
    }
    
    /**
     * Type de serveur
     * @return string
     */ 
    public static function getServeurSignature(){
        return $_SERVER['SERVER_SIGNATURE'];
    }
    
    /**
     * Date de la requête
     * @return string
     */ 
    public static function getTime(){
        return $_SERVER['REQUEST_TIME'];
    }
    
    /**
     * Date de la requête (float)
     * @return string
     */ 
    public static function getTimeFloat(){
        return $_SERVER['REQUEST_TIME_FLOAT'];
    }    
    
    /**
     * Protocol du serveur
     * @return string
     */ 
    public static function getProtocol(){
        return $_SERVER['SERVER_PROTOCOL'];
    }
    
    /**
     * Interface porte
     * @return string
     */ 
    public static function getInterface(){
        return $_SERVER['GATEWAY_INTERFACE'];
    }
    
    /**
     * Emplacement du script
     * @return string
     */ 
    public static function getScriptFilename(){
        return $_SERVER['SCRIPT_FILENAME'];
    }
}
