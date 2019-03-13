<?php


namespace CyberclickCrm\Object\Fields;


use CyberclickCrm\Enum\AbstractEnum;

class RecordStatusValues extends AbstractEnum
{
    const NEW        = 'NEW';
    const CONFIRMED  = 'CONFIRMED';
    const CANCELLED  = 'CANCELLED';
    const DUPLICATED = 'DUPLICATED';
    const TEST       = 'TEST';
    const ROBINSON   = 'ROBINSON';
}