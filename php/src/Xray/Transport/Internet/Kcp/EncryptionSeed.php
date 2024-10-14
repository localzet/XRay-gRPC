<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/kcp/config.proto

namespace Xray\Transport\Internet\Kcp;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Maximum Transmission Unit, in bytes.
 *
 * Generated from protobuf message <code>xray.transport.internet.kcp.EncryptionSeed</code>
 */
class EncryptionSeed extends Message
{
    /**
     * Generated from protobuf field <code>string seed = 1;</code>
     */
    protected $seed = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $seed
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Kcp\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string seed = 1;</code>
     * @return string
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Generated from protobuf field <code>string seed = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSeed($var)
    {
        GPBUtil::checkString($var, True);
        $this->seed = $var;

        return $this;
    }

}
