<?php

namespace CyberclickCrm;

class Session implements SessionInterface {

  /**
   * @var string
   */
  protected $apiKey;

    /**
     * @param $apiKey
     */
  public function __construct($apiKey) {
    $this->apiKey = $apiKey;
  }

  public function apiKey()
  {
      return $this->apiKey;
  }

    /**
     * @return array
     */
    public function getRequestParameters()
    {
        return [
            'api_key' => $this->apiKey()
        ];
    }
}
