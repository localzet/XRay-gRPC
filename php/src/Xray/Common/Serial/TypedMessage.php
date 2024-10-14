<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/serial/typed_message.proto

namespace Xray\Common\Serial;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * TypedMessage is a serialized proto message along with its type name.
 *
 * Generated from protobuf message <code>xray.common.serial.TypedMessage</code>
 */
class TypedMessage extends Message
{
    /**
     * The name of the message type, retrieved from protobuf API.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Serialized proto message.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $type
     *           The name of the message type, retrieved from protobuf API.
     * @type string $value
     *           Serialized proto message.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Common\Serial\TypedMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the message type, retrieved from protobuf API.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The name of the message type, retrieved from protobuf API.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Serialized proto message.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Serialized proto message.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}

