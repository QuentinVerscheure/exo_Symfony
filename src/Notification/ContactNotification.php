<?php

namespace App\Notification;

use App\Entity\contact;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactNotification{

    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function contactNotify(contact $contact){
        $message = <<<HTML
            <h1>Demande de contact</h1>
            <br>
            <p>M. ou Mme {$contact->getNom()} vous a contacté pour avoir des informations</p>
            <p>message:</p>
            <p>{$contact->getMessage()}</p>
        HTML;
        $email = (new TemplatedEmail())
            ->from('hello@example.com')
            ->to($contact->getEmail())
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('envoie de mail pour contact')
            ->htmlTemplate('notification/email.html.twig')
            ->context(["contact" => $contact]);

        $this->mailer->send($email);
    // $mailer->send($email);
    }
}

