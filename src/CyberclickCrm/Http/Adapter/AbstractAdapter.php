<?php

namespace CyberclickCrm\Http\Adapter;

use CyberclickCrm\Http\Client;

abstract class AbstractAdapter implements AdapterInterface {

  /**
   * @var Client
   */
  protected $client;

  /**
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @return Client
   */
  public function getClient() {
    return $this->client;
  }

  /**
   * @return string
   */
  public function getCaBundlePath() {
    return $this->getClient()->getCaBundlePath();
  }
}
