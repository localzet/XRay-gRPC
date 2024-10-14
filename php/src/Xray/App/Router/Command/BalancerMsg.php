<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/command/command.proto

namespace Xray\App\Router\Command;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Router\Command\Command;

/**
 * Generated from protobuf message <code>xray.app.router.command.BalancerMsg</code>
 */
class BalancerMsg extends Message
{
    /**
     * Generated from protobuf field <code>.xray.app.router.command.OverrideInfo override = 5;</code>
     */
    protected $override = null;
    /**
     * Generated from protobuf field <code>.xray.app.router.command.PrincipleTargetInfo principle_target = 6;</code>
     */
    protected $principle_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type OverrideInfo $override
     * @type PrincipleTargetInfo $principle_target
     * }
     */
    public function __construct($data = NULL)
    {
        Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.app.router.command.OverrideInfo override = 5;</code>
     * @return OverrideInfo|null
     */
    public function getOverride()
    {
        return $this->override;
    }

    public function hasOverride()
    {
        return isset($this->override);
    }

    public function clearOverride()
    {
        unset($this->override);
    }

    /**
     * Generated from protobuf field <code>.xray.app.router.command.OverrideInfo override = 5;</code>
     * @param OverrideInfo $var
     * @return $this
     */
    public function setOverride($var)
    {
        GPBUtil::checkMessage($var, OverrideInfo::class);
        $this->override = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.app.router.command.PrincipleTargetInfo principle_target = 6;</code>
     * @return PrincipleTargetInfo|null
     */
    public function getPrincipleTarget()
    {
        return $this->principle_target;
    }

    public function hasPrincipleTarget()
    {
        return isset($this->principle_target);
    }

    public function clearPrincipleTarget()
    {
        unset($this->principle_target);
    }

    /**
     * Generated from protobuf field <code>.xray.app.router.command.PrincipleTargetInfo principle_target = 6;</code>
     * @param PrincipleTargetInfo $var
     * @return $this
     */
    public function setPrincipleTarget($var)
    {
        GPBUtil::checkMessage($var, PrincipleTargetInfo::class);
        $this->principle_target = $var;

        return $this;
    }

}
