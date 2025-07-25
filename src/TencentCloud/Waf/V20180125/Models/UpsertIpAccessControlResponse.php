<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpsertIpAccessControl返回参数结构体
 *
 * @method string getFailedItems() 获取添加或修改失败的条目
 * @method void setFailedItems(string $FailedItems) 设置添加或修改失败的条目
 * @method integer getFailedCount() 获取添加或修改失败的数目
 * @method void setFailedCount(integer $FailedCount) 设置添加或修改失败的数目
 * @method array getIds() 获取添加或修改的IP数据Id列表
 * @method void setIds(array $Ids) 设置添加或修改的IP数据Id列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UpsertIpAccessControlResponse extends AbstractModel
{
    /**
     * @var string 添加或修改失败的条目
     */
    public $FailedItems;

    /**
     * @var integer 添加或修改失败的数目
     */
    public $FailedCount;

    /**
     * @var array 添加或修改的IP数据Id列表
     */
    public $Ids;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FailedItems 添加或修改失败的条目
     * @param integer $FailedCount 添加或修改失败的数目
     * @param array $Ids 添加或修改的IP数据Id列表
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FailedItems",$param) and $param["FailedItems"] !== null) {
            $this->FailedItems = $param["FailedItems"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
