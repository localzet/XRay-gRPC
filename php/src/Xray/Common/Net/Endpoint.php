<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/net/destination.proto

namespace Xray\Common\Net;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Common\Net\Destination;

/**
 * Endpoint of a network connection.
 *
 * Generated from protobuf message <code>xray.common.net.Endpoint</code>
 */
class Endpoint extends Message
{
    /**
     * Generated from protobuf field <code>.xray.common.net.Network network = 1;</code>
     */
    protected $network = 0;
    /**
     * Generated from protobuf field <code>.xray.common.net.IPOrDomain address = 2;</code>
     */
    protected $address = null;
    /**
     * Generated from protobuf field <code>uint32 port = 3;</code>
     */
    protected $port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $network
     * @type IPOrDomain $address
     * @type int $port
     * }
     */
    public function __construct($data = NULL)
    {
        Destination::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.common.net.Network network = 1;</code>
     * @return int
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Generated from protobuf field <code>.xray.common.net.Network network = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkEnum($var, Network::class);
        $this->network = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.common.net.IPOrDomain address = 2;</code>
     * @return IPOrDomain|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function hasAddress()
    {
        return isset($this->address);
    }

    public function clearAddress()
    {
        unset($this->address);
    }

    /**
     * Generated from protobuf field <code>.xray.common.net.IPOrDomain address = 2;</code>
     * @param IPOrDomain $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, IPOrDomain::class);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 port = 3;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>uint32 port = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->port = $var;

        return $this;
    }

}

