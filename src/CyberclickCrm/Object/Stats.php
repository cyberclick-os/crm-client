<?php


namespace CyberclickCrm\Object;


use CyberclickCrm\Http\RequestInterface;

class Stats extends AbstractObject
{
    /**
     * @param $params
     * @return $this
     */
    public function read($params)
    {
        $response = $this->api()->call(
            '/stats',
            RequestInterface::METHOD_GET,
            ['params' => $params]);
        $this->setDataWithoutValidation($response->getContent());
        $this->clearHistory();
        return $this;
    }
}