<?php namespace Acme\Mailers;

use User;
use Mail;


class UserMailer extends Mailer {
	
	public function welcome($user)
	{
		$subject = 'Welcome to Musbe!';
		$view = 'emails.welcome';
		$data = [];
		
		return $this->sendTo($user, $subject, $view, $data);
	}

    public function contactUser($data)
    {
        Mail::queue([], $data, function($message) use ($data)
        {
            $message->from($data['auth_email'], $data['auth_username']);
            $message->to($data['receiver_email'], $data['receiver_username']);
            $message->subject('MUSBE: ' . $data['subject']);
            $message->setBody('<h4> This is a reply to your listing on MUSBE. </h4>' . $data['body']);
        });
    }

    public function contactMe($data)
    {
        Mail::queue([], $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('yichenzhu1337@gmail.com');
            $message->subject($data['subject']);
            $message->setBody($data['body']);
        });
    }
}