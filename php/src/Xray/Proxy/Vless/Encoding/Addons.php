<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/vless/encoding/addons.proto

namespace Xray\Proxy\Vless\Encoding;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>xray.proxy.vless.encoding.Addons</code>
 */
class Addons extends Message
{
    /**
     * Generated from protobuf field <code>string Flow = 1;</code>
     */
    protected $Flow = '';
    /**
     * Generated from protobuf field <code>bytes Seed = 2;</code>
     */
    protected $Seed = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $Flow
     * @type string $Seed
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Proxy\Vless\Encoding\Addons::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Flow = 1;</code>
     * @return string
     */
    public function getFlow()
    {
        return $this->Flow;
    }

    /**
     * Generated from protobuf field <code>string Flow = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFlow($var)
    {
        GPBUtil::checkString($var, True);
        $this->Flow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Seed = 2;</code>
     * @return string
     */
    public function getSeed()
    {
        return $this->Seed;
    }

    /**
     * Generated from protobuf field <code>bytes Seed = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSeed($var)
    {
        GPBUtil::checkString($var, False);
        $this->Seed = $var;

        return $this;
    }

}

