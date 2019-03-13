<?php


namespace CyberclickCrm\Object\Fields;


use CyberclickCrm\Enum\AbstractEnum;

class ValidationStatusValues extends AbstractEnum
{
    const TO_VALIDATE = 'TO_VALIDATE';
    const PREVALID    = 'PREVALID';
    const NOT_VALID   = 'NOT_VALID';
    const VALID       = 'VALID';
    const REDIRECT    = 'REDIRECT';
    const IGNORE      = 'IGNORE';
}