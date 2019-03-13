<?php

namespace CyberclickCrm\Logger;

use CyberclickCrm\Http\RequestInterface;
use CyberclickCrm\Http\ResponseInterface;

class NullLogger implements LoggerInterface {

  /**
   * @param string $level
   * @param string $message
   * @param array $context
   */
  public function log($level, $message, array $context = array()) {

  }

  /**
   * @param string $level
   * @param RequestInterface $request
   * @param array $context
   */
  public function logRequest(
    $level, RequestInterface $request, array $context = array()) {

  }

  /**
   * @param string $level
   * @param ResponseInterface $response
   * @param array $context
   */
  public function logResponse(
    $level, ResponseInterface $response, array $context = array()) {

  }
}
