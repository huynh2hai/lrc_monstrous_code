<?php

namespace App;

trait  PerticipatesInForum{

	public function startConversation(Conversation $Conversation)
	{
	    // Create a new thread for a current user.
	}

	public function replyTo(Conversation $Conversation, Reply $reply)
	{
	    // Have the user reply to a conversatio with the given reply.
	}

}