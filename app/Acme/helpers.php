<?php

function errors_for($attribute, $errors)
{
	return $errors->first($attribute, '<span class="error">:message</span>');
}

function link_to_profile($text = 'Profile')
{
    return link_to_route('profile', $text, Auth::user()->username);
}

function mail_to($view, $data=[])
{
    Mail::send('emails.welcome', $data, function($message)
    {
        $message->to('yichenzhu1337@gmail.com')
                ->subject('Welcome to Musbe');
    });
}