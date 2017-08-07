<?php
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 * This can be set to anything, but default usage is:
 *     development
 *     testing
 *     production
 * NOTE: If you change these, also change the error_reporting() code below
 */
define('ENVIRONMENT', 'development');
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/*
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = '../system';
/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = '../application';
/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$view_folder = '';
/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 * Un-comment the $assign_to_config array below to use this feature
 */
/*
 *  Resolve the system path for increased reliability
 */
	if (defined('STDIN')) {
		chdir(dirname(__FILE__));
	}
	if (($_temp = realpath($system_path)) !== FALSE) {
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else {
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}
	if ( ! is_dir($system_path)) {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}
/*
 *  Now that we know the path, set the main path constants
 */
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
	define('BASEPATH', $system_path);
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
	define('SYSDIR', basename(BASEPATH));
	if (is_dir($application_folder)) {
		if (($_temp = realpath($application_folder)) !== FALSE) {
			$application_folder = $_temp;
		}
		else {
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR)) {
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}
	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR)) {
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder)) {
		if (($_temp = realpath($view_folder)) !== FALSE) {
			$view_folder = $_temp;
		}
		else {
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR)) {
		$view_folder = APPPATH.strtr( trim($view_folder, '/\\'), '/\\', DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR);
	}
	else {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}
	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);
/*
 * LOAD THE BOOTSTRAP FILE
 */
require_once BASEPATH.'core/CodeIgniter.php';
echo <<<EOS
    <a class="btn btn-primary" href="javascript:ADDSYNC()">Switch ON
    browser-sync</a>
    <script>
    function ADDSYNC() {
      var src = document.createElement("script");
      src.src = "http://127.0.0.1:9001/js/socket.js";
      src.async = true;
      document.body.appendChild(src);
    }
    </script>
EOS;
set_error_handler(function(){
    print_r(func_get_args());
});


