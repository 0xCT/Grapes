<?php
/**
 * @file HeaderConst.php
 * @brief HeaderConst class
 * @details This file contains the <B>static</B> class <B>HeaderConst</B>.
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
 * @brief Const Header
 * @author 0xCT
 */
Class HeaderConst
{
    /*
     * @brief HTTP CODE
     */
    
    /**
     * @brief  Attente de la suite de la requête.
     */
    const CODE_CONTINUE = 100;
    
    /**
     * @brief  Acceptation du changement de protocole.
     */
    const CODE_SWITCHING_PROTOCOLS = 101;

    /**
     * @brief  WebDAV : Traitement en cours (évite que le client dépasse le temps d’attente limite).
     */
    const CODE_PROCESSING = 102;

    /**
     * @brief  Requête traitée avec succès.
     */
    const CODE_OK = 200;

    /**
     * @brief  Requête traitée avec succès et création d’un document.
     */
    const CODE_CREATED = 201;

    /**
     * @brief  Requête traitée, mais sans garantie de résultat.
     */
    const CODE_ACCEPTED = 202;

    /**
     * @brief  Information retournée, mais générée par une source non certifiée.
     */
    const CODE_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * @brief  Requête traitée avec succès mais pas d’information à renvoyer.
     */
    const CODE_NO_CONTENT = 204;

    /**
     * @brief  Requête traitée avec succès, la page courante peut être effacée.
     */
    const CODE_RESET_CONTENT = 205;

    /**
     * @brief  Une partie seulement de la ressource a été transmise.
     */
    const CODE_PARTIAL_CONTENT = 206;

    /**
     * @brief  WebDAV : Réponse multiple.
     */
    const CODE_MULTI_STATUS = 207;

    /**
     * @brief  WebDAV : La copie de la ressource côté client diffère de celle du serveur (contenu ou propriétés).
     */
    const CODE_CONTENT_DIFFERENT = 210;

    /**
     * @brief  RFC 3229 : Le serveur a accompli la requête pour la ressource, et la réponse est une représentation du résultat d'une ou plusieurs manipulations d'instances appliquées à l'instance actuelle.
     */
    const CODE_IM_USED = 226;

    /**
     * @brief  L’URI demandée se rapporte à plusieurs ressources.
     */
    const CODE_MULTIPLE_CHOICES = 300;

    /**
     * @brief  Document déplacé de façon permanente.
     */
    const CODE_MOVED_PERMANENTLY = 301;

    /**
     * @brief  Document déplacé de façon temporaire.
     */
    const CODE_MOVED_TEMPORARILY = 302;

    /**
     * @brief  La réponse à cette requête est ailleurs.
     */
    const CODE_SEE_OTHER = 303;

    /**
     * @brief  Document non modifié depuis la dernière requête.
     */
    const CODE_NOT_MODIFIED = 304;

    /**
     * @brief  La requête doit être ré-adressée au proxy.
     */
    const CODE_USE_PROXY = 305;

    /**
     * @brief  Code utilisé par une ancienne version de la RFC 2616, à présent réservé.
     */
    const CODE_SWITCH_PROXY = 306;

    /**
     * @brief  La requête doit être redirigée temporairement vers l’URI spécifiée.
     */
    const CODE_TEMPORARY_REDIRECT = 307;

    /**
     * @brief  La requête doit être redirigée définitivement vers l’URI spécifiée.
     */
    const CODE_PERMANENT_REDIRECT = 308;

    /**
     * @brief  La requête doit être redirigée de trop nombreuses fois, ou est victime d’une boucle de redirection.
     */
    const CODE_TOO_MANY_REDIRECTS = 310;

    /**
     * @brief  La syntaxe de la requête est erronée.
     */
    const CODE_BAD_REQUEST = 400;

    /**
     * @brief  Une authentification est nécessaire pour accéder à la ressource.
     */
    const CODE_UNAUTHORIZED = 401;

    /**
     * @brief  Paiement requis pour accéder à la ressource.
     */
    const CODE_PAYMENT_REQUIRED = 402;

    /**
     * @brief  Le serveur a compris la requête, mais refuse de l'exécuter. Contrairement à l'erreur 401, s'authentifier ne fera aucune différence. Sur les serveurs où l'authentification est requise, cela signifie généralement que l'authentification a été acceptée mais que les droits d'accès ne permettent pas au client d'accéder à la ressource.
     */
    const CODE_FORBIDDEN = 403;

    /**
     * @brief  Ressource non trouvée.
     */
    const CODE_NOT_FOUND = 404;

    /**
     * @brief  Méthode de requête non autorisée.
     */
    const CODE_METHOD_NOT_ALLOWED = 405;

    /**
     * @brief  La ressource demandée n'est pas disponible dans un format qui respecterait les en-têtes "Accept" de la requête.
     */
    const CODE_NOT_ACCEPTABLE = 406;

    /**
     * @brief  Accès à la ressource autorisé par identification avec le proxy.
     */
    const CODE_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * @brief  Temps d’attente d’une réponse du serveur écoulé.
     */
    const CODE_REQUEST_TIME_OUT = 408;

    /**
     * @brief  La requête ne peut être traitée en l’état actuel.
     */
    const CODE_CONFLICT = 409;

    /**
     * @brief  La ressource n'est plus disponible et aucune adresse de redirection n’est connue.
     */
    const CODE_GONE = 410;

    /**
     * @brief  La longueur de la requête n’a pas été précisée.
     */
    const CODE_LENGTH_REQUIRED = 411;

    /**
     * @brief  Préconditions envoyées par la requête non vérifiées.
     */
    const CODE_PRECONDITION_FAILED = 412;

    /**
     * @brief  Traitement abandonné dû à une requête trop importante.
     */
    const CODE_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * @brief  URI trop longue.
     */
    const CODE_REQUEST_URI_TOO_LONG = 414;

    /**
     * @brief  Format de requête non supporté pour une méthode et une ressource données.
     */
    const CODE_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * @brief  Champs d’en-tête de requête « range » incorrect.
     */
    const CODE_REQUESTED_RANGE_UNSATISFIABLE = 416;

    /**
     * @brief  Comportement attendu et défini dans l’en-tête de la requête insatisfaisable.
     */
    const CODE_EXPECTATION_FAILED = 417;

    /**
     * @brief  « Je suis une théière ». Ce code est défini dans la RFC 2324[3] datée du premier avril 1998, Hyper Text Coffee Pot Control Protocol.
     */
    const CODE_IAM_A_TEAPOT = 418;

    /**
     * @brief  La requête a été envoyée à un serveur qui n'est pas capable de produire une réponse (par exemple, car une connexion a été réutilisée).
     */
    const CODE_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

    /**
     * @brief  WebDAV : L’entité fournie avec la requête est incompréhensible ou incomplète.
     */
    const CODE_UNPROCESSABLE_ENTITY = 422;

    /**
     * @brief  WebDAV : L’opération ne peut avoir lieu car la ressource est verrouillée.
     */
    const CODE_LOCKED = 423;

    /**
     * @brief  WebDAV : Une méthode de la transaction a échoué.
     */
    const CODE_METHOD_FAILURE = 424;

    /**
     * @brief  WebDAV (RFC 3648). Ce code est défini dans le brouillon WebDAV Advanced Collections Protocol, mais est absent de Web Distributed Authoring and Versioning (WebDAV) Ordered Collections Protocol.
     */
    const CODE_UNORDERED_COLLECTION = 425;

    /**
     * @brief  (RFC 2817) Le client devrait changer de protocole, par exemple au profit de TLS/1.0.
     */
    const CODE_UPGRADE_REQUIRED = 426;

    /**
     * @brief  (RFC 6585[4]) La requête doit être conditionnelle.
     */
    const CODE_PRECONDITION_REQUIRED = 428;

    /**
     * @brief  (RFC 6585) Le client a émis trop de requêtes dans un délai donné.
     */
    const CODE_TOO_MANY_REQUESTS = 429;

    /**
     * @brief  (RFC 6585) Les entêtes HTTP émises dépassent la taille maximale admise par le serveur.
     */
    const CODE_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * @brief  Code défini par Microsoft. La requête devrait être renvoyée après avoir effectué une action.
     */
    const CODE_RETRY_WITH = 449;

    /**
     * @brief  Code défini par Microsoft. Cette erreur est produite lorsque les outils de contrôle parental de Windows sont activés et bloquent l’accès à la page.
     */
    const CODE_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * @brief  Ce code d'erreur indique que la ressource demandée est inaccessible pour des raisons d'ordre légal[5],[6].
     */
    const CODE_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * @brief  WebDAV : Erreur irrécupérable.
     */
    const CODE_UNRECOVERABLE_ERROR = 456;

    /**
     * @brief  Nginx : Le client a fermé la connexion avant de recevoir la réponse. Cette erreur se produit quand le traitement est trop long côté serveur[7].
     */
    const CODE_CLIENT_HAS_CLOSED_CONNECTION = 499;

    /**
     * @brief  Erreur interne du serveur.
     */
    const CODE_INTERNAL_SERVER_ERROR = 500;

    /**
     * @brief  Fonctionnalité réclamée non supportée par le serveur.
     */
    const CODE_NOT_IMPLEMENTED = 501;

    /**
     * @brief  Mauvaise réponse envoyée à un serveur intermédiaire par un autre serveur.
     */
    const CODE_BAD_GATEWAY_OU_PROXY_ERROR = 502;

    /**
     * @brief  Service temporairement indisponible ou en maintenance.
     */
    const CODE_SERVICE_UNAVAILABLE = 503;

    /**
     * @brief  Temps d’attente d’une réponse d’un serveur à un serveur intermédiaire écoulé.
     */
    const CODE_GATEWAY_TIME_OUT = 504;

    /**
     * @brief  Version HTTP non gérée par le serveur.
     */
    const CODE_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * @brief  RFC 2295 : Erreur de négociation. Transparent content negociation.
     */
    const CODE_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * @brief  WebDAV : Espace insuffisant pour modifier les propriétés ou construire la collection.
     */
    const CODE_INSUFFICIENT_STORAGE = 507;

    /**
     * @brief  WebDAV : Boucle dans une mise en relation de ressources (RFC 5842).
     */
    const CODE_LOOP_DETECTED = 508;

    /**
     * @brief  Utilisé par de nombreux serveurs pour indiquer un dépassement de quota.
     */
    const CODE_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * @brief  RFC 2774 : la requête ne respecte pas la politique d'accès aux ressources HTTP étendues.
     */
    const CODE_NOT_EXTENDED = 510;

    /**
     * @brief  RFC 6585 : Le client doit s'authentifier pour accéder au réseau. Utilisé par les portails captifs pour rediriger les clients vers la page d'authentification.
     */
    const CODE_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * @brief  Le serveur renvoie une erreur inconnue.
     */
    const CODE_WEB_SERVER_IS_RETURNING_AN_UNKNOWN_ERROR = 520;
    
    /*
     * @brief HTTP MIME
     */
    /**
    * @brief Andrew Toolkit
    * @brief extension : N/A
    */
  const MIME_ANDREW_TOOLKIT = 'application/andrew-inset';

  /**
    * @brief Applixware
    * @brief extension : .aw
    */
  const MIME_APPLIXWARE = 'application/applixware';

  /**
    * @brief Atom Syndication Format
    * @brief extension : .atom, .xml
    */
  const MIME_ATOM_SYNDICATION_FORMAT = 'application/atom+xml';

  /**
    * @brief Atom Publishing Protocol
    * @brief extension : .atomcat
    */
  const MIME_ATOM_PUBLISHING_PROTOCOL = 'application/atomcat+xml';

  /**
    * @brief Atom Publishing Protocol Service Document
    * @brief extension : .atomsvc
    */
  const MIME_ATOM_PUBLISHING_PROTOCOL_SERVICE_DOCUMENT = 'application/atomsvc+xml';

  /**
    * @brief Voice Browser Call Control
    * @brief extension : .ccxml
    */
  const MIME_VOICE_BROWSER_CALL_CONTROL = 'application/ccxml+xml,';

  /**
    * @brief Cloud Data Management Interface (CDMI) - Capability
    * @brief extension : .cdmia
    */
  const MIME_CLOUD_DATA_MANAGEMENT_INTERFACE_CDMI___CAPABILITY = 'application/cdmi-capability';

  /**
    * @brief Cloud Data Management Interface (CDMI) - Contaimer
    * @brief extension : .cdmic
    */
  const MIME_CLOUD_DATA_MANAGEMENT_INTERFACE_CDMI___CONTAIMER = 'application/cdmi-container';

  /**
    * @brief Cloud Data Management Interface (CDMI) - Domain
    * @brief extension : .cdmid
    */
  const MIME_CLOUD_DATA_MANAGEMENT_INTERFACE_CDMI___DOMAIN = 'application/cdmi-domain';

  /**
    * @brief Cloud Data Management Interface (CDMI) - Object
    * @brief extension : .cdmio
    */
  const MIME_CLOUD_DATA_MANAGEMENT_INTERFACE_CDMI___OBJECT = 'application/cdmi-object';

  /**
    * @brief Cloud Data Management Interface (CDMI) - Queue
    * @brief extension : .cdmiq
    */
  const MIME_CLOUD_DATA_MANAGEMENT_INTERFACE_CDMI___QUEUE = 'application/cdmi-queue';

  /**
    * @brief CU-SeeMe
    * @brief extension : .cu
    */
  const MIME_CU_SEEME = 'application/cu-seeme';

  /**
    * @brief Web Distributed Authoring and Versioning
    * @brief extension : .davmount
    */
  const MIME_WEB_DISTRIBUTED_AUTHORING_AND_VERSIONING = 'application/davmount+xml';

  /**
    * @brief Data Structure for the Security Suitability of Cryptographic Algorithms
    * @brief extension : .dssc
    */
  const MIME_DATA_STRUCTURE_FOR_THE_SECURITY_SUITABILITY_OF_CRYPTOGRAPHIC_ALGORITHMS = 'application/dssc+der';

  /**
    * @brief Data Structure for the Security Suitability of Cryptographic Algorithms
    * @brief extension : .xdssc
    */
  const MIME_DATA_STRUCTURE_FOR_THE_SECURITY_SUITABILITY_OF_CRYPTOGRAPHIC_ALGORITHMS_2 = 'application/dssc+xml';

  /**
    * @brief ECMAScript
    * @brief extension : .es
    */
  const MIME_ECMASCRIPT = 'application/ecmascript';

  /**
    * @brief Extensible MultiModal Annotation
    * @brief extension : .emma
    */
  const MIME_EXTENSIBLE_MULTIMODAL_ANNOTATION = 'application/emma+xml';

  /**
    * @brief Electronic Publication
    * @brief extension : .epub
    */
  const MIME_ELECTRONIC_PUBLICATION = 'application/epub+zip';

  /**
    * @brief Efficient XML Interchange
    * @brief extension : .exi
    */
  const MIME_EFFICIENT_XML_INTERCHANGE = 'application/exi';

  /**
    * @brief Portable Font Resource
    * @brief extension : .pfr
    */
  const MIME_PORTABLE_FONT_RESOURCE = 'application/font-tdpfr';

  /**
    * @brief Hyperstudio
    * @brief extension : .stk
    */
  const MIME_HYPERSTUDIO = 'application/hyperstudio';

  /**
    * @brief Internet Protocol Flow Information Export
    * @brief extension : .ipfix
    */
  const MIME_INTERNET_PROTOCOL_FLOW_INFORMATION_EXPORT = 'application/ipfix';

  /**
    * @brief Java Archive
    * @brief extension : .jar
    */
  const MIME_JAVA_ARCHIVE = 'application/java-archive';

  /**
    * @brief Java Serialized Object
    * @brief extension : .ser
    */
  const MIME_JAVA_SERIALIZED_OBJECT = 'application/java-serialized-object';

  /**
    * @brief Java Bytecode File
    * @brief extension : .class
    */
  const MIME_JAVA_BYTECODE_FILE = 'application/java-vm';

  /**
    * @brief JavaScript
    * @brief extension : .js
    */
  const MIME_JAVASCRIPT = 'application/javascript';

  /**
    * @brief JavaScript Object Notation (JSON)
    * @brief extension : .json
    */
  const MIME_JAVASCRIPT_OBJECT_NOTATION_JSON = 'application/json';

  /**
    * @brief Macintosh BinHex 4.0
    * @brief extension : .hqx
    */
  const MIME_MACINTOSH_BINHEX_4_0 = 'application/mac-binhex40';

  /**
    * @brief Compact Pro
    * @brief extension : .cpt
    */
  const MIME_COMPACT_PRO = 'application/mac-compactpro';

  /**
    * @brief Metadata Authority Description Schema
    * @brief extension : .mads
    */
  const MIME_METADATA_AUTHORITY__DESCRIPTION_SCHEMA = 'application/mads+xml';

  /**
    * @brief MARC Formats
    * @brief extension : .mrc
    */
  const MIME_MARC_FORMATS = 'application/marc';

  /**
    * @brief MARC21 XML Schema
    * @brief extension : .mrcx
    */
  const MIME_MARC21_XML_SCHEMA = 'application/marcxml+xml';

  /**
    * @brief Mathematica Notebooks
    * @brief extension : .ma
    */
  const MIME_MATHEMATICA_NOTEBOOKS = 'application/mathematica';

  /**
    * @brief Mathematical Markup Language
    * @brief extension : .mathml
    */
  const MIME_MATHEMATICAL_MARKUP_LANGUAGE = 'application/mathml+xml';

  /**
    * @brief Mbox database files
    * @brief extension : .mbox
    */
  const MIME_MBOX_DATABASE_FILES = 'application/mbox';

  /**
    * @brief Media Server Control Markup Language
    * @brief extension : .mscml
    */
  const MIME_MEDIA_SERVER_CONTROL_MARKUP_LANGUAGE = 'application/mediaservercontrol+xml';

  /**
    * @brief Metalink
    * @brief extension : .meta4
    */
  const MIME_METALINK = 'application/metalink4+xml';

  /**
    * @brief Metadata Encoding and Transmission Standard
    * @brief extension : .mets
    */
  const MIME_METADATA_ENCODING_AND_TRANSMISSION_STANDARD = 'application/mets+xml';

  /**
    * @brief Metadata Object Description Schema
    * @brief extension : .mods
    */
  const MIME_METADATA_OBJECT_DESCRIPTION_SCHEMA = 'application/mods+xml';

  /**
    * @brief MPEG-21
    * @brief extension : .m21
    */
  const MIME_MPEG_21 = 'application/mp21';

  /**
    * @brief MPEG4
    * @brief extension : .mp4
    */
  const MIME_MPEG4 = 'application/mp4';

  /**
    * @brief Microsoft Word
    * @brief extension : .doc
    */
  const MIME_MICROSOFT_WORD = 'application/msword';

  /**
    * @brief Material Exchange Format
    * @brief extension : .mxf
    */
  const MIME_MATERIAL_EXCHANGE_FORMAT = 'application/mxf';

  /**
    * @brief Binary Data
    * @brief extension : .bin
    */
  const MIME_BINARY_DATA = 'application/octet-stream';

  /**
    * @brief Office Document Architecture
    * @brief extension : .oda
    */
  const MIME_OFFICE_DOCUMENT_ARCHITECTURE = 'application/oda';

  /**
    * @brief Open eBook Publication Structure
    * @brief extension : .opf
    */
  const MIME_OPEN_EBOOK_PUBLICATION_STRUCTURE = 'application/oebps-package+xml';

  /**
    * @brief Ogg
    * @brief extension : .ogx
    */
  const MIME_OGG = 'application/ogg';

  /**
    * @brief Microsoft OneNote
    * @brief extension : .onetoc
    */
  const MIME_MICROSOFT_ONENOTE = 'application/onenote';

  /**
    * @brief XML Patch Framework
    * @brief extension : .xer
    */
  const MIME_XML_PATCH_FRAMEWORK = 'application/patch-ops-error+xml';

  /**
    * @brief Adobe Portable Document Format
    * @brief extension : .pdf
    */
  const MIME_ADOBE_PORTABLE_DOCUMENT_FORMAT = 'application/pdf';

  /**
    * @brief Pretty Good Privacy
    * @brief extension : N/C
    */
  const MIME_PRETTY_GOOD_PRIVACY = 'application/pgp-encrypted';

  /**
    * @brief Pretty Good Privacy - Signature
    * @brief extension : .pgp
    */
  const MIME_PRETTY_GOOD_PRIVACY___SIGNATURE = 'application/pgp-signature';

  /**
    * @brief PICSRules
    * @brief extension : .prf
    */
  const MIME_PICSRULES = 'application/pics-rules';

  /**
    * @brief PKCS #10 - Certification Request Standard
    * @brief extension : .p10
    */
  const MIME_PKCS_10___CERTIFICATION_REQUEST_STANDARD = 'application/pkcs10';

  /**
    * @brief PKCS #7 - Cryptographic Message Syntax Standard
    * @brief extension : .p7m
    */
  const MIME_PKCS_7___CRYPTOGRAPHIC_MESSAGE_SYNTAX_STANDARD = 'application/pkcs7-mime';

  /**
    * @brief PKCS #7 - Cryptographic Message Syntax Standard
    * @brief extension : .p7s
    */
  const MIME_PKCS_7___CRYPTOGRAPHIC_MESSAGE_SYNTAX_STANDARD_2 = 'application/pkcs7-signature';

  /**
    * @brief PKCS #8 - Private-Key Information Syntax Standard
    * @brief extension : .p8
    */
  const MIME_PKCS_8___PRIVATE_KEY_INFORMATION_SYNTAX_STANDARD = 'application/pkcs8';

  /**
    * @brief Attribute Certificate
    * @brief extension : .ac
    */
  const MIME_ATTRIBUTE_CERTIFICATE = 'application/pkix-attr-cert';

  /**
    * @brief Internet Public Key Infrastructure - Certificate
    * @brief extension : .cer
    */
  const MIME_INTERNET_PUBLIC_KEY_INFRASTRUCTURE___CERTIFICATE = 'application/pkix-cert';

  /**
    * @brief Internet Public Key Infrastructure - Certificate Revocation Lists
    * @brief extension : .crl
    */
  const MIME_INTERNET_PUBLIC_KEY_INFRASTRUCTURE___CERTIFICATE_REVOCATION_LISTS = 'application/pkix-crl';

  /**
    * @brief Internet Public Key Infrastructure - Certification Path
    * @brief extension : .pkipath
    */
  const MIME_INTERNET_PUBLIC_KEY_INFRASTRUCTURE___CERTIFICATION_PATH = 'application/pkix-pkipath';

  /**
    * @brief Internet Public Key Infrastructure - Certificate Management Protocole
    * @brief extension : .pki
    */
  const MIME_INTERNET_PUBLIC_KEY_INFRASTRUCTURE___CERTIFICATE_MANAGEMENT_PROTOCOLE = 'application/pkixcmp';

  /**
    * @brief Pronunciation Lexicon Specification
    * @brief extension : .pls
    */
  const MIME_PRONUNCIATION_LEXICON_SPECIFICATION = 'application/pls+xml';

  /**
    * @brief PostScript
    * @brief extension : .ai
    */
  const MIME_POSTSCRIPT = 'application/postscript';

  /**
    * @brief CU-Writer
    * @brief extension : .cww
    */
  const MIME_CU_WRITER = 'application/prs.cww';

  /**
    * @brief Portable Symmetric Key Container
    * @brief extension : .pskcxml
    */
  const MIME_PORTABLE_SYMMETRIC_KEY_CONTAINER = 'application/pskc+xml';

  /**
    * @brief Resource Description Framework
    * @brief extension : .rdf
    */
  const MIME_RESOURCE_DESCRIPTION_FRAMEWORK = 'application/rdf+xml';

  /**
    * @brief IMS Networks
    * @brief extension : .rif
    */
  const MIME_IMS_NETWORKS = 'application/reginfo+xml';

  /**
    * @brief Relax NG Compact Syntax
    * @brief extension : .rnc
    */
  const MIME_RELAX_NG_COMPACT_SYNTAX = 'application/relax-ng-compact-syntax';

  /**
    * @brief XML Resource Lists
    * @brief extension : .rl
    */
  const MIME_XML_RESOURCE_LISTS = 'application/resource-lists+xml';

  /**
    * @brief XML Resource Lists Diff
    * @brief extension : .rld
    */
  const MIME_XML_RESOURCE_LISTS_DIFF = 'application/resource-lists-diff+xml';

  /**
    * @brief XML Resource Lists
    * @brief extension : .rs
    */
  const MIME_XML_RESOURCE_LISTS_2 = 'application/rls-services+xml';

  /**
    * @brief Really Simple Discovery
    * @brief extension : .rsd
    */
  const MIME_REALLY_SIMPLE_DISCOVERY = 'application/rsd+xml';

  /**
    * @brief RSS - Really Simple Syndication
    * @brief extension : .rss, .xml
    */
  const MIME_RSS___REALLY_SIMPLE_SYNDICATION = 'application/rss+xml';

  /**
    * @brief Rich Text Format
    * @brief extension : .rtf
    */
  const MIME_RICH_TEXT_FORMAT = 'application/rtf';

  /**
    * @brief Systems Biology Markup Language
    * @brief extension : .sbml
    */
  const MIME_SYSTEMS_BIOLOGY_MARKUP_LANGUAGE = 'application/sbml+xml';

  /**
    * @brief Server-Based Certificate Validation Protocol - Validation Request
    * @brief extension : .scq
    */
  const MIME_SERVER_BASED_CERTIFICATE_VALIDATION_PROTOCOL___VALIDATION_REQUEST = 'application/scvp-cv-request';

  /**
    * @brief Server-Based Certificate Validation Protocol - Validation Response
    * @brief extension : .scs
    */
  const MIME_SERVER_BASED_CERTIFICATE_VALIDATION_PROTOCOL___VALIDATION_RESPONSE = 'application/scvp-cv-response';

  /**
    * @brief Server-Based Certificate Validation Protocol - Validation Policies - Request
    * @brief extension : .spq
    */
  const MIME_SERVER_BASED_CERTIFICATE_VALIDATION_PROTOCOL___VALIDATION_POLICIES___REQUEST = 'application/scvp-vp-request';

  /**
    * @brief Server-Based Certificate Validation Protocol - Validation Policies - Response
    * @brief extension : .spp
    */
  const MIME_SERVER_BASED_CERTIFICATE_VALIDATION_PROTOCOL___VALIDATION_POLICIES___RESPONSE = 'application/scvp-vp-response';

  /**
    * @brief Session Description Protocol
    * @brief extension : .sdp
    */
  const MIME_SESSION_DESCRIPTION_PROTOCOL = 'application/sdp';

  /**
    * @brief Secure Electronic Transaction - Payment
    * @brief extension : .setpay
    */
  const MIME_SECURE_ELECTRONIC_TRANSACTION___PAYMENT = 'application/set-payment-initiation';

  /**
    * @brief Secure Electronic Transaction - Registration
    * @brief extension : .setreg
    */
  const MIME_SECURE_ELECTRONIC_TRANSACTION___REGISTRATION = 'application/set-registration-initiation';

  /**
    * @brief S Hexdump Format
    * @brief extension : .shf
    */
  const MIME_S_HEXDUMP_FORMAT = 'application/shf+xml';

  /**
    * @brief Synchronized Multimedia Integration Language
    * @brief extension : .smi
    */
  const MIME_SYNCHRONIZED_MULTIMEDIA_INTEGRATION_LANGUAGE = 'application/smil+xml';

  /**
    * @brief SPARQL - Query
    * @brief extension : .rq
    */
  const MIME_SPARQL___QUERY = 'application/sparql-query';

  /**
    * @brief SPARQL - Results
    * @brief extension : .srx
    */
  const MIME_SPARQL___RESULTS = 'application/sparql-results+xml';

  /**
    * @brief Speech Recognition Grammar Specification
    * @brief extension : .gram
    */
  const MIME_SPEECH_RECOGNITION_GRAMMAR_SPECIFICATION = 'application/srgs';

  /**
    * @brief Speech Recognition Grammar Specification - XML
    * @brief extension : .grxml
    */
  const MIME_SPEECH_RECOGNITION_GRAMMAR_SPECIFICATION___XML = 'application/srgs+xml';

  /**
    * @brief Search/Retrieve via URL Response Format
    * @brief extension : .sru
    */
  const MIME_SEARCHRETRIEVE_VIA_URL_RESPONSE_FORMAT = 'application/sru+xml';

  /**
    * @brief Speech Synthesis Markup Language
    * @brief extension : .ssml
    */
  const MIME_SPEECH_SYNTHESIS_MARKUP_LANGUAGE = 'application/ssml+xml';

  /**
    * @brief Text Encoding and Interchange
    * @brief extension : .tei
    */
  const MIME_TEXT_ENCODING_AND_INTERCHANGE = 'application/tei+xml';

  /**
    * @brief Sharing Transaction Fraud Data
    * @brief extension : .tfi
    */
  const MIME_SHARING_TRANSACTION_FRAUD_DATA = 'application/thraud+xml';

  /**
    * @brief Time Stamped Data Envelope
    * @brief extension : .tsd
    */
  const MIME_TIME_STAMPED_DATA_ENVELOPE = 'application/timestamped-data';

  /**
    * @brief 3rd Generation Partnership Project - Pic Large
    * @brief extension : .plb
    */
  const MIME_3RD_GENERATION_PARTNERSHIP_PROJECT___PIC_LARGE = 'application/vnd.3gpp.pic-bw-large';

  /**
    * @brief 3rd Generation Partnership Project - Pic Small
    * @brief extension : .psb
    */
  const MIME_3RD_GENERATION_PARTNERSHIP_PROJECT___PIC_SMALL = 'application/vnd.3gpp.pic-bw-small';

  /**
    * @brief 3rd Generation Partnership Project - Pic Var
    * @brief extension : .pvb
    */
  const MIME_3RD_GENERATION_PARTNERSHIP_PROJECT___PIC_VAR = 'application/vnd.3gpp.pic-bw-var';

  /**
    * @brief 3rd Generation Partnership Project - Transaction Capabilities Application Part
    * @brief extension : .tcap
    */
  const MIME_3RD_GENERATION_PARTNERSHIP_PROJECT___TRANSACTION_CAPABILITIES_APPLICATION_PART = 'application/vnd.3gpp2.tcap';

  /**
    * @brief 3M Post It Notes
    * @brief extension : .pwn
    */
  const MIME_3M_POST_IT_NOTES = 'application/vnd.3m.post-it-notes';

  /**
    * @brief Simply Accounting
    * @brief extension : .aso
    */
  const MIME_SIMPLY_ACCOUNTING = 'application/vnd.accpac.simply.aso';

  /**
    * @brief Simply Accounting - Data Import
    * @brief extension : .imp
    */
  const MIME_SIMPLY_ACCOUNTING___DATA_IMPORT = 'application/vnd.accpac.simply.imp';

  /**
    * @brief ACU Cobol
    * @brief extension : .acu
    */
  const MIME_ACU_COBOL = 'application/vnd.acucobol';

  /**
    * @brief ACU Cobol
    * @brief extension : .atc
    */
  const MIME_ACU_COBOL_2 = 'application/vnd.acucorp';

  /**
    * @brief Adobe AIR Application
    * @brief extension : .air
    */
  const MIME_ADOBE_AIR_APPLICATION = 'application/vnd.adobe.air-application-installer-package+zip';

  /**
    * @brief Adobe Flex Project
    * @brief extension : .fxp
    */
  const MIME_ADOBE_FLEX_PROJECT = 'application/vnd.adobe.fxp';

  /**
    * @brief Adobe XML Data Package
    * @brief extension : .xdp
    */
  const MIME_ADOBE_XML_DATA_PACKAGE = 'application/vnd.adobe.xdp+xml';

  /**
    * @brief Adobe XML Forms Data Format
    * @brief extension : .xfdf
    */
  const MIME_ADOBE_XML_FORMS_DATA_FORMAT = 'application/vnd.adobe.xfdf';

  /**
    * @brief Ahead AIR Application
    * @brief extension : .ahead
    */
  const MIME_AHEAD_AIR_APPLICATION = 'application/vnd.ahead.space';

  /**
    * @brief AirZip FileSECURE
    * @brief extension : .azf
    */
  const MIME_AIRZIP_FILESECURE = 'application/vnd.airzip.filesecure.azf';

  /**
    * @brief AirZip FileSECURE
    * @brief extension : .azs
    */
  const MIME_AIRZIP_FILESECURE_2 = 'application/vnd.airzip.filesecure.azs';

  /**
    * @brief Amazon Kindle eBook format
    * @brief extension : .azw
    */
  const MIME_AMAZON_KINDLE_EBOOK_FORMAT = 'application/vnd.amazon.ebook';

  /**
    * @brief Active Content Compression
    * @brief extension : .acc
    */
  const MIME_ACTIVE_CONTENT_COMPRESSION = 'application/vnd.americandynamics.acc';

  /**
    * @brief AmigaDE
    * @brief extension : .ami
    */
  const MIME_AMIGADE = 'application/vnd.amiga.ami';

  /**
    * @brief Android Package Archive
    * @brief extension : .apk
    */
  const MIME_ANDROID_PACKAGE_ARCHIVE = 'application/vnd.android.package-archive';

  /**
    * @brief ANSER-WEB Terminal Client - Certificate Issue
    * @brief extension : .cii
    */
  const MIME_ANSER_WEB_TERMINAL_CLIENT___CERTIFICATE_ISSUE = 'application/vnd.anser-web-certificate-issue-initiation';

  /**
    * @brief ANSER-WEB Terminal Client - Web Funds Transfer
    * @brief extension : .fti
    */
  const MIME_ANSER_WEB_TERMINAL_CLIENT___WEB_FUNDS_TRANSFER = 'application/vnd.anser-web-funds-transfer-initiation';

  /**
    * @brief Antix Game Player
    * @brief extension : .atx
    */
  const MIME_ANTIX_GAME_PLAYER = 'application/vnd.antix.game-component';

  /**
    * @brief Apple Installer Package
    * @brief extension : .mpkg
    */
  const MIME_APPLE_INSTALLER_PACKAGE = 'application/vnd.apple.installer+xml';

  /**
    * @brief Multimedia Playlist Unicode
    * @brief extension : .m3u8
    */
  const MIME_MULTIMEDIA_PLAYLIST_UNICODE = 'application/vnd.apple.mpegurl';

  /**
    * @brief Arista Networks Software Image
    * @brief extension : .swi
    */
  const MIME_ARISTA_NETWORKS_SOFTWARE_IMAGE = 'application/vnd.aristanetworks.swi';

  /**
    * @brief Audiograph
    * @brief extension : .aep
    */
  const MIME_AUDIOGRAPH = 'application/vnd.audiograph';

  /**
    * @brief Blueice Research Multipass
    * @brief extension : .mpm
    */
  const MIME_BLUEICE_RESEARCH_MULTIPASS = 'application/vnd.blueice.multipass';

  /**
    * @brief BMI Drawing Data Interchange
    * @brief extension : .bmi
    */
  const MIME_BMI_DRAWING_DATA_INTERCHANGE = 'application/vnd.bmi';

  /**
    * @brief BusinessObjects
    * @brief extension : .rep
    */
  const MIME_BUSINESSOBJECTS = 'application/vnd.businessobjects';

  /**
    * @brief CambridgeSoft Chem Draw
    * @brief extension : .cdxml
    */
  const MIME_CAMBRIDGESOFT_CHEM_DRAW = 'application/vnd.chemdraw+xml';

  /**
    * @brief Karaoke on Chipnuts Chipsets
    * @brief extension : .mmd
    */
  const MIME_KARAOKE_ON_CHIPNUTS_CHIPSETS = 'application/vnd.chipnuts.karaoke-mmd';

  /**
    * @brief Interactive Geometry Software Cinderella
    * @brief extension : .cdy
    */
  const MIME_INTERACTIVE_GEOMETRY_SOFTWARE_CINDERELLA = 'application/vnd.cinderella';

  /**
    * @brief Claymore Data Files
    * @brief extension : .cla
    */
  const MIME_CLAYMORE_DATA_FILES = 'application/vnd.claymore';

  /**
    * @brief RetroPlatform Player
    * @brief extension : .rp9
    */
  const MIME_RETROPLATFORM_PLAYER = 'application/vnd.cloanto.rp9';

  /**
    * @brief Clonk Game
    * @brief extension : .c4g
    */
  const MIME_CLONK_GAME = 'application/vnd.clonk.c4group';

  /**
    * @brief ClueTrust CartoMobile - Config
    * @brief extension : .c11amc
    */
  const MIME_CLUETRUST_CARTOMOBILE___CONFIG = 'application/vnd.cluetrust.cartomobile-config';

  /**
    * @brief ClueTrust CartoMobile - Config Package
    * @brief extension : .c11amz
    */
  const MIME_CLUETRUST_CARTOMOBILE___CONFIG_PACKAGE = 'application/vnd.cluetrust.cartomobile-config-pkg';

  /**
    * @brief Sixth Floor Media - CommonSpace
    * @brief extension : .csp
    */
  const MIME_SIXTH_FLOOR_MEDIA___COMMONSPACE = 'application/vnd.commonspace';

  /**
    * @brief CIM Database
    * @brief extension : .cdbcmsg
    */
  const MIME_CIM_DATABASE = 'application/vnd.contact.cmsg';

  /**
    * @brief CosmoCaller
    * @brief extension : .cmc
    */
  const MIME_COSMOCALLER = 'application/vnd.cosmocaller';

  /**
    * @brief CrickSoftware - Clicker
    * @brief extension : .clkx
    */
  const MIME_CRICKSOFTWARE___CLICKER = 'application/vnd.crick.clicker';

  /**
    * @brief CrickSoftware - Clicker - Keyboard
    * @brief extension : .clkk
    */
  const MIME_CRICKSOFTWARE___CLICKER___KEYBOARD = 'application/vnd.crick.clicker.keyboard';

  /**
    * @brief CrickSoftware - Clicker - Palette
    * @brief extension : .clkp
    */
  const MIME_CRICKSOFTWARE___CLICKER___PALETTE = 'application/vnd.crick.clicker.palette';

  /**
    * @brief CrickSoftware - Clicker - Template
    * @brief extension : .clkt
    */
  const MIME_CRICKSOFTWARE___CLICKER___TEMPLATE = 'application/vnd.crick.clicker.template';

  /**
    * @brief CrickSoftware - Clicker - Wordbank
    * @brief extension : .clkw
    */
  const MIME_CRICKSOFTWARE___CLICKER___WORDBANK = 'application/vnd.crick.clicker.wordbank';

  /**
    * @brief Critical Tools - PERT Chart EXPERT
    * @brief extension : .wbs
    */
  const MIME_CRITICAL_TOOLS___PERT_CHART_EXPERT = 'application/vnd.criticaltools.wbs+xml';

  /**
    * @brief PosML
    * @brief extension : .pml
    */
  const MIME_POSML = 'application/vnd.ctc-posml';

  /**
    * @brief Adobe PostScript Printer Description File Format
    * @brief extension : .ppd
    */
  const MIME_ADOBE_POSTSCRIPT_PRINTER_DESCRIPTION_FILE_FORMAT = 'application/vnd.cups-ppd';

  /**
    * @brief CURL Applet
    * @brief extension : .car
    */
  const MIME_CURL_APPLET = 'application/vnd.curl.car';

  /**
    * @brief CURL Applet
    * @brief extension : .pcurl
    */
  const MIME_CURL_APPLET_2 = 'application/vnd.curl.pcurl';

  /**
    * @brief RemoteDocs R-Viewer
    * @brief extension : .rdz
    */
  const MIME_REMOTEDOCS_R_VIEWER = 'application/vnd.data-vision.rdz';

  /**
    * @brief FCS Express Layout Link
    * @brief extension : .fe_launch
    */
  const MIME_FCS_EXPRESS_LAYOUT_LINK = 'application/vnd.denovo.fcselayout-link';

  /**
    * @brief New Moon Liftoff/DNA
    * @brief extension : .dna
    */
  const MIME_NEW_MOON_LIFTOFFDNA = 'application/vnd.dna';

  /**
    * @brief Dolby Meridian Lossless Packing
    * @brief extension : .mlp
    */
  const MIME_DOLBY_MERIDIAN_LOSSLESS_PACKING = 'application/vnd.dolby.mlp';

  /**
    * @brief DPGraph
    * @brief extension : .dpg
    */
  const MIME_DPGRAPH = 'application/vnd.dpgraph';

  /**
    * @brief DreamFactory
    * @brief extension : .dfac
    */
  const MIME_DREAMFACTORY = 'application/vnd.dreamfactory';

  /**
    * @brief Digital Video Broadcasting
    * @brief extension : .ait
    */
  const MIME_DIGITAL_VIDEO_BROADCASTING = 'application/vnd.dvb.ait';

  /**
    * @brief Digital Video Broadcasting
    * @brief extension : .svc
    */
  const MIME_DIGITAL_VIDEO_BROADCASTING_2 = 'application/vnd.dvb.service';

  /**
    * @brief DynaGeo
    * @brief extension : .geo
    */
  const MIME_DYNAGEO = 'application/vnd.dynageo';

  /**
    * @brief EcoWin Chart
    * @brief extension : .mag
    */
  const MIME_ECOWIN_CHART = 'application/vnd.ecowin.chart';

  /**
    * @brief Enliven Viewer
    * @brief extension : .nml
    */
  const MIME_ENLIVEN_VIEWER = 'application/vnd.enliven';

  /**
    * @brief QUASS Stream Player
    * @brief extension : .esf
    */
  const MIME_QUASS_STREAM_PLAYER = 'application/vnd.epson.esf';

  /**
    * @brief QUASS Stream Player
    * @brief extension : .msf
    */
  const MIME_QUASS_STREAM_PLAYER_2 = 'application/vnd.epson.msf';

  /**
    * @brief QuickAnime Player
    * @brief extension : .qam
    */
  const MIME_QUICKANIME_PLAYER = 'application/vnd.epson.quickanime';

  /**
    * @brief SimpleAnimeLite Player
    * @brief extension : .slt
    */
  const MIME_SIMPLEANIMELITE_PLAYER = 'application/vnd.epson.salt';

  /**
    * @brief QUASS Stream Player
    * @brief extension : .ssf
    */
  const MIME_QUASS_STREAM_PLAYER_3 = 'application/vnd.epson.ssf';

  /**
    * @brief MICROSEC e-Szign¢
    * @brief extension : .es3
    */
  const MIME_MICROSEC_E_SZIGN = 'application/vnd.eszigno3+xml';

  /**
    * @brief EZPix Secure Photo Album
    * @brief extension : .ez2
    */
  const MIME_EZPIX_SECURE_PHOTO_ALBUM = 'application/vnd.ezpix-album';

  /**
    * @brief EZPix Secure Photo Album
    * @brief extension : .ez3
    */
  const MIME_EZPIX_SECURE_PHOTO_ALBUM_2 = 'application/vnd.ezpix-package';

  /**
    * @brief Forms Data Format
    * @brief extension : .fdf
    */
  const MIME_FORMS_DATA_FORMAT = 'application/vnd.fdf';

  /**
    * @brief Digital Siesmograph Networks - SEED Datafiles
    * @brief extension : .seed
    */
  const MIME_DIGITAL_SIESMOGRAPH_NETWORKS___SEED_DATAFILES = 'application/vnd.fdsn.seed';

  /**
    * @brief NpGraphIt
    * @brief extension : .gph
    */
  const MIME_NPGRAPHIT = 'application/vnd.flographit';

  /**
    * @brief FluxTime Clip
    * @brief extension : .ftc
    */
  const MIME_FLUXTIME_CLIP = 'application/vnd.fluxtime.clip';

  /**
    * @brief FrameMaker Normal Format
    * @brief extension : .fm
    */
  const MIME_FRAMEMAKER_NORMAL_FORMAT = 'application/vnd.framemaker';

  /**
    * @brief Frogans Player
    * @brief extension : .fnc
    */
  const MIME_FROGANS_PLAYER = 'application/vnd.frogans.fnc';

  /**
    * @brief Frogans Player
    * @brief extension : .ltf
    */
  const MIME_FROGANS_PLAYER_2 = 'application/vnd.frogans.ltf';

  /**
    * @brief Friendly Software Corporation
    * @brief extension : .fsc
    */
  const MIME_FRIENDLY_SOFTWARE_CORPORATION = 'application/vnd.fsc.weblaunch';

  /**
    * @brief Fujitsu Oasys
    * @brief extension : .oas
    */
  const MIME_FUJITSU_OASYS = 'application/vnd.fujitsu.oasys';

  /**
    * @brief Fujitsu Oasys
    * @brief extension : .oa2
    */
  const MIME_FUJITSU_OASYS_2 = 'application/vnd.fujitsu.oasys2';

  /**
    * @brief Fujitsu Oasys
    * @brief extension : .oa3
    */
  const MIME_FUJITSU_OASYS_3 = 'application/vnd.fujitsu.oasys3';

  /**
    * @brief Fujitsu Oasys
    * @brief extension : .fg5
    */
  const MIME_FUJITSU_OASYS_4 = 'application/vnd.fujitsu.oasysgp';

  /**
    * @brief Fujitsu Oasys
    * @brief extension : .bh2
    */
  const MIME_FUJITSU_OASYS_5 = 'application/vnd.fujitsu.oasysprs';

  /**
    * @brief Fujitsu - Xerox 2D CAD Data
    * @brief extension : .ddd
    */
  const MIME_FUJITSU___XEROX_2D_CAD_DATA = 'application/vnd.fujixerox.ddd';

  /**
    * @brief Fujitsu - Xerox DocuWorks
    * @brief extension : .xdw
    */
  const MIME_FUJITSU___XEROX_DOCUWORKS = 'application/vnd.fujixerox.docuworks';

  /**
    * @brief Fujitsu - Xerox DocuWorks Binder
    * @brief extension : .xbd
    */
  const MIME_FUJITSU___XEROX_DOCUWORKS_BINDER = 'application/vnd.fujixerox.docuworks.binder';

  /**
    * @brief FuzzySheet
    * @brief extension : .fzs
    */
  const MIME_FUZZYSHEET = 'application/vnd.fuzzysheet';

  /**
    * @brief Genomatix Tuxedo Framework
    * @brief extension : .txd
    */
  const MIME_GENOMATIX_TUXEDO_FRAMEWORK = 'application/vnd.genomatix.tuxedo';

  /**
    * @brief GeoGebra
    * @brief extension : .ggb
    */
  const MIME_GEOGEBRA = 'application/vnd.geogebra.file';

  /**
    * @brief GeoGebra
    * @brief extension : .ggt
    */
  const MIME_GEOGEBRA_2 = 'application/vnd.geogebra.tool';

  /**
    * @brief GeoMetry Explorer
    * @brief extension : .gex
    */
  const MIME_GEOMETRY_EXPLORER = 'application/vnd.geometry-explorer';

  /**
    * @brief GEONExT and JSXGraph
    * @brief extension : .gxt
    */
  const MIME_GEONEXT_AND_JSXGRAPH = 'application/vnd.geonext';

  /**
    * @brief GeoplanW
    * @brief extension : .g2w
    */
  const MIME_GEOPLANW = 'application/vnd.geoplan';

  /**
    * @brief GeospacW
    * @brief extension : .g3w
    */
  const MIME_GEOSPACW = 'application/vnd.geospace';

  /**
    * @brief GameMaker ActiveX
    * @brief extension : .gmx
    */
  const MIME_GAMEMAKER_ACTIVEX = 'application/vnd.gmx';

  /**
    * @brief Google Earth - KML
    * @brief extension : .kml
    */
  const MIME_GOOGLE_EARTH___KML = 'application/vnd.google-earth.kml+xml';

  /**
    * @brief Google Earth - Zipped KML
    * @brief extension : .kmz
    */
  const MIME_GOOGLE_EARTH___ZIPPED_KML = 'application/vnd.google-earth.kmz';

  /**
    * @brief GrafEq
    * @brief extension : .gqf
    */
  const MIME_GRAFEQ = 'application/vnd.grafeq';

  /**
    * @brief Groove - Account
    * @brief extension : .gac
    */
  const MIME_GROOVE___ACCOUNT = 'application/vnd.groove-account';

  /**
    * @brief Groove - Help
    * @brief extension : .ghf
    */
  const MIME_GROOVE___HELP = 'application/vnd.groove-help';

  /**
    * @brief Groove - Identity Message
    * @brief extension : .gim
    */
  const MIME_GROOVE___IDENTITY_MESSAGE = 'application/vnd.groove-identity-message';

  /**
    * @brief Groove - Injector
    * @brief extension : .grv
    */
  const MIME_GROOVE___INJECTOR = 'application/vnd.groove-injector';

  /**
    * @brief Groove - Tool Message
    * @brief extension : .gtm
    */
  const MIME_GROOVE___TOOL_MESSAGE = 'application/vnd.groove-tool-message';

  /**
    * @brief Groove - Tool Template
    * @brief extension : .tpl
    */
  const MIME_GROOVE___TOOL_TEMPLATE = 'application/vnd.groove-tool-template';

  /**
    * @brief Groove - Vcard
    * @brief extension : .vcg
    */
  const MIME_GROOVE___VCARD = 'application/vnd.groove-vcard';

  /**
    * @brief Hypertext Application Language
    * @brief extension : .hal
    */
  const MIME_HYPERTEXT_APPLICATION_LANGUAGE = 'application/vnd.hal+xml';

  /**
    * @brief ZVUE Media Manager
    * @brief extension : .zmm
    */
  const MIME_ZVUE_MEDIA_MANAGER = 'application/vnd.handheld-entertainment+xml';

  /**
    * @brief Homebanking Computer Interface (HBCI)
    * @brief extension : .hbci
    */
  const MIME_HOMEBANKING_COMPUTER_INTERFACE_HBCI = 'application/vnd.hbci';

  /**
    * @brief Archipelago Lesson Player
    * @brief extension : .les
    */
  const MIME_ARCHIPELAGO_LESSON_PLAYER = 'application/vnd.hhe.lesson-player';

  /**
    * @brief HP-GL/2 and HP RTL
    * @brief extension : .hpgl
    */
  const MIME_HP_GL2_AND_HP_RTL = 'application/vnd.hp-hpgl';

  /**
    * @brief Hewlett Packard Instant Delivery
    * @brief extension : .hpid
    */
  const MIME_HEWLETT_PACKARD_INSTANT_DELIVERY = 'application/vnd.hp-hpid';

  /**
    * @brief Hewlett-Packard's WebPrintSmart
    * @brief extension : .hps
    */
  const MIME_HEWLETT_PACKARDS_WEBPRINTSMART = 'application/vnd.hp-hps';

  /**
    * @brief HP Indigo Digital Press - Job Layout Languate
    * @brief extension : .jlt
    */
  const MIME_HP_INDIGO_DIGITAL_PRESS___JOB_LAYOUT_LANGUATE = 'application/vnd.hp-jlyt';

  /**
    * @brief HP Printer Command Language
    * @brief extension : .pcl
    */
  const MIME_HP_PRINTER_COMMAND_LANGUAGE = 'application/vnd.hp-pcl';

  /**
    * @brief PCL 6 Enhanced (Formely PCL XL)
    * @brief extension : .pclxl
    */
  const MIME_PCL_6_ENHANCED_FORMELY_PCL_XL = 'application/vnd.hp-pclxl';

  /**
    * @brief Hydrostatix Master Suite
    * @brief extension : .sfd-hdstx
    */
  const MIME_HYDROSTATIX_MASTER_SUITE = 'application/vnd.hydrostatix.sof-data';

  /**
    * @brief 3D Crossword Plugin
    * @brief extension : .x3d
    */
  const MIME_3D_CROSSWORD_PLUGIN = 'application/vnd.hzn-3d-crossword';

  /**
    * @brief MiniPay
    * @brief extension : .mpy
    */
  const MIME_MINIPAY = 'application/vnd.ibm.minipay';

  /**
    * @brief MO:DCA-P
    * @brief extension : .afp
    */
  const MIME_MODCA_P = 'application/vnd.ibm.modcap';

  /**
    * @brief IBM DB2 Rights Manager
    * @brief extension : .irm
    */
  const MIME_IBM_DB2_RIGHTS_MANAGER = 'application/vnd.ibm.rights-management';

  /**
    * @brief IBM Electronic Media Management System - Secure Container
    * @brief extension : .sc
    */
  const MIME_IBM_ELECTRONIC_MEDIA_MANAGEMENT_SYSTEM___SECURE_CONTAINER = 'application/vnd.ibm.secure-container';

  /**
    * @brief ICC profile
    * @brief extension : .icc
    */
  const MIME_ICC_PROFILE = 'application/vnd.iccprofile';

  /**
    * @brief igLoader
    * @brief extension : .igl
    */
  const MIME_IGLOADER = 'application/vnd.igloader';

  /**
    * @brief ImmerVision PURE Players
    * @brief extension : .ivp
    */
  const MIME_IMMERVISION_PURE_PLAYERS = 'application/vnd.immervision-ivp';

  /**
    * @brief ImmerVision PURE Players
    * @brief extension : .ivu
    */
  const MIME_IMMERVISION_PURE_PLAYERS_2 = 'application/vnd.immervision-ivu';

  /**
    * @brief IOCOM Visimeet
    * @brief extension : .igm
    */
  const MIME_IOCOM_VISIMEET = 'application/vnd.insors.igm';

  /**
    * @brief Intercon FormNet
    * @brief extension : .xpw
    */
  const MIME_INTERCON_FORMNET = 'application/vnd.intercon.formnet';

  /**
    * @brief Interactive Geometry Software
    * @brief extension : .i2g
    */
  const MIME_INTERACTIVE_GEOMETRY_SOFTWARE = 'application/vnd.intergeo';

  /**
    * @brief Open Financial Exchange
    * @brief extension : .qbo
    */
  const MIME_OPEN_FINANCIAL_EXCHANGE = 'application/vnd.intu.qbo';

  /**
    * @brief Quicken
    * @brief extension : .qfx
    */
  const MIME_QUICKEN = 'application/vnd.intu.qfx';

  /**
    * @brief IP Unplugged Roaming Client
    * @brief extension : .rcprofile
    */
  const MIME_IP_UNPLUGGED_ROAMING_CLIENT = 'application/vnd.ipunplugged.rcprofile';

  /**
    * @brief iRepository / Lucidoc Editor
    * @brief extension : .irp
    */
  const MIME_IREPOSITORY__LUCIDOC_EDITOR = 'application/vnd.irepository.package+xml';

  /**
    * @brief Express by Infoseek
    * @brief extension : .xpr
    */
  const MIME_EXPRESS_BY_INFOSEEK = 'application/vnd.is-xpr';

  /**
    * @brief International Society for Advancement of Cytometry
    * @brief extension : .fcs
    */
  const MIME_INTERNATIONAL_SOCIETY_FOR_ADVANCEMENT_OF_CYTOMETRY = 'application/vnd.isac.fcs';

  /**
    * @brief Lightspeed Audio Lab
    * @brief extension : .jam
    */
  const MIME_LIGHTSPEED_AUDIO_LAB = 'application/vnd.jam';

  /**
    * @brief Mobile Information Device Profile
    * @brief extension : .rms
    */
  const MIME_MOBILE_INFORMATION_DEVICE_PROFILE = 'application/vnd.jcp.javame.midlet-rms';

  /**
    * @brief RhymBox
    * @brief extension : .jisp
    */
  const MIME_RHYMBOX = 'application/vnd.jisp';

  /**
    * @brief Joda Archive
    * @brief extension : .joda
    */
  const MIME_JODA_ARCHIVE = 'application/vnd.joost.joda-archive';

  /**
    * @brief Kahootz
    * @brief extension : .ktz
    */
  const MIME_KAHOOTZ = 'application/vnd.kahootz';

  /**
    * @brief KDE KOffice Office Suite - Karbon
    * @brief extension : .karbon
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KARBON = 'application/vnd.kde.karbon';

  /**
    * @brief KDE KOffice Office Suite - KChart
    * @brief extension : .chrt
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KCHART = 'application/vnd.kde.kchart';

  /**
    * @brief KDE KOffice Office Suite - Kformula
    * @brief extension : .kfo
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KFORMULA = 'application/vnd.kde.kformula';

  /**
    * @brief KDE KOffice Office Suite - Kivio
    * @brief extension : .flw
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KIVIO = 'application/vnd.kde.kivio';

  /**
    * @brief KDE KOffice Office Suite - Kontour
    * @brief extension : .kon
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KONTOUR = 'application/vnd.kde.kontour';

  /**
    * @brief KDE KOffice Office Suite - Kpresenter
    * @brief extension : .kpr
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KPRESENTER = 'application/vnd.kde.kpresenter';

  /**
    * @brief KDE KOffice Office Suite - Kspread
    * @brief extension : .ksp
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KSPREAD = 'application/vnd.kde.kspread';

  /**
    * @brief KDE KOffice Office Suite - Kword
    * @brief extension : .kwd
    */
  const MIME_KDE_KOFFICE_OFFICE_SUITE___KWORD = 'application/vnd.kde.kword';

  /**
    * @brief Kenamea App
    * @brief extension : .htke
    */
  const MIME_KENAMEA_APP = 'application/vnd.kenameaapp';

  /**
    * @brief Kidspiration
    * @brief extension : .kia
    */
  const MIME_KIDSPIRATION = 'application/vnd.kidspiration';

  /**
    * @brief Kinar Applications
    * @brief extension : .kne
    */
  const MIME_KINAR_APPLICATIONS = 'application/vnd.kinar';

  /**
    * @brief SSEYO Koan Play File
    * @brief extension : .skp
    */
  const MIME_SSEYO_KOAN_PLAY_FILE = 'application/vnd.koan';

  /**
    * @brief Kodak Storyshare
    * @brief extension : .sse
    */
  const MIME_KODAK_STORYSHARE = 'application/vnd.kodak-descriptor';

  /**
    * @brief Laser App Enterprise
    * @brief extension : .lasxml
    */
  const MIME_LASER_APP_ENTERPRISE = 'application/vnd.las.las+xml';

  /**
    * @brief Life Balance - Desktop Edition
    * @brief extension : .lbd
    */
  const MIME_LIFE_BALANCE___DESKTOP_EDITION = 'application/vnd.llamagraphics.life-balance.desktop';

  /**
    * @brief Life Balance - Exchange Format
    * @brief extension : .lbe
    */
  const MIME_LIFE_BALANCE___EXCHANGE_FORMAT = 'application/vnd.llamagraphics.life-balance.exchange+xml';

  /**
    * @brief Lotus 1-2-3
    * @brief extension : .123
    */
  const MIME_LOTUS_1_2_3 = 'application/vnd.lotus-1-2-3';

  /**
    * @brief Lotus Approach
    * @brief extension : .apr
    */
  const MIME_LOTUS_APPROACH = 'application/vnd.lotus-approach';

  /**
    * @brief Lotus Freelance
    * @brief extension : .pre
    */
  const MIME_LOTUS_FREELANCE = 'application/vnd.lotus-freelance';

  /**
    * @brief Lotus Notes
    * @brief extension : .nsf
    */
  const MIME_LOTUS_NOTES = 'application/vnd.lotus-notes';

  /**
    * @brief Lotus Organizer
    * @brief extension : .org
    */
  const MIME_LOTUS_ORGANIZER = 'application/vnd.lotus-organizer';

  /**
    * @brief Lotus Screencam
    * @brief extension : .scm
    */
  const MIME_LOTUS_SCREENCAM = 'application/vnd.lotus-screencam';

  /**
    * @brief Lotus Wordpro
    * @brief extension : .lwp
    */
  const MIME_LOTUS_WORDPRO = 'application/vnd.lotus-wordpro';

  /**
    * @brief MacPorts Port System
    * @brief extension : .portpkg
    */
  const MIME_MACPORTS_PORT_SYSTEM = 'application/vnd.macports.portpkg';

  /**
    * @brief Micro CADAM Helix D&D
    * @brief extension : .mcd
    */
  const MIME_MICRO_CADAM_HELIX_DD = 'application/vnd.mcd';

  /**
    * @brief MedCalc
    * @brief extension : .mc1
    */
  const MIME_MEDCALC = 'application/vnd.medcalcdata';

  /**
    * @brief MediaRemote
    * @brief extension : .cdkey
    */
  const MIME_MEDIAREMOTE = 'application/vnd.mediastation.cdkey';

  /**
    * @brief Medical Waveform Encoding Format
    * @brief extension : .mwf
    */
  const MIME_MEDICAL_WAVEFORM_ENCODING_FORMAT = 'application/vnd.mfer';

  /**
    * @brief Melody Format for Mobile Platform
    * @brief extension : .mfm
    */
  const MIME_MELODY_FORMAT_FOR_MOBILE_PLATFORM = 'application/vnd.mfmp';

  /**
    * @brief Micrografx
    * @brief extension : .flo
    */
  const MIME_MICROGRAFX = 'application/vnd.micrografx.flo';

  /**
    * @brief Micrografx iGrafx Professional
    * @brief extension : .igx
    */
  const MIME_MICROGRAFX_IGRAFX_PROFESSIONAL = 'application/vnd.micrografx.igx';

  /**
    * @brief FrameMaker Interchange Format
    * @brief extension : .mif
    */
  const MIME_FRAMEMAKER_INTERCHANGE_FORMAT = 'application/vnd.mif';

  /**
    * @brief Mobius Management Systems - UniversalArchive
    * @brief extension : .daf
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___UNIVERSALARCHIVE = 'application/vnd.mobius.daf';

  /**
    * @brief Mobius Management Systems - Distribution Database
    * @brief extension : .dis
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___DISTRIBUTION_DATABASE = 'application/vnd.mobius.dis';

  /**
    * @brief Mobius Management Systems - Basket file
    * @brief extension : .mbk
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___BASKET_FILE = 'application/vnd.mobius.mbk';

  /**
    * @brief Mobius Management Systems - Query File
    * @brief extension : .mqy
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___QUERY_FILE = 'application/vnd.mobius.mqy';

  /**
    * @brief Mobius Management Systems - Script Language
    * @brief extension : .msl
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___SCRIPT_LANGUAGE = 'application/vnd.mobius.msl';

  /**
    * @brief Mobius Management Systems - Policy Definition Language File
    * @brief extension : .plc
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___POLICY_DEFINITION_LANGUAGE_FILE = 'application/vnd.mobius.plc';

  /**
    * @brief Mobius Management Systems - Topic Index File
    * @brief extension : .txf
    */
  const MIME_MOBIUS_MANAGEMENT_SYSTEMS___TOPIC_INDEX_FILE = 'application/vnd.mobius.txf';

  /**
    * @brief Mophun VM
    * @brief extension : .mpn
    */
  const MIME_MOPHUN_VM = 'application/vnd.mophun.application';

  /**
    * @brief Mophun Certificate
    * @brief extension : .mpc
    */
  const MIME_MOPHUN_CERTIFICATE = 'application/vnd.mophun.certificate';

  /**
    * @brief XUL - XML User Interface Language
    * @brief extension : .xul
    */
  const MIME_XUL___XML_USER_INTERFACE_LANGUAGE = 'application/vnd.mozilla.xul+xml';

  /**
    * @brief Microsoft Artgalry
    * @brief extension : .cil
    */
  const MIME_MICROSOFT_ARTGALRY = 'application/vnd.ms-artgalry';

  /**
    * @brief Microsoft Cabinet File
    * @brief extension : .cab
    */
  const MIME_MICROSOFT_CABINET_FILE = 'application/vnd.ms-cab-compressed';

  /**
    * @brief Microsoft Excel
    * @brief extension : .xls
    */
  const MIME_MICROSOFT_EXCEL = 'application/vnd.ms-excel';

  /**
    * @brief Microsoft Excel - Add-In File
    * @brief extension : .xlam
    */
  const MIME_MICROSOFT_EXCEL___ADD_IN_FILE = 'application/vnd.ms-excel.addin.macroenabled.12';

  /**
    * @brief Microsoft Excel - Binary Workbook
    * @brief extension : .xlsb
    */
  const MIME_MICROSOFT_EXCEL___BINARY_WORKBOOK = 'application/vnd.ms-excel.sheet.binary.macroenabled.12';

  /**
    * @brief Microsoft Excel - Macro-Enabled Workbook
    * @brief extension : .xlsm
    */
  const MIME_MICROSOFT_EXCEL___MACRO_ENABLED_WORKBOOK = 'application/vnd.ms-excel.sheet.macroenabled.12';

  /**
    * @brief Microsoft Excel - Macro-Enabled Template File
    * @brief extension : .xltm
    */
  const MIME_MICROSOFT_EXCEL___MACRO_ENABLED_TEMPLATE_FILE = 'application/vnd.ms-excel.template.macroenabled.12';

  /**
    * @brief Microsoft Embedded OpenType
    * @brief extension : .eot
    */
  const MIME_MICROSOFT_EMBEDDED_OPENTYPE = 'application/vnd.ms-fontobject';

  /**
    * @brief Microsoft Html Help File
    * @brief extension : .chm
    */
  const MIME_MICROSOFT_HTML_HELP_FILE = 'application/vnd.ms-htmlhelp';

  /**
    * @brief Microsoft Class Server
    * @brief extension : .ims
    */
  const MIME_MICROSOFT_CLASS_SERVER = 'application/vnd.ms-ims';

  /**
    * @brief Microsoft Learning Resource Module
    * @brief extension : .lrm
    */
  const MIME_MICROSOFT_LEARNING_RESOURCE_MODULE = 'application/vnd.ms-lrm';

  /**
    * @brief Microsoft Office System Release Theme
    * @brief extension : .thmx
    */
  const MIME_MICROSOFT_OFFICE_SYSTEM_RELEASE_THEME = 'application/vnd.ms-officetheme';

  /**
    * @brief Microsoft Trust UI Provider - Security Catalog
    * @brief extension : .cat
    */
  const MIME_MICROSOFT_TRUST_UI_PROVIDER___SECURITY_CATALOG = 'application/vnd.ms-pki.seccat';

  /**
    * @brief Microsoft Trust UI Provider - Certificate Trust Link
    * @brief extension : .stl
    */
  const MIME_MICROSOFT_TRUST_UI_PROVIDER___CERTIFICATE_TRUST_LINK = 'application/vnd.ms-pki.stl';

  /**
    * @brief Microsoft PowerPoint
    * @brief extension : .ppt
    */
  const MIME_MICROSOFT_POWERPOINT = 'application/vnd.ms-powerpoint';

  /**
    * @brief Microsoft PowerPoint - Add-in file
    * @brief extension : .ppam
    */
  const MIME_MICROSOFT_POWERPOINT___ADD_IN_FILE = 'application/vnd.ms-powerpoint.addin.macroenabled.12';

  /**
    * @brief Microsoft PowerPoint - Macro-Enabled Presentation File
    * @brief extension : .pptm
    */
  const MIME_MICROSOFT_POWERPOINT___MACRO_ENABLED_PRESENTATION_FILE = 'application/vnd.ms-powerpoint.presentation.macroenabled.12';

  /**
    * @brief Microsoft PowerPoint - Macro-Enabled Open XML Slide
    * @brief extension : .sldm
    */
  const MIME_MICROSOFT_POWERPOINT___MACRO_ENABLED_OPEN_XML_SLIDE = 'application/vnd.ms-powerpoint.slide.macroenabled.12';

  /**
    * @brief Microsoft PowerPoint - Macro-Enabled Slide Show File
    * @brief extension : .ppsm
    */
  const MIME_MICROSOFT_POWERPOINT___MACRO_ENABLED_SLIDE_SHOW_FILE = 'application/vnd.ms-powerpoint.slideshow.macroenabled.12';

  /**
    * @brief Micosoft PowerPoint - Macro-Enabled Template File
    * @brief extension : .potm
    */
  const MIME_MICOSOFT_POWERPOINT___MACRO_ENABLED_TEMPLATE_FILE = 'application/vnd.ms-powerpoint.template.macroenabled.12';

  /**
    * @brief Microsoft Project
    * @brief extension : .mpp
    */
  const MIME_MICROSOFT_PROJECT = 'application/vnd.ms-project';

  /**
    * @brief Micosoft Word - Macro-Enabled Document
    * @brief extension : .docm
    */
  const MIME_MICOSOFT_WORD___MACRO_ENABLED_DOCUMENT = 'application/vnd.ms-word.document.macroenabled.12';

  /**
    * @brief Micosoft Word - Macro-Enabled Template
    * @brief extension : .dotm
    */
  const MIME_MICOSOFT_WORD___MACRO_ENABLED_TEMPLATE = 'application/vnd.ms-word.template.macroenabled.12';

  /**
    * @brief Microsoft Works
    * @brief extension : .wps
    */
  const MIME_MICROSOFT_WORKS = 'application/vnd.ms-works';

  /**
    * @brief Microsoft Windows Media Player Playlist
    * @brief extension : .wpl
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_PLAYER_PLAYLIST = 'application/vnd.ms-wpl';

  /**
    * @brief Microsoft XML Paper Specification
    * @brief extension : .xps
    */
  const MIME_MICROSOFT_XML_PAPER_SPECIFICATION = 'application/vnd.ms-xpsdocument';

  /**
    * @brief 3GPP MSEQ File
    * @brief extension : .mseq
    */
  const MIME_3GPP_MSEQ_FILE = 'application/vnd.mseq';

  /**
    * @brief MUsical Score Interpreted Code Invented for the ASCII designation of Notation
    * @brief extension : .mus
    */
  const MIME_MUSICAL_SCORE_INTERPRETED_CODE_INVENTED__FOR_THE_ASCII_DESIGNATION_OF_NOTATION = 'application/vnd.musician';

  /**
    * @brief Muvee Automatic Video Editing
    * @brief extension : .msty
    */
  const MIME_MUVEE_AUTOMATIC_VIDEO_EDITING = 'application/vnd.muvee.style';

  /**
    * @brief neuroLanguage
    * @brief extension : .nlu
    */
  const MIME_NEUROLANGUAGE = 'application/vnd.neurolanguage.nlu';

  /**
    * @brief NobleNet Directory
    * @brief extension : .nnd
    */
  const MIME_NOBLENET_DIRECTORY = 'application/vnd.noblenet-directory';

  /**
    * @brief NobleNet Sealer
    * @brief extension : .nns
    */
  const MIME_NOBLENET_SEALER = 'application/vnd.noblenet-sealer';

  /**
    * @brief NobleNet Web
    * @brief extension : .nnw
    */
  const MIME_NOBLENET_WEB = 'application/vnd.noblenet-web';

  /**
    * @brief N-Gage Game Data
    * @brief extension : .ngdat
    */
  const MIME_N_GAGE_GAME_DATA = 'application/vnd.nokia.n-gage.data';

  /**
    * @brief N-Gage Game Installer
    * @brief extension : .n-gage
    */
  const MIME_N_GAGE_GAME_INSTALLER = 'application/vnd.nokia.n-gage.symbian.install';

  /**
    * @brief Nokia Radio Application - Preset
    * @brief extension : .rpst
    */
  const MIME_NOKIA_RADIO_APPLICATION___PRESET = 'application/vnd.nokia.radio-preset';

  /**
    * @brief Nokia Radio Application - Preset
    * @brief extension : .rpss
    */
  const MIME_NOKIA_RADIO_APPLICATION___PRESET_2 = 'application/vnd.nokia.radio-presets';

  /**
    * @brief Novadigm's RADIA and EDM products
    * @brief extension : .edm
    */
  const MIME_NOVADIGMS_RADIA_AND_EDM_PRODUCTS = 'application/vnd.novadigm.edm';

  /**
    * @brief Novadigm's RADIA and EDM products
    * @brief extension : .edx
    */
  const MIME_NOVADIGMS_RADIA_AND_EDM_PRODUCTS_2 = 'application/vnd.novadigm.edx';

  /**
    * @brief Novadigm's RADIA and EDM products
    * @brief extension : .ext
    */
  const MIME_NOVADIGMS_RADIA_AND_EDM_PRODUCTS_3 = 'application/vnd.novadigm.ext';

  /**
    * @brief OpenDocument Chart
    * @brief extension : .odc
    */
  const MIME_OPENDOCUMENT_CHART = 'application/vnd.oasis.opendocument.chart';

  /**
    * @brief OpenDocument Chart Template
    * @brief extension : .otc
    */
  const MIME_OPENDOCUMENT_CHART_TEMPLATE = 'application/vnd.oasis.opendocument.chart-template';

  /**
    * @brief OpenDocument Database
    * @brief extension : .odb
    */
  const MIME_OPENDOCUMENT_DATABASE = 'application/vnd.oasis.opendocument.database';

  /**
    * @brief OpenDocument Formula
    * @brief extension : .odf
    */
  const MIME_OPENDOCUMENT_FORMULA = 'application/vnd.oasis.opendocument.formula';

  /**
    * @brief OpenDocument Formula Template
    * @brief extension : .odft
    */
  const MIME_OPENDOCUMENT_FORMULA_TEMPLATE = 'application/vnd.oasis.opendocument.formula-template';

  /**
    * @brief OpenDocument Graphics
    * @brief extension : .odg
    */
  const MIME_OPENDOCUMENT_GRAPHICS = 'application/vnd.oasis.opendocument.graphics';

  /**
    * @brief OpenDocument Graphics Template
    * @brief extension : .otg
    */
  const MIME_OPENDOCUMENT_GRAPHICS_TEMPLATE = 'application/vnd.oasis.opendocument.graphics-template';

  /**
    * @brief OpenDocument Image
    * @brief extension : .odi
    */
  const MIME_OPENDOCUMENT_IMAGE = 'application/vnd.oasis.opendocument.image';

  /**
    * @brief OpenDocument Image Template
    * @brief extension : .oti
    */
  const MIME_OPENDOCUMENT_IMAGE_TEMPLATE = 'application/vnd.oasis.opendocument.image-template';

  /**
    * @brief OpenDocument Presentation
    * @brief extension : .odp
    */
  const MIME_OPENDOCUMENT_PRESENTATION = 'application/vnd.oasis.opendocument.presentation';

  /**
    * @brief OpenDocument Presentation Template
    * @brief extension : .otp
    */
  const MIME_OPENDOCUMENT_PRESENTATION_TEMPLATE = 'application/vnd.oasis.opendocument.presentation-template';

  /**
    * @brief OpenDocument Spreadsheet
    * @brief extension : .ods
    */
  const MIME_OPENDOCUMENT_SPREADSHEET = 'application/vnd.oasis.opendocument.spreadsheet';

  /**
    * @brief OpenDocument Spreadsheet Template
    * @brief extension : .ots
    */
  const MIME_OPENDOCUMENT_SPREADSHEET_TEMPLATE = 'application/vnd.oasis.opendocument.spreadsheet-template';

  /**
    * @brief OpenDocument Text
    * @brief extension : .odt
    */
  const MIME_OPENDOCUMENT_TEXT = 'application/vnd.oasis.opendocument.text';

  /**
    * @brief OpenDocument Text Master
    * @brief extension : .odm
    */
  const MIME_OPENDOCUMENT_TEXT_MASTER = 'application/vnd.oasis.opendocument.text-master';

  /**
    * @brief OpenDocument Text Template
    * @brief extension : .ott
    */
  const MIME_OPENDOCUMENT_TEXT_TEMPLATE = 'application/vnd.oasis.opendocument.text-template';

  /**
    * @brief Open Document Text Web
    * @brief extension : .oth
    */
  const MIME_OPEN_DOCUMENT_TEXT_WEB = 'application/vnd.oasis.opendocument.text-web';

  /**
    * @brief Sugar Linux Application Bundle
    * @brief extension : .xo
    */
  const MIME_SUGAR_LINUX_APPLICATION_BUNDLE = 'application/vnd.olpc-sugar';

  /**
    * @brief OMA Download Agents
    * @brief extension : .dd2
    */
  const MIME_OMA_DOWNLOAD_AGENTS = 'application/vnd.oma.dd2+xml';

  /**
    * @brief Open Office Extension
    * @brief extension : .oxt
    */
  const MIME_OPEN_OFFICE_EXTENSION = 'application/vnd.openofficeorg.extension';

  /**
    * @brief Microsoft Office - OOXML - Presentation
    * @brief extension : .pptx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___PRESENTATION = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';

  /**
    * @brief Microsoft Office - OOXML - Presentation (Slide)
    * @brief extension : .sldx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___PRESENTATION_SLIDE = 'application/vnd.openxmlformats-officedocument.presentationml.slide';

  /**
    * @brief Microsoft Office - OOXML - Presentation (Slideshow)
    * @brief extension : .ppsx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___PRESENTATION_SLIDESHOW = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';

  /**
    * @brief Microsoft Office - OOXML - Presentation Template
    * @brief extension : .potx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___PRESENTATION_TEMPLATE = 'application/vnd.openxmlformats-officedocument.presentationml.template';

  /**
    * @brief Microsoft Office - OOXML - Spreadsheet
    * @brief extension : .xlsx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___SPREADSHEET = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';

  /**
    * @brief Microsoft Office - OOXML - Spreadsheet Teplate
    * @brief extension : .xltx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___SPREADSHEET_TEPLATE = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template';

  /**
    * @brief Microsoft Office - OOXML - Word Document
    * @brief extension : .docx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___WORD_DOCUMENT = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';

  /**
    * @brief Microsoft Office - OOXML - Word Document Template
    * @brief extension : .dotx
    */
  const MIME_MICROSOFT_OFFICE___OOXML___WORD_DOCUMENT_TEMPLATE = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';

  /**
    * @brief MapGuide DBXML
    * @brief extension : .mgp
    */
  const MIME_MAPGUIDE_DBXML = 'application/vnd.osgeo.mapguide.package';

  /**
    * @brief OSGi Deployment Package
    * @brief extension : .dp
    */
  const MIME_OSGI_DEPLOYMENT_PACKAGE = 'application/vnd.osgi.dp';

  /**
    * @brief PalmOS Data
    * @brief extension : .pdb
    */
  const MIME_PALMOS_DATA = 'application/vnd.palm';

  /**
    * @brief PawaaFILE
    * @brief extension : .paw
    */
  const MIME_PAWAAFILE = 'application/vnd.pawaafile';

  /**
    * @brief Proprietary P&G Standard Reporting System
    * @brief extension : .str
    */
  const MIME_PROPRIETARY_PG_STANDARD_REPORTING_SYSTEM = 'application/vnd.pg.format';

  /**
    * @brief Proprietary P&G Standard Reporting System
    * @brief extension : .ei6
    */
  const MIME_PROPRIETARY_PG_STANDARD_REPORTING_SYSTEM_2 = 'application/vnd.pg.osasli';

  /**
    * @brief Pcsel eFIF File
    * @brief extension : .efif
    */
  const MIME_PCSEL_EFIF_FILE = 'application/vnd.picsel';

  /**
    * @brief Qualcomm's Plaza Mobile Internet
    * @brief extension : .wg
    */
  const MIME_QUALCOMMS_PLAZA_MOBILE_INTERNET = 'application/vnd.pmi.widget';

  /**
    * @brief PocketLearn Viewers
    * @brief extension : .plf
    */
  const MIME_POCKETLEARN_VIEWERS = 'application/vnd.pocketlearn';

  /**
    * @brief PowerBuilder
    * @brief extension : .pbd
    */
  const MIME_POWERBUILDER = 'application/vnd.powerbuilder6';

  /**
    * @brief Preview Systems ZipLock/VBox
    * @brief extension : .box
    */
  const MIME_PREVIEW_SYSTEMS_ZIPLOCKVBOX = 'application/vnd.previewsystems.box';

  /**
    * @brief EFI Proteus
    * @brief extension : .mgz
    */
  const MIME_EFI_PROTEUS = 'application/vnd.proteus.magazine';

  /**
    * @brief PubliShare Objects
    * @brief extension : .qps
    */
  const MIME_PUBLISHARE_OBJECTS = 'application/vnd.publishare-delta-tree';

  /**
    * @brief Princeton Video Image
    * @brief extension : .ptid
    */
  const MIME_PRINCETON_VIDEO_IMAGE = 'application/vnd.pvi.ptid1';

  /**
    * @brief QuarkXpress
    * @brief extension : .qxd
    */
  const MIME_QUARKXPRESS = 'application/vnd.quark.quarkxpress';

  /**
    * @brief RealVNC
    * @brief extension : .bed
    */
  const MIME_REALVNC = 'application/vnd.realvnc.bed';

  /**
    * @brief Recordare Applications
    * @brief extension : .mxl
    */
  const MIME_RECORDARE_APPLICATIONS = 'application/vnd.recordare.musicxml';

  /**
    * @brief Recordare Applications
    * @brief extension : .musicxml
    */
  const MIME_RECORDARE_APPLICATIONS_2 = 'application/vnd.recordare.musicxml+xml';

  /**
    * @brief CryptoNote
    * @brief extension : .cryptonote
    */
  const MIME_CRYPTONOTE = 'application/vnd.rig.cryptonote';

  /**
    * @brief Blackberry COD File
    * @brief extension : .cod
    */
  const MIME_BLACKBERRY_COD_FILE = 'application/vnd.rim.cod';

  /**
    * @brief RealMedia
    * @brief extension : .rm
    */
  const MIME_REALMEDIA = 'application/vnd.rn-realmedia';

  /**
    * @brief ROUTE 66 Location Based Services
    * @brief extension : .link66
    */
  const MIME_ROUTE_66_LOCATION_BASED_SERVICES = 'application/vnd.route66.link66+xml';

  /**
    * @brief SailingTracker
    * @brief extension : .st
    */
  const MIME_SAILINGTRACKER = 'application/vnd.sailingtracker.track';

  /**
    * @brief SeeMail
    * @brief extension : .see
    */
  const MIME_SEEMAIL = 'application/vnd.seemail';

  /**
    * @brief Secured eMail
    * @brief extension : .sema
    */
  const MIME_SECURED_EMAIL = 'application/vnd.sema';

  /**
    * @brief Secured eMail
    * @brief extension : .semd
    */
  const MIME_SECURED_EMAIL_2 = 'application/vnd.semd';

  /**
    * @brief Secured eMail
    * @brief extension : .semf
    */
  const MIME_SECURED_EMAIL_3 = 'application/vnd.semf';

  /**
    * @brief Shana Informed Filler
    * @brief extension : .ifm
    */
  const MIME_SHANA_INFORMED_FILLER = 'application/vnd.shana.informed.formdata';

  /**
    * @brief Shana Informed Filler
    * @brief extension : .itp
    */
  const MIME_SHANA_INFORMED_FILLER_2 = 'application/vnd.shana.informed.formtemplate';

  /**
    * @brief Shana Informed Filler
    * @brief extension : .iif
    */
  const MIME_SHANA_INFORMED_FILLER_3 = 'application/vnd.shana.informed.interchange';

  /**
    * @brief Shana Informed Filler
    * @brief extension : .ipk
    */
  const MIME_SHANA_INFORMED_FILLER_4 = 'application/vnd.shana.informed.package';

  /**
    * @brief SimTech MindMapper
    * @brief extension : .twd
    */
  const MIME_SIMTECH_MINDMAPPER = 'application/vnd.simtech-mindmapper';

  /**
    * @brief SMAF File
    * @brief extension : .mmf
    */
  const MIME_SMAF_FILE = 'application/vnd.smaf';

  /**
    * @brief SMART Technologies Apps
    * @brief extension : .teacher
    */
  const MIME_SMART_TECHNOLOGIES_APPS = 'application/vnd.smart.teacher';

  /**
    * @brief SudokuMagic
    * @brief extension : .sdkm
    */
  const MIME_SUDOKUMAGIC = 'application/vnd.solent.sdkm+xml';

  /**
    * @brief TIBCO Spotfire
    * @brief extension : .dxp
    */
  const MIME_TIBCO_SPOTFIRE = 'application/vnd.spotfire.dxp';

  /**
    * @brief TIBCO Spotfire
    * @brief extension : .sfs
    */
  const MIME_TIBCO_SPOTFIRE_2 = 'application/vnd.spotfire.sfs';

  /**
    * @brief StarOffice - Calc
    * @brief extension : .sdc
    */
  const MIME_STAROFFICE___CALC = 'application/vnd.stardivision.calc';

  /**
    * @brief StarOffice - Draw
    * @brief extension : .sda
    */
  const MIME_STAROFFICE___DRAW = 'application/vnd.stardivision.draw';

  /**
    * @brief StarOffice - Impress
    * @brief extension : .sdd
    */
  const MIME_STAROFFICE___IMPRESS = 'application/vnd.stardivision.impress';

  /**
    * @brief StarOffice - Math
    * @brief extension : .smf
    */
  const MIME_STAROFFICE___MATH = 'application/vnd.stardivision.math';

  /**
    * @brief StarOffice - Writer
    * @brief extension : .sdw
    */
  const MIME_STAROFFICE___WRITER = 'application/vnd.stardivision.writer';

  /**
    * @brief StarOffice - Writer (Global)
    * @brief extension : .sgl
    */
  const MIME_STAROFFICE___WRITER__GLOBAL = 'application/vnd.stardivision.writer-global';

  /**
    * @brief StepMania
    * @brief extension : .sm
    */
  const MIME_STEPMANIA = 'application/vnd.stepmania.stepchart';

  /**
    * @brief OpenOffice - Calc (Spreadsheet)
    * @brief extension : .sxc
    */
  const MIME_OPENOFFICE___CALC_SPREADSHEET = 'application/vnd.sun.xml.calc';

  /**
    * @brief OpenOffice - Calc Template (Spreadsheet)
    * @brief extension : .stc
    */
  const MIME_OPENOFFICE___CALC_TEMPLATE_SPREADSHEET = 'application/vnd.sun.xml.calc.template';

  /**
    * @brief OpenOffice - Draw (Graphics)
    * @brief extension : .sxd
    */
  const MIME_OPENOFFICE___DRAW_GRAPHICS = 'application/vnd.sun.xml.draw';

  /**
    * @brief OpenOffice - Draw Template (Graphics)
    * @brief extension : .std
    */
  const MIME_OPENOFFICE___DRAW_TEMPLATE_GRAPHICS = 'application/vnd.sun.xml.draw.template';

  /**
    * @brief OpenOffice - Impress (Presentation)
    * @brief extension : .sxi
    */
  const MIME_OPENOFFICE___IMPRESS_PRESENTATION = 'application/vnd.sun.xml.impress';

  /**
    * @brief OpenOffice - Impress Template (Presentation)
    * @brief extension : .sti
    */
  const MIME_OPENOFFICE___IMPRESS_TEMPLATE_PRESENTATION = 'application/vnd.sun.xml.impress.template';

  /**
    * @brief OpenOffice - Math (Formula)
    * @brief extension : .sxm
    */
  const MIME_OPENOFFICE___MATH_FORMULA = 'application/vnd.sun.xml.math';

  /**
    * @brief OpenOffice - Writer (Text - HTML)
    * @brief extension : .sxw
    */
  const MIME_OPENOFFICE___WRITER_TEXT___HTML = 'application/vnd.sun.xml.writer';

  /**
    * @brief OpenOffice - Writer (Text - HTML)
    * @brief extension : .sxg
    */
  const MIME_OPENOFFICE___WRITER_TEXT___HTML_2 = 'application/vnd.sun.xml.writer.global';

  /**
    * @brief OpenOffice - Writer Template (Text - HTML)
    * @brief extension : .stw
    */
  const MIME_OPENOFFICE___WRITER_TEMPLATE_TEXT___HTML = 'application/vnd.sun.xml.writer.template';

  /**
    * @brief ScheduleUs
    * @brief extension : .sus
    */
  const MIME_SCHEDULEUS = 'application/vnd.sus-calendar';

  /**
    * @brief SourceView Document
    * @brief extension : .svd
    */
  const MIME_SOURCEVIEW_DOCUMENT = 'application/vnd.svd';

  /**
    * @brief Symbian Install Package
    * @brief extension : .sis
    */
  const MIME_SYMBIAN_INSTALL_PACKAGE = 'application/vnd.symbian.install';

  /**
    * @brief SyncML
    * @brief extension : .xsm
    */
  const MIME_SYNCML = 'application/vnd.syncml+xml';

  /**
    * @brief SyncML - Device Management
    * @brief extension : .bdm
    */
  const MIME_SYNCML___DEVICE_MANAGEMENT = 'application/vnd.syncml.dm+wbxml';

  /**
    * @brief SyncML - Device Management
    * @brief extension : .xdm
    */
  const MIME_SYNCML___DEVICE_MANAGEMENT_2 = 'application/vnd.syncml.dm+xml';

  /**
    * @brief Tao Intent
    * @brief extension : .tao
    */
  const MIME_TAO_INTENT = 'application/vnd.tao.intent-module-archive';

  /**
    * @brief MobileTV
    * @brief extension : .tmo
    */
  const MIME_MOBILETV = 'application/vnd.tmobile-livetv';

  /**
    * @brief TRI Systems Config
    * @brief extension : .tpt
    */
  const MIME_TRI_SYSTEMS_CONFIG = 'application/vnd.trid.tpt';

  /**
    * @brief Triscape Map Explorer
    * @brief extension : .mxs
    */
  const MIME_TRISCAPE_MAP_EXPLORER = 'application/vnd.triscape.mxs';

  /**
    * @brief True BASIC
    * @brief extension : .tra
    */
  const MIME_TRUE_BASIC = 'application/vnd.trueapp';

  /**
    * @brief Universal Forms Description Language
    * @brief extension : .ufd
    */
  const MIME_UNIVERSAL_FORMS_DESCRIPTION_LANGUAGE = 'application/vnd.ufdl';

  /**
    * @brief User Interface Quartz - Theme (Symbian)
    * @brief extension : .utz
    */
  const MIME_USER_INTERFACE_QUARTZ___THEME_SYMBIAN = 'application/vnd.uiq.theme';

  /**
    * @brief UMAJIN
    * @brief extension : .umj
    */
  const MIME_UMAJIN = 'application/vnd.umajin';

  /**
    * @brief Unity 3d
    * @brief extension : .unityweb
    */
  const MIME_UNITY_3D = 'application/vnd.unity';

  /**
    * @brief Unique Object Markup Language
    * @brief extension : .uoml
    */
  const MIME_UNIQUE_OBJECT_MARKUP_LANGUAGE = 'application/vnd.uoml+xml';

  /**
    * @brief VirtualCatalog
    * @brief extension : .vcx
    */
  const MIME_VIRTUALCATALOG = 'application/vnd.vcx';

  /**
    * @brief Microsoft Visio
    * @brief extension : .vsd
    */
  const MIME_MICROSOFT_VISIO = 'application/vnd.visio';

  /**
    * @brief Visionary
    * @brief extension : .vis
    */
  const MIME_VISIONARY = 'application/vnd.visionary';

  /**
    * @brief Viewport+
    * @brief extension : .vsf
    */
  const MIME_VIEWPORT = 'application/vnd.vsf';

  /**
    * @brief WAP Binary XML (WBXML)
    * @brief extension : .wbxml
    */
  const MIME_WAP_BINARY_XML_WBXML = 'application/vnd.wap.wbxml';

  /**
    * @brief Compiled Wireless Markup Language (WMLC)
    * @brief extension : .wmlc
    */
  const MIME_COMPILED_WIRELESS_MARKUP_LANGUAGE_WMLC = 'application/vnd.wap.wmlc';

  /**
    * @brief WMLScript
    * @brief extension : .wmlsc
    */
  const MIME_WMLSCRIPT = 'application/vnd.wap.wmlscriptc';

  /**
    * @brief WebTurbo
    * @brief extension : .wtb
    */
  const MIME_WEBTURBO = 'application/vnd.webturbo';

  /**
    * @brief Mathematica Notebook Player
    * @brief extension : .nbp
    */
  const MIME_MATHEMATICA_NOTEBOOK_PLAYER = 'application/vnd.wolfram.player';

  /**
    * @brief Wordperfect
    * @brief extension : .wpd
    */
  const MIME_WORDPERFECT = 'application/vnd.wordperfect';

  /**
    * @brief SundaHus WQ
    * @brief extension : .wqd
    */
  const MIME_SUNDAHUS_WQ = 'application/vnd.wqd';

  /**
    * @brief Worldtalk
    * @brief extension : .stf
    */
  const MIME_WORLDTALK = 'application/vnd.wt.stf';

  /**
    * @brief CorelXARA
    * @brief extension : .xar
    */
  const MIME_CORELXARA = 'application/vnd.xara';

  /**
    * @brief Extensible Forms Description Language
    * @brief extension : .xfdl
    */
  const MIME_EXTENSIBLE_FORMS_DESCRIPTION_LANGUAGE = 'application/vnd.xfdl';

  /**
    * @brief HV Voice Dictionary
    * @brief extension : .hvd
    */
  const MIME_HV_VOICE_DICTIONARY = 'application/vnd.yamaha.hv-dic';

  /**
    * @brief HV Script
    * @brief extension : .hvs
    */
  const MIME_HV_SCRIPT = 'application/vnd.yamaha.hv-script';

  /**
    * @brief HV Voice Parameter
    * @brief extension : .hvp
    */
  const MIME_HV_VOICE_PARAMETER = 'application/vnd.yamaha.hv-voice';

  /**
    * @brief Open Score Format
    * @brief extension : .osf
    */
  const MIME_OPEN_SCORE_FORMAT = 'application/vnd.yamaha.openscoreformat';

  /**
    * @brief OSFPVG
    * @brief extension : .osfpvg
    */
  const MIME_OSFPVG = 'application/vnd.yamaha.openscoreformat.osfpvg+xml';

  /**
    * @brief SMAF Audio
    * @brief extension : .saf
    */
  const MIME_SMAF_AUDIO = 'application/vnd.yamaha.smaf-audio';

  /**
    * @brief SMAF Phrase
    * @brief extension : .spf
    */
  const MIME_SMAF_PHRASE = 'application/vnd.yamaha.smaf-phrase';

  /**
    * @brief CustomMenu
    * @brief extension : .cmp
    */
  const MIME_CUSTOMMENU = 'application/vnd.yellowriver-custom-menu';

  /**
    * @brief Z.U.L. Geometry
    * @brief extension : .zir
    */
  const MIME_Z_U_L__GEOMETRY = 'application/vnd.zul';

  /**
    * @brief Zzazz Deck
    * @brief extension : .zaz
    */
  const MIME_ZZAZZ_DECK = 'application/vnd.zzazz.deck+xml';

  /**
    * @brief VoiceXML
    * @brief extension : .vxml
    */
  const MIME_VOICEXML = 'application/voicexml+xml';

  /**
    * @brief Widget Packaging and XML Configuration
    * @brief extension : .wgt
    */
  const MIME_WIDGET_PACKAGING_AND_XML_CONFIGURATION = 'application/widget';

  /**
    * @brief WinHelp
    * @brief extension : .hlp
    */
  const MIME_WINHELP = 'application/winhlp';

  /**
    * @brief WSDL - Web Services Description Language
    * @brief extension : .wsdl
    */
  const MIME_WSDL___WEB_SERVICES_DESCRIPTION_LANGUAGE = 'application/wsdl+xml';

  /**
    * @brief Web Services Policy
    * @brief extension : .wspolicy
    */
  const MIME_WEB_SERVICES_POLICY = 'application/wspolicy+xml';

  /**
    * @brief 7-Zip
    * @brief extension : .7z
    */
  const MIME_7_ZIP = 'application/x-7z-compressed';

  /**
    * @brief AbiWord
    * @brief extension : .abw
    */
  const MIME_ABIWORD = 'application/x-abiword';

  /**
    * @brief Ace Archive
    * @brief extension : .ace
    */
  const MIME_ACE_ARCHIVE = 'application/x-ace-compressed';

  /**
    * @brief Adobe (Macropedia) Authorware - Binary File
    * @brief extension : .aab
    */
  const MIME_ADOBE_MACROPEDIA_AUTHORWARE___BINARY_FILE = 'application/x-authorware-bin';

  /**
    * @brief Adobe (Macropedia) Authorware - Map
    * @brief extension : .aam
    */
  const MIME_ADOBE_MACROPEDIA_AUTHORWARE___MAP = 'application/x-authorware-map';

  /**
    * @brief Adobe (Macropedia) Authorware - Segment File
    * @brief extension : .aas
    */
  const MIME_ADOBE_MACROPEDIA_AUTHORWARE___SEGMENT_FILE = 'application/x-authorware-seg';

  /**
    * @brief Binary CPIO Archive
    * @brief extension : .bcpio
    */
  const MIME_BINARY_CPIO_ARCHIVE = 'application/x-bcpio';

  /**
    * @brief BitTorrent
    * @brief extension : .torrent
    */
  const MIME_BITTORRENT = 'application/x-bittorrent';

  /**
    * @brief Bzip Archive
    * @brief extension : .bz
    */
  const MIME_BZIP_ARCHIVE = 'application/x-bzip';

  /**
    * @brief Bzip2 Archive
    * @brief extension : .bz2
    */
  const MIME_BZIP2_ARCHIVE = 'application/x-bzip2';

  /**
    * @brief Video CD
    * @brief extension : .vcd
    */
  const MIME_VIDEO_CD = 'application/x-cdlink';

  /**
    * @brief pIRCh
    * @brief extension : .chat
    */
  const MIME_PIRCH = 'application/x-chat';

  /**
    * @brief Portable Game Notation (Chess Games)
    * @brief extension : .pgn
    */
  const MIME_PORTABLE_GAME_NOTATION_CHESS_GAMES = 'application/x-chess-pgn';

  /**
    * @brief CPIO Archive
    * @brief extension : .cpio
    */
  const MIME_CPIO_ARCHIVE = 'application/x-cpio';

  /**
    * @brief C Shell Script
    * @brief extension : .csh
    */
  const MIME_C_SHELL_SCRIPT = 'application/x-csh';

  /**
    * @brief Debian Package
    * @brief extension : .deb
    */
  const MIME_DEBIAN_PACKAGE = 'application/x-debian-package';

  /**
    * @brief Adobe Shockwave Player
    * @brief extension : .dir
    */
  const MIME_ADOBE_SHOCKWAVE_PLAYER = 'application/x-director';

  /**
    * @brief Doom Video Game
    * @brief extension : .wad
    */
  const MIME_DOOM_VIDEO_GAME = 'application/x-doom';

  /**
    * @brief Navigation Control file for XML (for ePub)
    * @brief extension : .ncx
    */
  const MIME_NAVIGATION_CONTROL_FILE_FOR_XML_FOR_EPUB = 'application/x-dtbncx+xml';

  /**
    * @brief Digital Talking Book
    * @brief extension : .dtb
    */
  const MIME_DIGITAL_TALKING_BOOK = 'application/x-dtbook+xml';

  /**
    * @brief Digital Talking Book - Resource File
    * @brief extension : .res
    */
  const MIME_DIGITAL_TALKING_BOOK___RESOURCE_FILE = 'application/x-dtbresource+xml';

  /**
    * @brief Device Independent File Format (DVI)
    * @brief extension : .dvi
    */
  const MIME_DEVICE_INDEPENDENT_FILE_FORMAT_DVI = 'application/x-dvi';

  /**
    * @brief Glyph Bitmap Distribution Format
    * @brief extension : .bdf
    */
  const MIME_GLYPH_BITMAP_DISTRIBUTION_FORMAT = 'application/x-font-bdf';

  /**
    * @brief Ghostscript Font
    * @brief extension : .gsf
    */
  const MIME_GHOSTSCRIPT_FONT = 'application/x-font-ghostscript';

  /**
    * @brief PSF Fonts
    * @brief extension : .psf
    */
  const MIME_PSF_FONTS = 'application/x-font-linux-psf';

  /**
    * @brief OpenType Font File
    * @brief extension : .otf
    */
  const MIME_OPENTYPE_FONT_FILE = 'application/x-font-otf';

  /**
    * @brief Portable Compiled Format
    * @brief extension : .pcf
    */
  const MIME_PORTABLE_COMPILED_FORMAT = 'application/x-font-pcf';

  /**
    * @brief Server Normal Format
    * @brief extension : .snf
    */
  const MIME_SERVER_NORMAL_FORMAT = 'application/x-font-snf';

  /**
    * @brief TrueType Font
    * @brief extension : .ttf
    */
  const MIME_TRUETYPE_FONT = 'application/x-font-ttf';

  /**
    * @brief PostScript Fonts
    * @brief extension : .pfa
    */
  const MIME_POSTSCRIPT_FONTS = 'application/x-font-type1';

  /**
    * @brief Web Open Font Format
    * @brief extension : .woff
    */
  const MIME_WEB_OPEN_FONT_FORMAT = 'application/x-font-woff';

  /**
    * @brief FutureSplash Animator
    * @brief extension : .spl
    */
  const MIME_FUTURESPLASH_ANIMATOR = 'application/x-futuresplash';

  /**
    * @brief Gnumeric
    * @brief extension : .gnumeric
    */
  const MIME_GNUMERIC = 'application/x-gnumeric';

  /**
    * @brief GNU Tar Files
    * @brief extension : .gtar
    */
  const MIME_GNU_TAR_FILES = 'application/x-gtar';

  /**
    * @brief Hierarchical Data Format
    * @brief extension : .hdf
    */
  const MIME_HIERARCHICAL_DATA_FORMAT = 'application/x-hdf';

  /**
    * @brief Java Network Launching Protocol
    * @brief extension : .jnlp
    */
  const MIME_JAVA_NETWORK_LAUNCHING_PROTOCOL = 'application/x-java-jnlp-file';

  /**
    * @brief LaTeX
    * @brief extension : .latex
    */
  const MIME_LATEX = 'application/x-latex';

  /**
    * @brief Mobipocket
    * @brief extension : .prc
    */
  const MIME_MOBIPOCKET = 'application/x-mobipocket-ebook';

  /**
    * @brief Microsoft ClickOnce
    * @brief extension : .application
    */
  const MIME_MICROSOFT_CLICKONCE = 'application/x-ms-application';

  /**
    * @brief Microsoft Windows Media Player Download Package
    * @brief extension : .wmd
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_PLAYER_DOWNLOAD_PACKAGE = 'application/x-ms-wmd';

  /**
    * @brief Microsoft Windows Media Player Skin Package
    * @brief extension : .wmz
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_PLAYER_SKIN_PACKAGE = 'application/x-ms-wmz';

  /**
    * @brief Microsoft XAML Browser Application
    * @brief extension : .xbap
    */
  const MIME_MICROSOFT_XAML_BROWSER_APPLICATION = 'application/x-ms-xbap';

  /**
    * @brief Microsoft Access
    * @brief extension : .mdb
    */
  const MIME_MICROSOFT_ACCESS = 'application/x-msaccess';

  /**
    * @brief Microsoft Office Binder
    * @brief extension : .obd
    */
  const MIME_MICROSOFT_OFFICE_BINDER = 'application/x-msbinder';

  /**
    * @brief Microsoft Information Card
    * @brief extension : .crd
    */
  const MIME_MICROSOFT_INFORMATION_CARD = 'application/x-mscardfile';

  /**
    * @brief Microsoft Clipboard Clip
    * @brief extension : .clp
    */
  const MIME_MICROSOFT_CLIPBOARD_CLIP = 'application/x-msclip';

  /**
    * @brief Microsoft Application
    * @brief extension : .exe
    */
  const MIME_MICROSOFT_APPLICATION = 'application/x-msdownload';

  /**
    * @brief Microsoft MediaView
    * @brief extension : .mvb
    */
  const MIME_MICROSOFT_MEDIAVIEW = 'application/x-msmediaview';

  /**
    * @brief Microsoft Windows Metafile
    * @brief extension : .wmf
    */
  const MIME_MICROSOFT_WINDOWS_METAFILE = 'application/x-msmetafile';

  /**
    * @brief Microsoft Money
    * @brief extension : .mny
    */
  const MIME_MICROSOFT_MONEY = 'application/x-msmoney';

  /**
    * @brief Microsoft Publisher
    * @brief extension : .pub
    */
  const MIME_MICROSOFT_PUBLISHER = 'application/x-mspublisher';

  /**
    * @brief Microsoft Schedule+
    * @brief extension : .scd
    */
  const MIME_MICROSOFT_SCHEDULE = 'application/x-msschedule';

  /**
    * @brief Microsoft Windows Terminal Services
    * @brief extension : .trm
    */
  const MIME_MICROSOFT_WINDOWS_TERMINAL_SERVICES = 'application/x-msterminal';

  /**
    * @brief Microsoft Wordpad
    * @brief extension : .wri
    */
  const MIME_MICROSOFT_WORDPAD = 'application/x-mswrite';

  /**
    * @brief Network Common Data Form (NetCDF)
    * @brief extension : .nc
    */
  const MIME_NETWORK_COMMON_DATA_FORM_NETCDF = 'application/x-netcdf';

  /**
    * @brief PKCS #12 - Personal Information Exchange Syntax Standard
    * @brief extension : .p12
    */
  const MIME_PKCS_12___PERSONAL_INFORMATION_EXCHANGE_SYNTAX_STANDARD = 'application/x-pkcs12';

  /**
    * @brief PKCS #7 - Cryptographic Message Syntax Standard (Certificates)
    * @brief extension : .p7b
    */
  const MIME_PKCS_7___CRYPTOGRAPHIC_MESSAGE_SYNTAX_STANDARD_CERTIFICATES = 'application/x-pkcs7-certificates';

  /**
    * @brief PKCS #7 - Cryptographic Message Syntax Standard (Certificate Request Response)
    * @brief extension : .p7r
    */
  const MIME_PKCS_7___CRYPTOGRAPHIC_MESSAGE_SYNTAX_STANDARD_CERTIFICATE_REQUEST_RESPONSE = 'application/x-pkcs7-certreqresp';

  /**
    * @brief RAR Archive
    * @brief extension : .rar
    */
  const MIME_RAR_ARCHIVE = 'application/x-rar-compressed';

  /**
    * @brief Bourne Shell Script
    * @brief extension : .sh
    */
  const MIME_BOURNE_SHELL_SCRIPT = 'application/x-sh';

  /**
    * @brief Shell Archive
    * @brief extension : .shar
    */
  const MIME_SHELL_ARCHIVE = 'application/x-shar';

  /**
    * @brief Adobe Flash
    * @brief extension : .swf
    */
  const MIME_ADOBE_FLASH = 'application/x-shockwave-flash';

  /**
    * @brief Microsoft Silverlight
    * @brief extension : .xap
    */
  const MIME_MICROSOFT_SILVERLIGHT = 'application/x-silverlight-app';

  /**
    * @brief Stuffit Archive
    * @brief extension : .sit
    */
  const MIME_STUFFIT_ARCHIVE = 'application/x-stuffit';

  /**
    * @brief Stuffit Archive
    * @brief extension : .sitx
    */
  const MIME_STUFFIT_ARCHIVE_2 = 'application/x-stuffitx';

  /**
    * @brief System V Release 4 CPIO Archive
    * @brief extension : .sv4cpio
    */
  const MIME_SYSTEM_V_RELEASE_4_CPIO_ARCHIVE = 'application/x-sv4cpio';

  /**
    * @brief System V Release 4 CPIO Checksum Data
    * @brief extension : .sv4crc
    */
  const MIME_SYSTEM_V_RELEASE_4_CPIO_CHECKSUM_DATA = 'application/x-sv4crc';

  /**
    * @brief Tar File (Tape Archive)
    * @brief extension : .tar
    */
  const MIME_TAR_FILE_TAPE_ARCHIVE = 'application/x-tar';

  /**
    * @brief Tcl Script
    * @brief extension : .tcl
    */
  const MIME_TCL_SCRIPT = 'application/x-tcl';

  /**
    * @brief TeX
    * @brief extension : .tex
    */
  const MIME_TEX = 'application/x-tex';

  /**
    * @brief TeX Font Metric
    * @brief extension : .tfm
    */
  const MIME_TEX_FONT_METRIC = 'application/x-tex-tfm';

  /**
    * @brief GNU Texinfo Document
    * @brief extension : .texinfo
    */
  const MIME_GNU_TEXINFO_DOCUMENT = 'application/x-texinfo';

  /**
    * @brief Ustar (Uniform Standard Tape Archive)
    * @brief extension : .ustar
    */
  const MIME_USTAR_UNIFORM_STANDARD_TAPE_ARCHIVE = 'application/x-ustar';

  /**
    * @brief WAIS Source
    * @brief extension : .src
    */
  const MIME_WAIS_SOURCE = 'application/x-wais-source';

  /**
    * @brief X.509 Certificate
    * @brief extension : .der
    */
  const MIME_X_509_CERTIFICATE = 'application/x-x509-ca-cert';

  /**
    * @brief Xfig
    * @brief extension : .fig
    */
  const MIME_XFIG = 'application/x-xfig';

  /**
    * @brief XPInstall - Mozilla
    * @brief extension : .xpi
    */
  const MIME_XPINSTALL___MOZILLA = 'application/x-xpinstall';

  /**
    * @brief XML Configuration Access Protocol - XCAP Diff
    * @brief extension : .xdf
    */
  const MIME_XML_CONFIGURATION_ACCESS_PROTOCOL___XCAP_DIFF = 'application/xcap-diff+xml';

  /**
    * @brief XML Encryption Syntax and Processing
    * @brief extension : .xenc
    */
  const MIME_XML_ENCRYPTION_SYNTAX_AND_PROCESSING = 'application/xenc+xml';

  /**
    * @brief XHTML - The Extensible HyperText Markup Language
    * @brief extension : .xhtml
    */
  const MIME_XHTML___THE_EXTENSIBLE_HYPERTEXT_MARKUP_LANGUAGE = 'application/xhtml+xml';

  /**
    * @brief XML - Extensible Markup Language
    * @brief extension : .xml
    */
  const MIME_XML___EXTENSIBLE_MARKUP_LANGUAGE = 'application/xml';

  /**
    * @brief Document Type Definition
    * @brief extension : .dtd
    */
  const MIME_DOCUMENT_TYPE_DEFINITION = 'application/xml-dtd';

  /**
    * @brief XML-Binary Optimized Packaging
    * @brief extension : .xop
    */
  const MIME_XML_BINARY_OPTIMIZED_PACKAGING = 'application/xop+xml';

  /**
    * @brief XML Transformations
    * @brief extension : .xslt
    */
  const MIME_XML_TRANSFORMATIONS = 'application/xslt+xml';

  /**
    * @brief XSPF - XML Shareable Playlist Format
    * @brief extension : .xspf
    */
  const MIME_XSPF___XML_SHAREABLE_PLAYLIST_FORMAT = 'application/xspf+xml';

  /**
    * @brief MXML
    * @brief extension : .mxml
    */
  const MIME_MXML = 'application/xv+xml';

  /**
    * @brief YANG Data Modeling Language
    * @brief extension : .yang
    */
  const MIME_YANG_DATA_MODELING_LANGUAGE = 'application/yang';

  /**
    * @brief YIN (YANG - XML)
    * @brief extension : .yin
    */
  const MIME_YIN_YANG___XML = 'application/yin+xml';

  /**
    * @brief Zip Archive
    * @brief extension : .zip
    */
  const MIME_ZIP_ARCHIVE = 'application/zip';

  /**
    * @brief Adaptive differential pulse-code modulation
    * @brief extension : .adp
    */
  const MIME_ADAPTIVE_DIFFERENTIAL_PULSE_CODE_MODULATION = 'audio/adpcm';

  /**
    * @brief Sun Audio - Au file format
    * @brief extension : .au
    */
  const MIME_SUN_AUDIO___AU_FILE_FORMAT = 'audio/basic';

  /**
    * @brief MIDI - Musical Instrument Digital Interface
    * @brief extension : .mid
    */
  const MIME_MIDI___MUSICAL_INSTRUMENT_DIGITAL_INTERFACE = 'audio/midi';

  /**
    * @brief MPEG-4 Audio
    * @brief extension : .mp4a
    */
  const MIME_MPEG_4_AUDIO = 'audio/mp4';

  /**
    * @brief MPEG Audio
    * @brief extension : .mpga
    */
  const MIME_MPEG_AUDIO = 'audio/mpeg';

  /**
    * @brief Ogg Audio
    * @brief extension : .oga
    */
  const MIME_OGG_AUDIO = 'audio/ogg';

  /**
    * @brief DECE Audio
    * @brief extension : .uva
    */
  const MIME_DECE_AUDIO = 'audio/vnd.dece.audio';

  /**
    * @brief Digital Winds Music
    * @brief extension : .eol
    */
  const MIME_DIGITAL_WINDS_MUSIC = 'audio/vnd.digital-winds';

  /**
    * @brief DRA Audio
    * @brief extension : .dra
    */
  const MIME_DRA_AUDIO = 'audio/vnd.dra';

  /**
    * @brief DTS Audio
    * @brief extension : .dts
    */
  const MIME_DTS_AUDIO = 'audio/vnd.dts';

  /**
    * @brief DTS High Definition Audio
    * @brief extension : .dtshd
    */
  const MIME_DTS_HIGH_DEFINITION_AUDIO = 'audio/vnd.dts.hd';

  /**
    * @brief Lucent Voice
    * @brief extension : .lvp
    */
  const MIME_LUCENT_VOICE = 'audio/vnd.lucent.voice';

  /**
    * @brief Microsoft PlayReady Ecosystem
    * @brief extension : .pya
    */
  const MIME_MICROSOFT_PLAYREADY_ECOSYSTEM = 'audio/vnd.ms-playready.media.pya';

  /**
    * @brief Nuera ECELP 4800
    * @brief extension : .ecelp4800
    */
  const MIME_NUERA_ECELP_4800 = 'audio/vnd.nuera.ecelp4800';

  /**
    * @brief Nuera ECELP 7470
    * @brief extension : .ecelp7470
    */
  const MIME_NUERA_ECELP_7470 = 'audio/vnd.nuera.ecelp7470';

  /**
    * @brief Nuera ECELP 9600
    * @brief extension : .ecelp9600
    */
  const MIME_NUERA_ECELP_9600 = 'audio/vnd.nuera.ecelp9600';

  /**
    * @brief Hit'n'Mix
    * @brief extension : .rip
    */
  const MIME_HITNMIX = 'audio/vnd.rip';

  /**
    * @brief Open Web Media Project - Audio
    * @brief extension : .weba
    */
  const MIME_OPEN_WEB_MEDIA_PROJECT___AUDIO = 'audio/webm';

  /**
    * @brief Advanced Audio Coding (AAC)
    * @brief extension : .aac
    */
  const MIME_ADVANCED_AUDIO_CODING_AAC = 'audio/x-aac';

  /**
    * @brief Audio Interchange File Format
    * @brief extension : .aif
    */
  const MIME_AUDIO_INTERCHANGE_FILE_FORMAT = 'audio/x-aiff';

  /**
    * @brief M3U (Multimedia Playlist)
    * @brief extension : .m3u
    */
  const MIME_M3U_MULTIMEDIA_PLAYLIST = 'audio/x-mpegurl';

  /**
    * @brief Microsoft Windows Media Audio Redirector
    * @brief extension : .wax
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_AUDIO_REDIRECTOR = 'audio/x-ms-wax';

  /**
    * @brief Microsoft Windows Media Audio
    * @brief extension : .wma
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_AUDIO = 'audio/x-ms-wma';

  /**
    * @brief Real Audio Sound
    * @brief extension : .ram
    */
  const MIME_REAL_AUDIO_SOUND = 'audio/x-pn-realaudio';

  /**
    * @brief Real Audio Sound
    * @brief extension : .rmp
    */
  const MIME_REAL_AUDIO_SOUND_2 = 'audio/x-pn-realaudio-plugin';

  /**
    * @brief Waveform Audio File Format (WAV)
    * @brief extension : .wav
    */
  const MIME_WAVEFORM_AUDIO_FILE_FORMAT_WAV = 'audio/x-wav';

  /**
    * @brief ChemDraw eXchange file
    * @brief extension : .cdx
    */
  const MIME_CHEMDRAW_EXCHANGE_FILE = 'chemical/x-cdx';

  /**
    * @brief Crystallographic Interchange Format
    * @brief extension : .cif
    */
  const MIME_CRYSTALLOGRAPHIC_INTERCHANGE_FORMAT = 'chemical/x-cif';

  /**
    * @brief CrystalMaker Data Format
    * @brief extension : .cmdf
    */
  const MIME_CRYSTALMAKER_DATA_FORMAT = 'chemical/x-cmdf';

  /**
    * @brief Chemical Markup Language
    * @brief extension : .cml
    */
  const MIME_CHEMICAL_MARKUP_LANGUAGE = 'chemical/x-cml';

  /**
    * @brief Chemical Style Markup Language
    * @brief extension : .csml
    */
  const MIME_CHEMICAL_STYLE_MARKUP_LANGUAGE = 'chemical/x-csml';

  /**
    * @brief XYZ File Format
    * @brief extension : .xyz
    */
  const MIME_XYZ_FILE_FORMAT = 'chemical/x-xyz';

  /**
    * @brief Bitmap Image File
    * @brief extension : .bmp
    */
  const MIME_BITMAP_IMAGE_FILE = 'image/bmp';

  /**
    * @brief Computer Graphics Metafile
    * @brief extension : .cgm
    */
  const MIME_COMPUTER_GRAPHICS_METAFILE = 'image/cgm';

  /**
    * @brief G3 Fax Image
    * @brief extension : .g3
    */
  const MIME_G3_FAX_IMAGE = 'image/g3fax';

  /**
    * @brief Graphics Interchange Format
    * @brief extension : .gif
    */
  const MIME_GRAPHICS_INTERCHANGE_FORMAT = 'image/gif';

  /**
    * @brief Image Exchange Format
    * @brief extension : .ief
    */
  const MIME_IMAGE_EXCHANGE_FORMAT = 'image/ief';

  /**
    * @brief JPEG Image
    * @brief extension : .jpeg, .jpg
    */
  const MIME_JPEG_IMAGE = 'image/jpeg';

  /**
    * @brief OpenGL Textures (KTX)
    * @brief extension : .ktx
    */
  const MIME_OPENGL_TEXTURES_KTX = 'image/ktx';

  /**
    * @brief Portable Network Graphics (PNG)
    * @brief extension : .png
    */
  const MIME_PORTABLE_NETWORK_GRAPHICS_PNG = 'image/png';

  /**
    * @brief BTIF
    * @brief extension : .btif
    */
  const MIME_BTIF = 'image/prs.btif';

  /**
    * @brief Scalable Vector Graphics (SVG)
    * @brief extension : .svg
    */
  const MIME_SCALABLE_VECTOR_GRAPHICS_SVG = 'image/svg+xml';

  /**
    * @brief Tagged Image File Format
    * @brief extension : .tiff
    */
  const MIME_TAGGED_IMAGE_FILE_FORMAT = 'image/tiff';

  /**
    * @brief Photoshop Document
    * @brief extension : .psd
    */
  const MIME_PHOTOSHOP_DOCUMENT = 'image/vnd.adobe.photoshop';

  /**
    * @brief DECE Graphic
    * @brief extension : .uvi
    */
  const MIME_DECE_GRAPHIC = 'image/vnd.dece.graphic';

  /**
    * @brief Close Captioning - Subtitle
    * @brief extension : .sub
    */
  const MIME_CLOSE_CAPTIONING___SUBTITLE = 'image/vnd.dvb.subtitle';

  /**
    * @brief DjVu
    * @brief extension : .djvu
    */
  const MIME_DJVU = 'image/vnd.djvu';

  /**
    * @brief DWG Drawing
    * @brief extension : .dwg
    */
  const MIME_DWG_DRAWING = 'image/vnd.dwg';

  /**
    * @brief AutoCAD DXF
    * @brief extension : .dxf
    */
  const MIME_AUTOCAD_DXF = 'image/vnd.dxf';

  /**
    * @brief FastBid Sheet
    * @brief extension : .fbs
    */
  const MIME_FASTBID_SHEET = 'image/vnd.fastbidsheet';

  /**
    * @brief FlashPix
    * @brief extension : .fpx
    */
  const MIME_FLASHPIX = 'image/vnd.fpx';

  /**
    * @brief FAST Search & Transfer ASA
    * @brief extension : .fst
    */
  const MIME_FAST_SEARCH_TRANSFER_ASA_2 = 'image/vnd.fst';

  /**
    * @brief EDMICS 2000
    * @brief extension : .mmr
    */
  const MIME_EDMICS_2000 = 'image/vnd.fujixerox.edmics-mmr';

  /**
    * @brief EDMICS 2000
    * @brief extension : .rlc
    */
  const MIME_EDMICS_2000_2 = 'image/vnd.fujixerox.edmics-rlc';

  /**
    * @brief Microsoft Document Imaging Format
    * @brief extension : .mdi
    */
  const MIME_MICROSOFT_DOCUMENT_IMAGING_FORMAT = 'image/vnd.ms-modi';

  /**
    * @brief FlashPix
    * @brief extension : .npx
    */
  const MIME_FLASHPIX_2 = 'image/vnd.net-fpx';

  /**
    * @brief WAP Bitamp (WBMP)
    * @brief extension : .wbmp
    */
  const MIME_WAP_BITAMP_WBMP = 'image/vnd.wap.wbmp';

  /**
    * @brief eXtended Image File Format (XIFF)
    * @brief extension : .xif
    */
  const MIME_EXTENDED_IMAGE_FILE_FORMAT_XIFF = 'image/vnd.xiff';

  /**
    * @brief WebP Image
    * @brief extension : .webp
    */
  const MIME_WEBP_IMAGE = 'image/webp';

  /**
    * @brief CMU Image
    * @brief extension : .ras
    */
  const MIME_CMU_IMAGE = 'image/x-cmu-raster';

  /**
    * @brief Corel Metafile Exchange (CMX)
    * @brief extension : .cmx
    */
  const MIME_COREL_METAFILE_EXCHANGE_CMX = 'image/x-cmx';

  /**
    * @brief FreeHand MX
    * @brief extension : .fh
    */
  const MIME_FREEHAND_MX = 'image/x-freehand';

  /**
    * @brief Icon Image
    * @brief extension : .ico
    */
  const MIME_ICON_IMAGE = 'image/x-icon';

  /**
    * @brief PCX Image
    * @brief extension : .pcx
    */
  const MIME_PCX_IMAGE = 'image/x-pcx';

  /**
    * @brief PICT Image
    * @brief extension : .pic
    */
  const MIME_PICT_IMAGE = 'image/x-pict';

  /**
    * @brief Portable Anymap Image
    * @brief extension : .pnm
    */
  const MIME_PORTABLE_ANYMAP_IMAGE = 'image/x-portable-anymap';

  /**
    * @brief Portable Bitmap Format
    * @brief extension : .pbm
    */
  const MIME_PORTABLE_BITMAP_FORMAT = 'image/x-portable-bitmap';

  /**
    * @brief Portable Graymap Format
    * @brief extension : .pgm
    */
  const MIME_PORTABLE_GRAYMAP_FORMAT = 'image/x-portable-graymap';

  /**
    * @brief Portable Pixmap Format
    * @brief extension : .ppm
    */
  const MIME_PORTABLE_PIXMAP_FORMAT = 'image/x-portable-pixmap';

  /**
    * @brief Silicon Graphics RGB Bitmap
    * @brief extension : .rgb
    */
  const MIME_SILICON_GRAPHICS_RGB_BITMAP = 'image/x-rgb';

  /**
    * @brief X BitMap
    * @brief extension : .xbm
    */
  const MIME_X_BITMAP = 'image/x-xbitmap';

  /**
    * @brief X PixMap
    * @brief extension : .xpm
    */
  const MIME_X_PIXMAP = 'image/x-xpixmap';

  /**
    * @brief X Window Dump
    * @brief extension : .xwd
    */
  const MIME_X_WINDOW_DUMP = 'image/x-xwindowdump';

  /**
    * @brief Email Message
    * @brief extension : .eml
    */
  const MIME_EMAIL_MESSAGE = 'message/rfc822';

  /**
    * @brief Initial Graphics Exchange Specification (IGES)
    * @brief extension : .igs
    */
  const MIME_INITIAL_GRAPHICS_EXCHANGE_SPECIFICATION_IGES = 'model/iges';

  /**
    * @brief Mesh Data Type
    * @brief extension : .msh
    */
  const MIME_MESH_DATA_TYPE = 'model/mesh';

  /**
    * @brief COLLADA
    * @brief extension : .dae
    */
  const MIME_COLLADA = 'model/vnd.collada+xml';

  /**
    * @brief Autodesk Design Web Format (DWF)
    * @brief extension : .dwf
    */
  const MIME_AUTODESK_DESIGN_WEB_FORMAT_DWF = 'model/vnd.dwf';

  /**
    * @brief Geometric Description Language (GDL)
    * @brief extension : .gdl
    */
  const MIME_GEOMETRIC_DESCRIPTION_LANGUAGE_GDL = 'model/vnd.gdl';

  /**
    * @brief Gen-Trix Studio
    * @brief extension : .gtw
    */
  const MIME_GEN_TRIX_STUDIO = 'model/vnd.gtw';

  /**
    * @brief Virtue MTS
    * @brief extension : .mts
    */
  const MIME_VIRTUE_MTS = 'model/vnd.mts';

  /**
    * @brief Virtue VTU
    * @brief extension : .vtu
    */
  const MIME_VIRTUE_VTU = 'model/vnd.vtu';

  /**
    * @brief Virtual Reality Modeling Language
    * @brief extension : .wrl
    */
  const MIME_VIRTUAL_REALITY_MODELING_LANGUAGE = 'model/vrml';

  /**
    * @brief iCalendar
    * @brief extension : .ics
    */
  const MIME_ICALENDAR = 'text/calendar';

  /**
    * @brief Cascading Style Sheets (CSS)
    * @brief extension : .css
    */
  const MIME_CASCADING_STYLE_SHEETS_CSS = 'text/css';

  /**
    * @brief Comma-Seperated Values
    * @brief extension : .csv
    */
  const MIME_COMMA_SEPERATED_VALUES = 'text/csv';

  /**
    * @brief HyperText Markup Language (HTML)
    * @brief extension : .html
    */
  const MIME_HYPERTEXT_MARKUP_LANGUAGE_HTML = 'text/html';

  /**
    * @brief Notation3
    * @brief extension : .n3
    */
  const MIME_NOTATION3 = 'text/n3';

  /**
    * @brief Text File
    * @brief extension : .txt
    */
  const MIME_TEXT_FILE = 'text/plain';

  /**
    * @brief PRS Lines Tag
    * @brief extension : .dsc
    */
  const MIME_PRS_LINES_TAG = 'text/prs.lines.tag';

  /**
    * @brief Rich Text Format (RTF)
    * @brief extension : .rtx
    */
  const MIME_RICH_TEXT_FORMAT_RTF = 'text/richtext';

  /**
    * @brief Standard Generalized Markup Language (SGML)
    * @brief extension : .sgml
    */
  const MIME_STANDARD_GENERALIZED_MARKUP_LANGUAGE_SGML = 'text/sgml';

  /**
    * @brief Tab Seperated Values
    * @brief extension : .tsv
    */
  const MIME_TAB_SEPERATED_VALUES = 'text/tab-separated-values';

  /**
    * @brief troff
    * @brief extension : .t
    */
  const MIME_TROFF = 'text/troff';

  /**
    * @brief Turtle (Terse RDF Triple Language)
    * @brief extension : .ttl
    */
  const MIME_TURTLE_TERSE_RDF_TRIPLE_LANGUAGE = 'text/turtle';

  /**
    * @brief URI Resolution Services
    * @brief extension : .uri
    */
  const MIME_URI_RESOLUTION_SERVICES = 'text/uri-list';

  /**
    * @brief Curl - Applet
    * @brief extension : .curl
    */
  const MIME_CURL___APPLET = 'text/vnd.curl';

  /**
    * @brief Curl - Detached Applet
    * @brief extension : .dcurl
    */
  const MIME_CURL___DETACHED_APPLET = 'text/vnd.curl.dcurl';

  /**
    * @brief Curl - Source Code
    * @brief extension : .scurl
    */
  const MIME_CURL___SOURCE_CODE = 'text/vnd.curl.scurl';

  /**
    * @brief Curl - Manifest File
    * @brief extension : .mcurl
    */
  const MIME_CURL___MANIFEST_FILE = 'text/vnd.curl.mcurl';

  /**
    * @brief mod_fly / fly.cgi
    * @brief extension : .fly
    */
  const MIME_MOD_FLY__FLY_CGI = 'text/vnd.fly';

  /**
    * @brief FLEXSTOR
    * @brief extension : .flx
    */
  const MIME_FLEXSTOR = 'text/vnd.fmi.flexstor';

  /**
    * @brief Graphviz
    * @brief extension : .gv
    */
  const MIME_GRAPHVIZ = 'text/vnd.graphviz';

  /**
    * @brief In3D - 3DML
    * @brief extension : .3dml
    */
  const MIME_IN3D___3DML = 'text/vnd.in3d.3dml';

  /**
    * @brief In3D - 3DML
    * @brief extension : .spot
    */
  const MIME_IN3D___3DML_2 = 'text/vnd.in3d.spot';

  /**
    * @brief J2ME App Descriptor
    * @brief extension : .jad
    */
  const MIME_J2ME_APP_DESCRIPTOR = 'text/vnd.sun.j2me.app-descriptor';

  /**
    * @brief Wireless Markup Language (WML)
    * @brief extension : .wml
    */
  const MIME_WIRELESS_MARKUP_LANGUAGE_WML = 'text/vnd.wap.wml';

  /**
    * @brief Wireless Markup Language Script (WMLScript)
    * @brief extension : .wmls
    */
  const MIME_WIRELESS_MARKUP_LANGUAGE_SCRIPT_WMLSCRIPT = 'text/vnd.wap.wmlscript';

  /**
    * @brief Assembler Source File
    * @brief extension : .s
    */
  const MIME_ASSEMBLER_SOURCE_FILE = 'text/x-asm';

  /**
    * @brief C Source File
    * @brief extension : .c
    */
  const MIME_C_SOURCE_FILE = 'text/x-c';

  /**
    * @brief Fortran Source File
    * @brief extension : .f
    */
  const MIME_FORTRAN_SOURCE_FILE = 'text/x-fortran';

  /**
    * @brief Pascal Source File
    * @brief extension : .p
    */
  const MIME_PASCAL_SOURCE_FILE = 'text/x-pascal';

  /**
    * @brief Java Source File
    * @brief extension : .java
    */
  const MIME_JAVA_SOURCE_FILE = 'text/x-java-source,java';

  /**
    * @brief Setext
    * @brief extension : .etx
    */
  const MIME_SETEXT = 'text/x-setext';

  /**
    * @brief UUEncode
    * @brief extension : .uu
    */
  const MIME_UUENCODE = 'text/x-uuencode';

  /**
    * @brief vCalendar
    * @brief extension : .vcs
    */
  const MIME_VCALENDAR = 'text/x-vcalendar';

  /**
    * @brief vCard
    * @brief extension : .vcf
    */
  const MIME_VCARD = 'text/x-vcard';

  /**
    * @brief 3GP
    * @brief extension : .3gp
    */
  const MIME_3GP = 'video/3gpp';

  /**
    * @brief 3GP2
    * @brief extension : .3g2
    */
  const MIME_3GP2 = 'video/3gpp2';

  /**
    * @brief H.261
    * @brief extension : .h261
    */
  const MIME_H_261 = 'video/h261';

  /**
    * @brief H.263
    * @brief extension : .h263
    */
  const MIME_H_263 = 'video/h263';

  /**
    * @brief H.264
    * @brief extension : .h264
    */
  const MIME_H_264 = 'video/h264';

  /**
    * @brief JPGVideo
    * @brief extension : .jpgv
    */
  const MIME_JPGVIDEO = 'video/jpeg';

  /**
    * @brief JPEG 2000 Compound Image File Format
    * @brief extension : .jpm
    */
  const MIME_JPEG_2000_COMPOUND_IMAGE_FILE_FORMAT = 'video/jpm';

  /**
    * @brief Motion JPEG 2000
    * @brief extension : .mj2
    */
  const MIME_MOTION_JPEG_2000 = 'video/mj2';

  /**
    * @brief MPEG-4 Video
    * @brief extension : .mp4
    */
  const MIME_MPEG_4_VIDEO = 'video/mp4';

  /**
    * @brief MPEG Video
    * @brief extension : .mpeg
    */
  const MIME_MPEG_VIDEO = 'video/mpeg';

  /**
    * @brief Ogg Video
    * @brief extension : .ogv
    */
  const MIME_OGG_VIDEO = 'video/ogg';

  /**
    * @brief Quicktime Video
    * @brief extension : .qt
    */
  const MIME_QUICKTIME_VIDEO = 'video/quicktime';

  /**
    * @brief DECE High Definition Video
    * @brief extension : .uvh
    */
  const MIME_DECE_HIGH_DEFINITION_VIDEO = 'video/vnd.dece.hd';

  /**
    * @brief DECE Mobile Video
    * @brief extension : .uvm
    */
  const MIME_DECE_MOBILE_VIDEO = 'video/vnd.dece.mobile';

  /**
    * @brief DECE PD Video
    * @brief extension : .uvp
    */
  const MIME_DECE_PD_VIDEO = 'video/vnd.dece.pd';

  /**
    * @brief DECE SD Video
    * @brief extension : .uvs
    */
  const MIME_DECE_SD_VIDEO = 'video/vnd.dece.sd';

  /**
    * @brief DECE Video
    * @brief extension : .uvv
    */
  const MIME_DECE_VIDEO = 'video/vnd.dece.video';

  /**
    * @brief FAST Search & Transfer ASA
    * @brief extension : .fvt
    */
  const MIME_FAST_SEARCH_TRANSFER_ASA = 'video/vnd.fvt';

  /**
    * @brief MPEG Url
    * @brief extension : .mxu
    */
  const MIME_MPEG_URL = 'video/vnd.mpegurl';

  /**
    * @brief Microsoft PlayReady Ecosystem Video
    * @brief extension : .pyv
    */
  const MIME_MICROSOFT_PLAYREADY_ECOSYSTEM_VIDEO = 'video/vnd.ms-playready.media.pyv';

  /**
    * @brief DECE MP4
    * @brief extension : .uvu
    */
  const MIME_DECE_MP4 = 'video/vnd.uvvu.mp4';

  /**
    * @brief Vivo
    * @brief extension : .viv
    */
  const MIME_VIVO = 'video/vnd.vivo';

  /**
    * @brief Open Web Media Project - Video
    * @brief extension : .webm
    */
  const MIME_OPEN_WEB_MEDIA_PROJECT___VIDEO = 'video/webm';

  /**
    * @brief Flash Video
    * @brief extension : .f4v
    */
  const MIME_FLASH_VIDEO = 'video/x-f4v';

  /**
    * @brief FLI/FLC Animation Format
    * @brief extension : .fli
    */
  const MIME_FLIFLC_ANIMATION_FORMAT = 'video/x-fli';

  /**
    * @brief Flash Video
    * @brief extension : .flv
    */
  const MIME_FLASH_VIDEO_2 = 'video/x-flv';

  /**
    * @brief M4v
    * @brief extension : .m4v
    */
  const MIME_M4V = 'video/x-m4v';

  /**
    * @brief Microsoft Advanced Systems Format (ASF)
    * @brief extension : .asf
    */
  const MIME_MICROSOFT_ADVANCED_SYSTEMS_FORMAT_ASF = 'video/x-ms-asf';

  /**
    * @brief Microsoft Windows Media
    * @brief extension : .wm
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA = 'video/x-ms-wm';

  /**
    * @brief Microsoft Windows Media Video
    * @brief extension : .wmv
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_VIDEO = 'video/x-ms-wmv';

  /**
    * @brief Microsoft Windows Media Audio/Video Playlist
    * @brief extension : .wmx
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_AUDIOVIDEO_PLAYLIST = 'video/x-ms-wmx';

  /**
    * @brief Microsoft Windows Media Video Playlist
    * @brief extension : .wvx
    */
  const MIME_MICROSOFT_WINDOWS_MEDIA_VIDEO_PLAYLIST = 'video/x-ms-wvx';

  /**
    * @brief Audio Video Interleave (AVI)
    * @brief extension : .avi
    */
  const MIME_AUDIO_VIDEO_INTERLEAVE_AVI = 'video/x-msvideo';

  /**
    * @brief SGI Movie
    * @brief extension : .movie
    */
  const MIME_SGI_MOVIE = 'video/x-sgi-movie';

  /**
    * @brief CoolTalk
    * @brief extension : .ice
    */
  const MIME_COOLTALK = 'x-conference/x-cooltalk';

  /**
    * @brief BAS Partitur Format
    * @brief extension : .par
    */
  const MIME_BAS_PARTITUR_FORMAT = 'text/plain-bas';

  /**
    * @brief YAML Ain't Markup Language / Yet Another Markup Language
    * @brief extension : .yaml
    */
  const MIME_YAML_AINT_MARKUP_LANGUAGE__YET_ANOTHER_MARKUP_LANGUAGE = 'text/yaml';


}
