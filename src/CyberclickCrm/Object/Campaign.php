<?php


namespace CyberclickCrm\Object;


use CyberclickCrm\Api;
use CyberclickCrm\ApiRequest;
use CyberclickCrm\Http\RequestInterface;
use CyberclickCrm\Object\Fields\CampaignFields;
use CyberclickCrm\TypeChecker;

class Campaign extends AbstractObject
{
    /** @var string */
    private $publicKey;

    public function __construct($publicKey = '', Api $api = null)
    {
        parent::__construct($api);

        $this->publicKey = $publicKey;
    }

    public static function getFieldsEnum()
    {
        return CampaignFields::getInstance();
    }

    public function getStats($params)
    {
        $params['campaign'] = $this->publicKey;

        $paramTypes = [
        ];

        $enums = [
        ];

        $request = new ApiRequest(
            $this->api,
            null,
            RequestInterface::METHOD_GET,
            'stats',
            new Stats(),
            null,
            null,
            new TypeChecker($paramTypes, $enums)
        );

        $request->addParams(['params' => $params]);

        return $request->execute();
    }
}