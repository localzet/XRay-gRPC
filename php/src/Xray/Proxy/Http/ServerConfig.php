<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/http/config.proto

namespace Xray\Proxy\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Proxy\Http\Config;

/**
 * Config for HTTP proxy server.
 *
 * Generated from protobuf message <code>xray.proxy.http.ServerConfig</code>
 */
class ServerConfig extends Message
{
    /**
     * Generated from protobuf field <code>map<string, string> accounts = 2;</code>
     */
    private $accounts;
    /**
     * Generated from protobuf field <code>bool allow_transparent = 3;</code>
     */
    protected $allow_transparent = false;
    /**
     * Generated from protobuf field <code>uint32 user_level = 4;</code>
     */
    protected $user_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type array|MapField $accounts
     * @type bool $allow_transparent
     * @type int $user_level
     * }
     */
    public function __construct($data = NULL)
    {
        Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, string> accounts = 2;</code>
     * @return MapField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Generated from protobuf field <code>map<string, string> accounts = 2;</code>
     * @param array|MapField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::STRING);
        $this->accounts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool allow_transparent = 3;</code>
     * @return bool
     */
    public function getAllowTransparent()
    {
        return $this->allow_transparent;
    }

    /**
     * Generated from protobuf field <code>bool allow_transparent = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowTransparent($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_transparent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 user_level = 4;</code>
     * @return int
     */
    public function getUserLevel()
    {
        return $this->user_level;
    }

    /**
     * Generated from protobuf field <code>uint32 user_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUserLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_level = $var;

        return $this;
    }

}

