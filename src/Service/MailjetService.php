<?php

namespace App\Service;

use Mailjet\Client;
use Mailjet\Resources;


class MailjetService
{
    private string $apiKey;
    private string $apiSecret;

   public function __construct(string $mailjetApiKey, string $mailjetApiSecret)
    {
        $this->apiKey = $mailjetApiKey;
        $this->apiSecret = $mailjetApiSecret;
    }

    public function sendEmail(array $data, $fichier = null): void
    {
        $mj = new Client($this->apiKey, $this->apiSecret, true, ['version' => 'v3.1']);

        $attachment = null;

        

       $body = [
    'Messages' => [[
        'From' => [
            'Email' => 'jeremyjardet62@gmail.com',
            'Name' => 'Formulaire de contact'
        ],
        'To' => [[
            'Email' => 'weare265487913@protonmail.com',
            'Name' => 'Le Tatoueur'
        ]],
        'ReplyTo' => [
            'Email' => $data['email'],
            'Name' => $data['nom']
        ],
        'Subject' => "Nouvelle demande de rendez-vous",
        'TextPart' => "Demande envoyée par " . $data['nom'],
        'HTMLPart' => "
            <h3>Demande de rendez-vous</h3>
            <ul>
                <li><strong>Nom :</strong> {$data['nom']}</li>
                <li><strong>Email :</strong> {$data['email']}</li>
                <li><strong>Téléphone :</strong> {$data['telephone']}</li>
                <li><strong>Date :</strong> {$data['date']->format('Y-m-d')}</li>
                <li><strong>Objet :</strong> {$data['objet']}</li>
                <li><strong>Message :</strong><br>{$data['message']}</li>
            </ul>
        "
    ]]
];


        $mj->post(Resources::$Email, ['body' => $body]);
    }
}
