<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '38f9d26d880861360f3aa630220e46a1';
$access_token  = 'LI1qF13IK1HSaCOWywdzQRAg8fjIhLs1/H+N664z0CAS+QS3wyA9te0FtdLQTo7t5Rd2XRjvubdd20w7BJ2tHrj4SsiKslc2FQ/sYRKNyMmtCj1KPfK8S/aEYa/myH/vF8cXjILyIDBlT+9UutM6jQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
