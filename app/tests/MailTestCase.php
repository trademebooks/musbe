<?php

use GuzzleHttp\Message\Response;


class MailTestCase extends TestCase {

    protected $mailcatcher;

    function __construct()
    {
        $this->mailcatcher = new \GuzzleHttp\Client(['base_url' => 'http://localhost:1080']);
    }

    public function deleteAllEmails()
    {
        return $this->mailcatcher->delete('/messages');
    }

    public function getAllEmails()
    {
        $emails = $this->mailcatcher->get('/messages')->json();

        if (empty($emails))
        {
            $this->fail('No messages returned.');
        }

        return $emails;
    }

    public function getLastEmail()
    {
        $emailId = $this->getAllEmails()[0]['id'];

        return $this->mailcatcher->get("/messages/{$emailId}.json");
    }

    public function assertEmailBodyContains($body, Response $email)
    {
        $this->assertContains($body, (string) $email->getBody());
    }

    public function assertNotEmailBodyContains($body, Response $email)
    {
        $this->assertNotContains($body, (string) $email->getBody());
    }

    public function assertEmailWasSentTo($recipient, Response $email)
    {
        $this->assertContains("<{$recipient}>", $email->json()['recipients']);
    }

    public function assertNotEmailWasSentTo($recipient, Response $email)
    {
        $this->assertNotContains("<{$recipient}>", $email->json()['recipients']);
    }

}