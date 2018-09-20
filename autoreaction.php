<?php

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'pangeranmimpi12@gmail.com'; // facebook username / email
$pass 		= 'k@735t1yana'; // facebook passwod
$r_male		= '3'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '100'; // maximum reacted status
$token 		= 'EAAAAAYsX7TsBABx6rPizEZBMJ32FUfmOqbUqd5TZCboklIJkgF4XUotv1rQp7JFLwzFlrhu2ms3k3J4pNae0weZAudJZCmAzaCaZBvVosZAZCsFLa4vfFAYkeZByBdOzNebZAiW77QzN5Newgqd3nOZBoXBi4Lf1F8y4SP8nbh9ZCNdhrwVheZAnz63HHGdMQMXVgRWxy4sbTwazohvJmlBBRsQl';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);