<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/protocol/user.proto

namespace GPBMetadata\Common\Protocol;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Common\Serial\TypedMessage;

class User
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        TypedMessage::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
common/protocol/user.protoxray.common.protocol"W
User
level (

email (	1
account (2 .xray.common.serial.TypedMessageB^
com.xray.common.protocolPZ)github.com/xtls/xray-core/common/protocol�Xray.Common.Protocolbproto3'
            , true);

        static::$is_initialized = true;
    }
}
