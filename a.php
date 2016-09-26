<?php
interface IChat{
	function send();
}

class ChatSocket implements IChat{
	public function send(){
		
	}
}

class ChatHttp implements IChat{
	public function send(){
		
	}
}

function send_message($chat){
	if($chat instanceof IChat{
		$chat->send();
	)
}

send_message(new ChatSocket());