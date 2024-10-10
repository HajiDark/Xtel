<?php

include 'client.php';
include 'Medoo.php';

use Medoo\Medoo;

$db = new Medoo([
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'db',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci'
	]);

$bot = new bot("7519432779:AAFgGPOsWZlKuhPBJcx1fE4OT-XVe7n8MFw");

$update = bot::getUpdate();

$from_id = $update->message->from->id;
$chat_id = $update->message->chat->id;
$tc = $update->message->chat->type;
$text = $update->message->text;
$tc = $update->message->chat->type;
