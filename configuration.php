<?php
defined('_EXEC') or die;

/**
 *
 * @author David Miguel Gómez Macías < davidgomezmacias@gmail.com >
 * @package Valkyrie.Libraries
 * @since 1.0.0
 * @version 1.0.0
 */
class Configuration
{
	/**
     * Dominio o IP.
	 *
	 * @static
	 *
     * @var string $domain
     */
	public static $domain = 'tuamigodeyucatan.com';

	/**
     * Nombre del sitio web.
	 *
	 * @static
	 *
     * @var string $web_page
     */
	public static $web_page = 'Tu amigo de Yucatán';

	/**
     * Idioma por default
	 * @example es, en, fr, ru..
	 *
	 * @static
	 *
     * @var string $lang_default
     */
	public static $lang_default = 'es';

	/**
     * Reporte de errores.
	 * @example default, none, simple, maximum, development
	 *
	 * @static
	 *
     * @var string $error_reporting
     */
	public static $error_reporting = 'development';

	/**
     * Modo para debuggear errores.
	 *
	 * @static
	 *
     * @var boolean $debug
     */
	public static $debug = false;

	/**
     * Modo para debuggear errores en el lenguaje.
	 *
	 * @static
	 *
     * @var boolean $debug_lang
     */
	public static $debug_lang = false;

	/**
     * Activar URLs amigables.
	 *
	 * @static
	 *
     * @var boolean $url_friendly
     */
	public static $url_friendly = true;

	/**
     * Comprimir el HTML
	 *
	 * @static
	 *
     * @var boolean $compress_html
     */
	public static $compress_html = false;

	/**
     * Zona horaria
	 *
	 * @static
	 *
     * @var string $time_zone
     */
	public static $time_zone = 'America/Cancun';

	/**
     * Clave secreta
	 *
	 * @static
	 *
     * @var string $secret
     */
	public static $secret = 'F-7^m;x+h]6Kab5@bOy6hk0Te';

	/**
     * Tiempo de vida para una session en bytes.
	 *
	 * @static
	 *
     * @var integer $cookie_lifetime
     */
	public static $cookie_lifetime	= 86400; // Duracion de un día

	/**
     * Estado de uso de la base de datos.
	 *
	 * @static
	 *
     * @var boolean $db_state
     */
	public static $db_state = false;

	/**
     * Tipo de base de datos.
	 * @example MySQL, MariaDB, MSSQL, PostgreSQL, Oracle, Sybase
	 *
	 * @static
	 *
     * @var string $db_type
     */
	public static $db_type = 'mysql';

	/**
     * Dominio o IP para el servidor de base de datos.
	 *
	 * @static
	 *
     * @var string $db_host
     */
	public static $db_host = '';

	/**
     * Nombre de la base de datos
	 *
	 * @static
	 *
     * @var string $db_name
     */
	public static $db_name = '';

	/**
     * Usuario de la base de datos
	 *
	 * @static
	 *
     * @var string $db_user
     */
	public static $db_user = '';

	/**
     * Contraseña de la base de datos.
	 *
	 * @static
	 *
     * @var string $db_pass
     */
	public static $db_pass = '';

	/**
     * Tipo de caracteres para la base de datos. Opcional.
	 *
	 * @static
	 *
     * @var string $db_charset
     */
	public static $db_charset = 'utf8';

	/**
     * Prefijo para las tablas de base de datos. Opcional.
	 *
	 * @static
	 *
     * @var string $db_prefix
     */
	public static $db_prefix = '';

	/**
     * Puerto de la base de datos.
	 *
	 * @static
	 *
     * @var integer $db_port
     */
	public static $db_port = 3306;

	/**
     * Archivo de base de datos, unicamente para SQL Lite.
	 * @example my/database/path/database.db
	 *
	 * @static
	 *
     * @var string $db_prefix
     */
	public static $db_file = '';

	/**
     * Opciones de conexion extras. Opcional.
	 * @link http://www.php.net/manual/en/pdo.setattribute.php [Aprender más]
	 *
	 * @static
	 *
     * @var array $db_option
     */
	public static $db_option = [];

	/**
     * Estado de autentificacion para el uso en envio de correos SMTP.
	 *
	 * @static
	 *
     * @var boolean $smtp_auth
     */
	public static $smtp_auth = false;

	/**
     * Dominio o IP del servidor SMTP.
	 *
	 * @static
	 *
     * @var string $smtp_host
     */
	public static $smtp_host = '';

	/**
     * Usuario de la cuenta smtp.
	 * @example nombre@dominio.com
	 *
	 * @static
	 *
     * @var string $smtp_user
     */
	public static $smtp_user = '';

	/**
     * Contraseña de la cuenta smtp.
	 *
	 * @static
	 *
     * @var string $smtp_pass
     */
	public static $smtp_pass = '';

	/**
     * Seguridad de la encriptacion para el envio de SMTP.
	 * @example tls, ssl
	 *
	 * @static
	 *
     * @var string $smtp_secure
     */
	public static $smtp_secure = 'ssl';

	/**
     * Puerto de conexion al servidor SMTP.
	 *
	 * @static
	 *
     * @var integer $smtp_port
     */
	public static $smtp_port = 465;

	/**
     * Correo electrónico de emailing.
	 *
	 * @static
	 *
     * @var integer $smtp_emailer
     */
	public static $smtp_emailer = 'noreply@tuamigodeyucatan.com';

	/**
     * Variables generales.
	 *
	 * @static
	 *
     * @var array $vars
     */
	public static $vars = [
		'contact' => [
			'email' => 'reservaciones@tuamigodeyucatan.com',
			'phone' => '+52 (998) 495 79 08'
		],
		'rrss' => [
			'facebook' => [
				'url' => 'https://facebook.com/tuamigodeyucatan',
				'user' => '@tuamigodeyucatan'
			],
			'instagram' => [
				'url' => 'https://instagram.com/tuamigodeyucatan',
				'user' => '@tuamigodeyucatan'
			]
		],
		'sat' => [
			'social_reason' => 'Gersón Aarón Gómez Macías',
			'rfc' => 'GOMG920801733',
			'regime' => 'Persona física con actividad empresarial y profesional'
		],
		'sectur' => [
			'rnt' => '04230050980',
			'control' => '',
			'procedure' => ''
		],
		'bank' => [
			'name' => 'Banco Azteca',
			'clave' => '127691013750798718'
		]
	];
}
