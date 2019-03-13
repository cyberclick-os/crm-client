<?php

namespace CyberclickCrm\Http\Adapter;

use CyberclickCrm\Http\Client;
use CyberclickCrm\Http\RequestInterface;
use CyberclickCrm\Http\ResponseInterface;

interface AdapterInterface {

  /**
   * @param Client $client
   */
  public function __construct(Client $client);

  /**
   * @return Client
   */
  public function getClient();

  /**
   * @return string
   */
  public function getCaBundlePath();

  /**
   * @return \ArrayObject
   */
  public function getOpts();

  /**
   * @param \ArrayObject $opts
   * @return void
   */
  public function setOpts(\ArrayObject $opts);

  /**
   * @param RequestInterface $request
   * @return ResponseInterface
   */
  public function sendRequest(RequestInterface $request);
}
