<?php

namespace App\Service;

use Mailjet\Client;
use Mailjet\Resources;
use Symfony\Component\Mime\MimeTypes;

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

        if ($fichier) {
            $fileContent = base64_encode(file_get_contents($fichier));
            $filename = $fichier->getClientOriginalName();
            $mimeType = MimeTypes::getDefault()->guessMimeType($filename);

            $attachment = [[
                'ContentType' => $mimeType,
                'Filename' => $filename,
                'Base64Content' => $fileContent,
            ]];
        }

        $body = [
            'Messages' => [[
                'From' => [
                    'Email' => "ton@email.fr",
                    'Name' => "Tatoueur Studio"
                ],
                'To' => [[
                    'Email' => "destinataire@email.fr",
                    'Name' => "Studio"
                ]],
                'Subject' => "Demande de rendez-vous",
                'TextPart' => "Demande envoyée par " . $data['nom'],
                'HTMLPart' => "
                    <h3>Demande de rendez-vous</h3>
                    <ul>
                        <li><strong>Nom :</strong> {$data['nom']}</li>
                        <li><strong>Email :</strong> {$data['email']}</li>
                        <li><strong>Téléphone :</strong> {$data['telephone']}</li>
                        <li><strong>Date :</strong> {$data['date']->format('Y-m-d')}</li>
                        <li><strong>Objet :</strong> {$data['objet']}</li>
                        <li><strong>Message :</strong> {$data['message']}</li>
                    </ul>
                ",
                'Attachments' => $attachment ?? [],
            ]]
        ];

        $mj->post(Resources::$Email, ['body' => $body]);
    }
}
