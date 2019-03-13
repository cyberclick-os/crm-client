<?php


namespace CyberclickCrm\Object\Fields;


use CyberclickCrm\Enum\AbstractEnum;

class ResultStatusValues extends AbstractEnum
{
    const ERROR   = 'ERROR';
    const KO      = 'KO';
    const OK      = 'OK';
    const TIMEOUT = 'TIMEOUT';
}