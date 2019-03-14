<?php


namespace CyberclickCrm\Object;


use CyberclickCrm\Api;
use CyberclickCrm\ApiRequest;
use CyberclickCrm\Http\RequestInterface;
use CyberclickCrm\Object\Fields\ClientFields;
use CyberclickCrm\TypeChecker;

class Client extends AbstractObject
{
    /** @var integer */
    private $id;

    public function __construct($id = '', Api $api = null)
    {
        parent::__construct($api);

        $this->id = $id;
    }

    public static function getFieldsEnum()
    {
        return ClientFields::getInstance();
    }

    public function getStats($params)
    {
        $params['client'] = $this->id;

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