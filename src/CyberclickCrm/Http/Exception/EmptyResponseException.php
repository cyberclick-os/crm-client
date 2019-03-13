<?php

namespace CyberclickCrm\Http\Exception;

use CyberclickCrm\Http\ResponseInterface;

class EmptyResponseException extends RequestException {

  /**
   * @param ResponseInterface $response
   */
  public function __construct(ResponseInterface $response) {
    $content = array(
      'error' => array(
        'message' => 'Empty Response',
      ));
    $response->setBody(json_encode($content));
    parent::__construct($response);
  }
}
