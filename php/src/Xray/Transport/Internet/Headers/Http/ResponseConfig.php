<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/http/config.proto

namespace Xray\Transport\Internet\Headers\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.transport.internet.headers.http.ResponseConfig</code>
 */
class ResponseConfig extends Message
{
    /**
     * Generated from protobuf field <code>.xray.transport.internet.headers.http.Version version = 1;</code>
     */
    protected $version = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.headers.http.Status status = 2;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .xray.transport.internet.headers.http.Header header = 3;</code>
     */
    private $header;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type Version $version
     * @type Status $status
     * @type array<Header>|RepeatedField $header
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Headers\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.headers.http.Version version = 1;</code>
     * @return Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.headers.http.Version version = 1;</code>
     * @param Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.headers.http.Status status = 2;</code>
     * @return Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.headers.http.Status status = 2;</code>
     * @param Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.transport.internet.headers.http.Header header = 3;</code>
     * @return RepeatedField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.transport.internet.headers.http.Header header = 3;</code>
     * @param array<Header>|RepeatedField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Header::class);
        $this->header = $arr;

        return $this;
    }

}

