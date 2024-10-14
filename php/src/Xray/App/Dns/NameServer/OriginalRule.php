<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/dns/config.proto

namespace Xray\App\Dns\NameServer;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Dns\Config;
use Xray\App\Dns\NameServer_OriginalRule;

/**
 * Generated from protobuf message <code>xray.app.dns.NameServer.OriginalRule</code>
 */
class OriginalRule extends Message
{
    /**
     * Generated from protobuf field <code>string rule = 1;</code>
     */
    protected $rule = '';
    /**
     * Generated from protobuf field <code>uint32 size = 2;</code>
     */
    protected $size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $rule
     * @type int $size
     * }
     */
    public function __construct($data = NULL)
    {
        Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string rule = 1;</code>
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Generated from protobuf field <code>string rule = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->rule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 size = 2;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>uint32 size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->size = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OriginalRule::class, NameServer_OriginalRule::class);
