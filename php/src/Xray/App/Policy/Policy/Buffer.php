<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/policy/config.proto

namespace Xray\App\Policy\Policy;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Policy\Config;
use Xray\App\Policy\Policy_Buffer;

/**
 * Generated from protobuf message <code>xray.app.policy.Policy.Buffer</code>
 */
class Buffer extends Message
{
    /**
     * Buffer size per connection, in bytes. -1 for unlimited buffer.
     *
     * Generated from protobuf field <code>int32 connection = 1;</code>
     */
    protected $connection = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $connection
     *           Buffer size per connection, in bytes. -1 for unlimited buffer.
     * }
     */
    public function __construct($data = NULL)
    {
        Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Buffer size per connection, in bytes. -1 for unlimited buffer.
     *
     * Generated from protobuf field <code>int32 connection = 1;</code>
     * @return int
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Buffer size per connection, in bytes. -1 for unlimited buffer.
     *
     * Generated from protobuf field <code>int32 connection = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkInt32($var);
        $this->connection = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Buffer::class, Policy_Buffer::class);
