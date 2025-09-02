<?php

namespace App\Controllers;

class ReniecController extends BaseController
{
  public function consultaDni($dni)
  {
    $token = getenv('DECOLECTA_TOKEN');
    
    $url = "https://api.decolecta.com/v1/reniec/dni?numero=" . $dni;

    $client = \Config\Services::curlrequest();
    $response = $client->request('GET', $url, [
      'headers' => [
        'Authorization' => 'Bearer ' . $token,
        'Accept' => 'application/json',
      ],
    ]);

    if ($response->getStatusCode() != 200) {
      return $this->response->setStatusCode($response->getStatusCode())
        ->setJSON(['error' => 'Error en API RENIEC']);
    }

    $data = $response->getJSON();

    return $this->response->setJSON($data);
  }
}
