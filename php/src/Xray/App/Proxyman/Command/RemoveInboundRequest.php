<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/command/command.proto

namespace Xray\App\Proxyman\Command;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Proxyman\Command\Command;

/**
 * Generated from protobuf message <code>xray.app.proxyman.command.RemoveInboundRequest</code>
 */
class RemoveInboundRequest extends Message
{
    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    protected $tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $tag
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

}
