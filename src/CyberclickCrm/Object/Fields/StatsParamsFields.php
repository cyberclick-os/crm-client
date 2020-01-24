<?php

namespace CyberclickCrm\Object\Fields;

use CyberclickCrm\Enum\AbstractEnum;

class StatsParamsFields extends AbstractEnum
{
    const START_DATE        = 'startDate';
    const END_DATE          = 'endDate';
    const GROUP_ROW         = 'groupRow';
    const GROUP_COLUMN      = 'groupColumn';
    const CAMPAIGN          = 'campaign';
    const CREATIVITY        = 'creativity';
    const FILTERS           = 'filters';
    const RESULT_STATUS     = 'result_status';
    const RECORD_STATUS     = 'record_status';
    const VALIDATION_STATUS = 'validation_status';
    const REPORT_TYPE       = 'reportType';

    public function getFieldTypes()
    {
        return [
            'startDate' => 'datetime',
            'groupRow' => 'string',
            'groupColumn' => 'string',
            'campaign' => 'string',
            'creativity' => 'string',
            'filters' => 'list<Filter>',
            'result_status' => 'string',
            'record_status' => 'string',
            'validation_status' => 'string',
            'reportType' => 'string',
        ];
    }
}