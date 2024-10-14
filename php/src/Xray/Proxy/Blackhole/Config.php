<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/blackhole/config.proto

namespace Xray\Proxy\Blackhole;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Xray\Common\Serial\TypedMessage;

/**
 * Generated from protobuf message <code>xray.proxy.blackhole.Config</code>
 */
class Config extends Message
{
    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage response = 1;</code>
     */
    protected $response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type TypedMessage $response
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Proxy\Blackhole\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage response = 1;</code>
     * @return TypedMessage|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage response = 1;</code>
     * @param TypedMessage $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, TypedMessage::class);
        $this->response = $var;

        return $this;
    }

}

