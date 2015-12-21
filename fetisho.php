<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

$api = new Api('146785038:AAHwk3zAWaYh_LJbowIepSkv5EMngXMriN4');
$chat = $api->getUpdates()[0]->getMessage()->getChat();

// while(1) {
// 	$api->sendMessage(array('text' => 'oi', 'chat_id' => 149378523));
// 	sleep(5);
// }
