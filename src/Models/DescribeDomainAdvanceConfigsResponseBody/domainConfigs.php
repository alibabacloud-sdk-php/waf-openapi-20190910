<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs\profile;
use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @var profile
     */
    public $profile;

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'profile' => 'Profile',
        'domain'  => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toMap() : null;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Profile'])) {
            $model->profile = profile::fromMap($map['Profile']);
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
