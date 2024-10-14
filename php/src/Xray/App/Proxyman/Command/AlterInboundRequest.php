<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/command/command.proto

namespace Xray\App\Proxyman\Command;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Proxyman\Command\Command;
use Xray\Common\Serial\TypedMessage;

/**
 * Generated from protobuf message <code>xray.app.proxyman.command.AlterInboundRequest</code>
 */
class AlterInboundRequest extends Message
{
    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    protected $tag = '';
    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage operation = 2;</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $tag
     * @type TypedMessage $operation
     * }
     */
    public function __construct($data = NULL)
    {
        Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage operation = 2;</code>
     * @return TypedMessage|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage operation = 2;</code>
     * @param TypedMessage $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, TypedMessage::class);
        $this->operation = $var;

        return $this;
    }

}

