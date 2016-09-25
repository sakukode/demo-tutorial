<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Recaptcha configuration settings
 * 
 * recaptcha_sitekey: Recaptcha site key to use in the widget
 * recaptcha_secretkey: Recaptcha secret key which is used for communicating between your server to Google's
 * lang: Language code, if blank "en" will be used
 * 
 * recaptcha_sitekey and recaptcha_secretkey can be obtained from https://www.google.com/recaptcha/admin/
 * Language code can be obtained from https://developers.google.com/recaptcha/docs/language
 * 
 * @author Damar Riyadi <damar@tahutek.net>
 */

$config['recaptcha_sitekey'] = (ENVIRONMENT === 'production') ? "6LcpogcUAAAAAEeSKhadLw4q9qLC7C60SIyR9ldf" : "6LcoogcUAAAAAIKnqxMP52bW_TcovF7vNgNxaZhb";
$config['recaptcha_secretkey'] = (ENVIRONMENT === 'production') ? "6LcpogcUAAAAAKSW9wAfrWQKZtvwPW0jfW0RZ-D_" : "6LcoogcUAAAAAIz9cYZtbgWVw2foAHINy7JhAOCs";
$config['lang'] = "";