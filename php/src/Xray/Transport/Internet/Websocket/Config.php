<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/websocket/config.proto

namespace Xray\Transport\Internet\Websocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.transport.internet.websocket.Config</code>
 */
class Config extends Message
{
    /**
     * Generated from protobuf field <code>string host = 1;</code>
     */
    protected $host = '';
    /**
     * URL path to the WebSocket service. Empty value means root(/).
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     */
    private $header;
    /**
     * Generated from protobuf field <code>bool accept_proxy_protocol = 4;</code>
     */
    protected $accept_proxy_protocol = false;
    /**
     * Generated from protobuf field <code>uint32 ed = 5;</code>
     */
    protected $ed = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $host
     * @type string $path
     *           URL path to the WebSocket service. Empty value means root(/).
     * @type array|MapField $header
     * @type bool $accept_proxy_protocol
     * @type int $ed
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Websocket\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string host = 1;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>string host = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * URL path to the WebSocket service. Empty value means root(/).
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * URL path to the WebSocket service. Empty value means root(/).
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     * @return MapField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     * @param array|MapField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::STRING);
        $this->header = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool accept_proxy_protocol = 4;</code>
     * @return bool
     */
    public function getAcceptProxyProtocol()
    {
        return $this->accept_proxy_protocol;
    }

    /**
     * Generated from protobuf field <code>bool accept_proxy_protocol = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAcceptProxyProtocol($var)
    {
        GPBUtil::checkBool($var);
        $this->accept_proxy_protocol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ed = 5;</code>
     * @return int
     */
    public function getEd()
    {
        return $this->ed;
    }

    /**
     * Generated from protobuf field <code>uint32 ed = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEd($var)
    {
        GPBUtil::checkUint32($var);
        $this->ed = $var;

        return $this;
    }

}

