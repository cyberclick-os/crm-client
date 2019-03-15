<?php


namespace CyberclickCrm\Object;


use CyberclickCrm\Api;

class AbstractObject
{

    /**
     * @var Api instance of the Api used by this object
     */
    protected $api;

    /** @var array  */
    protected $data = [];

    public function __construct(Api $api = null)
    {
        $this->api = static::assureApi($api);
    }

    protected static function assureApi(Api $instance = null)
    {
        $instance = $instance ?: Api::instance();
        if (!$instance) {
            throw new \InvalidArgumentException(
                'An Api instance must be provided as argument or ');
        }
        return $instance;
    }

    /**
     * @return Api
     */
    public function api()
    {
        return $this->api;
    }

    /**
     * Like setData but will skip field validation
     *
     * @param array
     * @return $this
     */
    public function setDataWithoutValidation(array $data)
    {
        foreach ($data as $key => $value) {
            $this->data[$key] = $value;
        }
        // Handle class-specific situations
        if (method_exists($this, 'setDataTrigger')) {
            $this->setDataTrigger($data);
        }
        return $this;
    }

    protected function clearHistory()
    {

    }

    /**
     * @return array
     */
    public function data() {
        return $this->data;
    }
}