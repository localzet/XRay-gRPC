<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/http/config.proto

namespace Xray\Transport\Internet\Headers\Http;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>xray.transport.internet.headers.http.Status</code>
 */
class Status extends Message
{
    /**
     * Status code. Default "200".
     *
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * Statue reason. Default "OK".
     *
     * Generated from protobuf field <code>string reason = 2;</code>
     */
    protected $reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $code
     *           Status code. Default "200".
     * @type string $reason
     *           Statue reason. Default "OK".
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Headers\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Status code. Default "200".
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Status code. Default "200".
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Statue reason. Default "OK".
     *
     * Generated from protobuf field <code>string reason = 2;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Statue reason. Default "OK".
     *
     * Generated from protobuf field <code>string reason = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}
