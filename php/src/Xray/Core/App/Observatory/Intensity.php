<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/observatory/config.proto

namespace Xray\Core\App\Observatory;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>xray.core.app.observatory.Intensity</code>
 */
class Intensity extends Message
{
    /**
     * &#64;Document The time interval for a probe request in ms.
     *&#64;Type time.ms
     *
     * Generated from protobuf field <code>uint32 probe_interval = 1;</code>
     */
    protected $probe_interval = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $probe_interval
     *           &#64;Document The time interval for a probe request in ms.
     *          &#64;Type time.ms
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\App\Observatory\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;Document The time interval for a probe request in ms.
     *&#64;Type time.ms
     *
     * Generated from protobuf field <code>uint32 probe_interval = 1;</code>
     * @return int
     */
    public function getProbeInterval()
    {
        return $this->probe_interval;
    }

    /**
     * &#64;Document The time interval for a probe request in ms.
     *&#64;Type time.ms
     *
     * Generated from protobuf field <code>uint32 probe_interval = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProbeInterval($var)
    {
        GPBUtil::checkUint32($var);
        $this->probe_interval = $var;

        return $this;
    }

}
