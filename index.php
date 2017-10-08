<!DOCTYPE html>
<html>
<head>
<title>Telegram chat</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="chat.js"></script>
<link rel="stylesheet" type="text/css" href="chat.css">
<meta charset="utf-8" />
</head>

<body>
 <div id="telegramSiteHelper_box">
		<input id="telegramSiteHelper_lastMId" type="hidden" value="">
		<audio preload="auto" id="telegramSiteHelper_chatSound"><source src="telegramSiteHelper_chat.mp3"></source></audio>
		<div id="telegramSiteHelper_chatWrapper"><div id="telegramSiteHelper_chatInner"><ul id="telegramSiteHelper_chatMessages"><li id="telegramSiteHelper_firstChatMsg">Если у вас есть вопрос, можете задать его здесь</li></ul></div></div>
    <input id="telegramSiteHelper_chatTextBox" placeholder="Введите сообщение и нажмите Enter"></input>
    </div>
	
</body>

</html>


<?php

// $botToken = "454307032:AAH3TUPazZqJ6iVid4CE1dZtI_hpvZYyKX4";
// $website = "https://api.telegram.org/bot".$botToken;
 

// class TelegramBot {

// 	private $url;
// 	private $action;
// 	private $data;

// 	function __construct($url) {
// 		// $this->db = new DataBase();
// 		$this->url = $url;
// 	}

// 	public function setAction($act) {
// 		return $this->action = $act;
// 	}
	
// 	public function getAction() {
// 		return $this->action;
// 	}

// 	public function getUrl() {
// 		return $this->url.''.$this->action;
// 	}

// 	public function setData($data) {
// 		return $this->data = $data;
// 	}

// 	public function getData() {
// 		return $this->data;
// 	}

// 	public function builQuery() {
// 		return http_build_query($this->getData());
// 	}

// 	public function sendRequest() {
// 		return json_decode(file_get_contents($this->getUrl() . "?" . $this->builQuery()));
// 	}

// 	public function getResponse(){
// 		return json_decode(file_get_contents($this->getUrl()));
// 	}

// }

// $botToken = '476037072:AAF89e4oNu-lENf8VIwm4GsA31ygWtskty0';
// $apiUrl = 'https://api.telegram.org/bot' . $botToken;

// $bot = new TelegramBot($apiUrl);

// $bot->setAction('/getMe');
// $botData = $bot->getResponse();
// $botID = $botData->result->id;



// //Get Bot info
// $bot->setAction('/getMe');
// $botData = $bot->getResponse();

// //Get bot update
// $bot->setAction('/getUpdates');
// $chatData = $data = $bot->getResponse();

// $chatID = $chatData->result[0]->message->from->id;

// $data = [
// 	'chat_id' => $chatID,
// 	'text' => '
// 	<b>Hello</b>, <strong>Cunami</strong>
// 	<a href="https://api.telegram.org/bot454307032:AAH3TUPazZqJ6iVid4CE1dZtI_hpvZYyKX4/sendmessage?chat_id=390225506&text=NICE%20:)">inline URL</a>
// 	<i>italic</i>, <em>italic</em>
// ',
// 	'parse_mode' => 'html'
// ];
// $bot->setData($data);
// $bot->setAction('/sendmessage');
// $bot->sendRequest();




?>