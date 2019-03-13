<?php


namespace CyberclickCrm\Object\Fields;


use CyberclickCrm\Enum\AbstractEnum;

class FilterConditionValues extends AbstractEnum
{
    const IS_EQUAL_TO        = '==';
    const IS_DIFFERENT_FROM  = '!=';
    const LOWER_THAN_EQUAL   = '<=';
    const GREATER_THAN_EQUAL = '>=';
    const LOWER_THAN         = '<';
    const GREATER_THAN       = '>';
    const STARTS             = 'starts';
    const NOT_STARtS         = 'notstarts';
    const ENDS               = 'ends';
    const NOT_ENDS           = 'notends';
    const CONTAINS           = 'contains';
    const NOT_CONTAINS       = 'notcontains';
    const EXISTS             = 'exists';
    const NOT_EXISTS         = 'notexists';
}