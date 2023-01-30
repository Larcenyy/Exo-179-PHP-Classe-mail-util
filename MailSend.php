<?php

class Email {
    private $subject;
    private $body;
    private $recipients;

    public function __construct($subject, $body, $recipients) {
        $this->subject = $subject;
        $this->body = $body;
        $this->recipients = $recipients;
    }

    public function send() {
        $to = implode(',', $this->recipients);
        $headers = "From: sender@example.com\r\n";
        mail($to, $this->subject, $this->body, $headers);
    }
}

$email = new Email("Sujet de l'email", "Corps de l'email", ["destinataire1@example.com", "destinataire2@example.com"]);
$email->send();