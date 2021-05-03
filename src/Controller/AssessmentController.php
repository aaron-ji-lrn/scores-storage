<?php

namespace App\Controller;

use LearnositySdk\Request\DataApi;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AssessmentController extends AbstractController
{
    private $dataApiUrl = 'https://data.dev.learnosity.com/latest/';
    private $key = [
        'consumer_key' => 'yis0TYCu7U9V4o7M',
        'domain'       => 'localhost'
    ];
    private $secret = '74c5fd430cf1242a527f6223aebd42d30464be22';
    /**
     * @Route("/assessment")
     */
    public function index(): Response
    {
        return $this->render('assessment.html');
    }

    /**
     * @Route("/assessment/manual")
     */
    public function manual(): Response
    {
        
        $requestPayload = [
            "session_id"=> ["dff717fc-be0f-4acf-bfde-68694f134c0b"]
        ];
        $responses = $this->requestDataApi('sessions', $requestPayload);
        // print_r($responses);
        $sessionQuestions = [];
        foreach ($responses['data'] as $responseData) {
            $responseJson = base64_decode($responseData);
            // print_r($sessionJson);
            $response = json_decode($responseJson, true);
            $session = $response['session'];
            $sessionQuestions[$session['session_id']] = $session['questions'];
            // print_r($questions);
            
        }

        $currentSessionId = "dff717fc-be0f-4acf-bfde-68694f134c0b";

        return $this->render('grading/manual.html.twig', [
            'questions' => $sessionQuestions[$currentSessionId],
            'sessionId' =>  $currentSessionId
        ]);
    }

    public function getDataApiEndpointUrl(string $path): string
    {
        return $this->dataApiUrl . $path;
    }

    public function requestDataApi(string $endpoint, array $requestPayload, string $action = 'get'): ?array
    {
        $dataApi = new DataApi();
        $response = $dataApi->request(
            $this->getDataApiEndpointUrl($endpoint),
            $this->key,
            $this->secret,
            $requestPayload,
            $action
        );

        return $response->json();
    }
}
