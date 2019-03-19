<?php


namespace CyberclickCrm\Object;


class Stats extends AbstractObject
{

    public function deleteProperty($key)
    {
        if (isset($this->data[$key])) {
            unset ($this->data[$key]);
        }
    }
}