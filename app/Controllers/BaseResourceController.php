<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class BaseResourceController extends ResourceController
{
  protected $format = 'json';

  protected $responseTemplate = [
    'app' => 'Zainzo Accounting',
    'api-version' => 'v0.0.1',
    'data' => [

    ]
  ];

  protected function setData($data = [])
  {
    $this->responseTemplate['data'] = $data;
  }

  protected function send()
  {
    header('Access-Control-Allow-Origin: *');
    return $this->respond($this->responseTemplate);
  }
}