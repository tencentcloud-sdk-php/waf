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
 * DescribeAccessIndex接口的出参
 *
 * @method boolean getCaseSensitive() 获取是否大小写敏感
 * @method void setCaseSensitive(boolean $CaseSensitive) 设置是否大小写敏感
 * @method array getKeyValues() 获取标签索引配置中的字段信息
 * @method void setKeyValues(array $KeyValues) 设置标签索引配置中的字段信息
 */
class AccessRuleTagInfo extends AbstractModel
{
    /**
     * @var boolean 是否大小写敏感
     */
    public $CaseSensitive;

    /**
     * @var array 标签索引配置中的字段信息
     */
    public $KeyValues;

    /**
     * @param boolean $CaseSensitive 是否大小写敏感
     * @param array $KeyValues 标签索引配置中的字段信息
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("KeyValues",$param) and $param["KeyValues"] !== null) {
            $this->KeyValues = [];
            foreach ($param["KeyValues"] as $key => $value){
                $obj = new AccessKeyValueInfo();
                $obj->deserialize($value);
                array_push($this->KeyValues, $obj);
            }
        }
    }
}
