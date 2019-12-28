<?PHP

/*
 *	W-AGORA 4.1
 *	-----------
 *	$Id: globals.inc,v 1.19 2002/11/27 19:32:31 mdruilhe Exp $
 *	Usage:			Global Variables and Constants
 *	Description:	This script is to define global variables and constants to use in all files
 *	Author:			Stefan Schreyjak <Stefan.Schreyjak@cyperon.de>
 */

if (defined("_GLOBALS")) return;
define('_GLOBALS', 1);

$ext		= 'php';
$main_page	= "index.$ext";

# default Locale configuration
# ----------------------------
$default_lang = "en";
$bn_charset = 'iso-8859-1';		// usually can be redefined in locales/lang_xx.inc

# handle configs that have REGISTER_GLOBALS turned off
# (we use $PHP_SELF as the test since it should always be there)
# --------------------------------------------------------------
if (!isset($PHP_SELF)) {
	include "include/register_globals.$ext";
}

# set $debug= 1 for debugging mode
# --------------------------------
$debug = 0;

# initialize w-agora directories
# ------------------------------
$bin_dir	= '.';
$inc_dir	= 'include';
$cfg_dir	= 'conf';
$tmpl_dir	= 'templates';
$user_dir	= 'user';
$icon_dir	= 'images/icons';
$img_dir	= 'images';
$lang_dir	= 'locales';

# Some layout configuration values
# --------------------------------
$bn_win_width = 750;		// post window width
$bn_win_height = 560;		// post window height
$bn_fontface = 'Arial, Verdana';	// font face (warning messages)
$bn_fontcolor = '#000000';		// font color (warning messages)
$bn_bgcolor = '#d0dae6';	// table background in warning messages
$bn_th_color = '#FFFFFF';	// Table header color, used in table_header()
$bn_td_color = '#d0dae6';	// Table Cell color, used in table_header()

$link_class = 'link';

# set the current time & formated date
# -------------------------------------
$now = time();					// system local time
$today = mktime (0, 0, 0, date ('m'), date ('d'), date ('Y') ); // Today's (00h00) date
$bn_tz_offset = isset($bn_tz_offset) ? $bn_tz_offset : 0;	// Default Time zone (overwritten in config file)
$bn_date_format = isset($bn_date_format) ? $bn_date_format : 'M-Y-d H:i';	// default date format (overwritten in config file)

# set modes for creating directories and files
# --------------------------------------------
define('_DIRMODE', 0777);
umask (0);

# Set general directives for PHP engine behaviour
# -----------------------------------------------
error_reporting (E_ERROR | E_WARNING | E_PARSE);
# error_reporting (E_ALL); // uncomment if you want all errors/warning to be output

# initialize some values
# ----------------------
$bn_action	= isSet($bn_action)? $bn_action : '';
$bn_action_mode = isset($bn_action_mode) ? $bn_action_mode : 'R';
$bn_dir_default = isset($bn_dir_default) ? $bn_dir_default : 'forums/agora';

$winbox		= (defined('PHP_OS') && eregi('win', PHP_OS));
$lynx		= isset($lynx) ? $lynx : 0;

# Define here the URL of the w-agora directory, eg. :
# $bn_base_url = "http://your.hostname.com/w-agora";
$bn_base_url = 'http://'.$HTTP_SERVER_VARS['SERVER_NAME'].dirname($PHP_SELF);
$WA_SELF = basename($PHP_SELF);

# email header terminator : using the standard "\n\r" doesn't seem to work with all MTA
define('MAIL_MIME_CRLF', "\r\n");

# Default values used in the admin panel
# --------------------------------------
$nb_users_list = 20;	// number of users displayed/ page in the admin panel

# Default values used in the form or template
# -------------------------------------------
$att_num_cells = 5;			// number of attachments per row
$default_html_tags = 0;		// default for the "preserve HTML" option
$default_mail_reply = 0;	// default for the "send reply by email" option

$oldfiles_gctime  = 3600;		// Purge "orphan" uploaded files older than 1 hour (3600 sec.).

# Loads localized constants
# -------------------------
if (isset($HTTP_GET_VARS['lang']) ) {
	$lang = strtolower($HTTP_GET_VARS['lang']);
} elseif (isset($HTTP_COOKIE_VARS['wa_lang'])) {
	$lang = $HTTP_COOKIE_VARS['wa_lang'];
} elseif (isset($HTTP_ACCEPT_LANGUAGE) ) {
	$lang = substr($HTTP_ACCEPT_LANGUAGE, 0, 2);
} elseif (isset($HTTP_COOKIE_VARS['lang'])) {
	$lang = strtolower($HTTP_COOKIE_VARS['lang']);
}

if (!empty($lang) && file_exists("$lang_dir/lang_$lang.inc") ) {
	if (!isset($HTTP_COOKIE_VARS['wa_lang']) || ($lang != $HTTP_COOKIE_VARS['wa_lang']) ) {
		@setcookie ('wa_lang', $lang, 0, '/');
	}
} else {
	$lang = $default_lang;
}

require ("$lang_dir/lang_$lang.inc");

# user privileges labels
#-----------------------

$user_privs = array (
	'root'  => '<font color=red>' . LABEL_ROOT . '</font>',
	'admin' => '<font color=red>' . LABEL_ADMINISTRATOR . '</font>',
	'moder' => '<font color=blue>'. LABEL_MODERATOR . '</font>',
	'user'  => LABEL_USER
);

?>
