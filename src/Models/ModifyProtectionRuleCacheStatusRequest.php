<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtectionRuleCacheStatusRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $defenseType;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domain'      => 'Domain',
        'ruleId'      => 'RuleId',
        'defenseType' => 'DefenseType',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->defenseType) {
            $res['DefenseType'] = $this->defenseType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProtectionRuleCacheStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['DefenseType'])) {
            $model->defenseType = $map['DefenseType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
