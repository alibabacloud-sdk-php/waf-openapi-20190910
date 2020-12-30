<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeDomainAdvanceConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainConfigs[]
     */
    public $domainConfigs;
    protected $_name = [
        'requestId'     => 'RequestId',
        'domainConfigs' => 'DomainConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = [];
            if (null !== $this->domainConfigs && \is_array($this->domainConfigs)) {
                $n = 0;
                foreach ($this->domainConfigs as $item) {
                    $res['DomainConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainAdvanceConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainConfigs'])) {
            if (!empty($map['DomainConfigs'])) {
                $model->domainConfigs = [];
                $n                    = 0;
                foreach ($map['DomainConfigs'] as $item) {
                    $model->domainConfigs[$n++] = null !== $item ? domainConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
