<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/command/command.proto

namespace Xray\App\Proxyman\Command;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Proxyman\Command\Command;
use Xray\Core\InboundHandlerConfig;

/**
 * Generated from protobuf message <code>xray.app.proxyman.command.AddInboundRequest</code>
 */
class AddInboundRequest extends Message
{
    /**
     * Generated from protobuf field <code>.xray.core.InboundHandlerConfig inbound = 1;</code>
     */
    protected $inbound = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type InboundHandlerConfig $inbound
     * }
     */
    public function __construct($data = NULL)
    {
        Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.core.InboundHandlerConfig inbound = 1;</code>
     * @return InboundHandlerConfig|null
     */
    public function getInbound()
    {
        return $this->inbound;
    }

    public function hasInbound()
    {
        return isset($this->inbound);
    }

    public function clearInbound()
    {
        unset($this->inbound);
    }

    /**
     * Generated from protobuf field <code>.xray.core.InboundHandlerConfig inbound = 1;</code>
     * @param InboundHandlerConfig $var
     * @return $this
     */
    public function setInbound($var)
    {
        GPBUtil::checkMessage($var, InboundHandlerConfig::class);
        $this->inbound = $var;

        return $this;
    }

}
