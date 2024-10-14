<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/config.proto

namespace Xray\App\Router;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>xray.app.router.StrategyLeastLoadConfig</code>
 */
class StrategyLeastLoadConfig extends Message
{
    /**
     * weight settings
     *
     * Generated from protobuf field <code>repeated .xray.app.router.StrategyWeight costs = 2;</code>
     */
    private $costs;
    /**
     * RTT baselines for selecting, int64 values of time.Duration
     *
     * Generated from protobuf field <code>repeated int64 baselines = 3;</code>
     */
    private $baselines;
    /**
     * expected nodes count to select
     *
     * Generated from protobuf field <code>int32 expected = 4;</code>
     */
    protected $expected = 0;
    /**
     * max acceptable rtt, filter away high delay nodes. default 0
     *
     * Generated from protobuf field <code>int64 maxRTT = 5;</code>
     */
    protected $maxRTT = 0;
    /**
     * acceptable failure rate
     *
     * Generated from protobuf field <code>float tolerance = 6;</code>
     */
    protected $tolerance = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type array<StrategyWeight>|RepeatedField $costs
     *           weight settings
     * @type array<int>|array<string>|RepeatedField $baselines
     *           RTT baselines for selecting, int64 values of time.Duration
     * @type int $expected
     *           expected nodes count to select
     * @type int|string $maxRTT
     *           max acceptable rtt, filter away high delay nodes. default 0
     * @type float $tolerance
     *           acceptable failure rate
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\App\Router\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * weight settings
     *
     * Generated from protobuf field <code>repeated .xray.app.router.StrategyWeight costs = 2;</code>
     * @return RepeatedField
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * weight settings
     *
     * Generated from protobuf field <code>repeated .xray.app.router.StrategyWeight costs = 2;</code>
     * @param array<StrategyWeight>|RepeatedField $var
     * @return $this
     */
    public function setCosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, StrategyWeight::class);
        $this->costs = $arr;

        return $this;
    }

    /**
     * RTT baselines for selecting, int64 values of time.Duration
     *
     * Generated from protobuf field <code>repeated int64 baselines = 3;</code>
     * @return RepeatedField
     */
    public function getBaselines()
    {
        return $this->baselines;
    }

    /**
     * RTT baselines for selecting, int64 values of time.Duration
     *
     * Generated from protobuf field <code>repeated int64 baselines = 3;</code>
     * @param array<int>|array<string>|RepeatedField $var
     * @return $this
     */
    public function setBaselines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::INT64);
        $this->baselines = $arr;

        return $this;
    }

    /**
     * expected nodes count to select
     *
     * Generated from protobuf field <code>int32 expected = 4;</code>
     * @return int
     */
    public function getExpected()
    {
        return $this->expected;
    }

    /**
     * expected nodes count to select
     *
     * Generated from protobuf field <code>int32 expected = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExpected($var)
    {
        GPBUtil::checkInt32($var);
        $this->expected = $var;

        return $this;
    }

    /**
     * max acceptable rtt, filter away high delay nodes. default 0
     *
     * Generated from protobuf field <code>int64 maxRTT = 5;</code>
     * @return int|string
     */
    public function getMaxRTT()
    {
        return $this->maxRTT;
    }

    /**
     * max acceptable rtt, filter away high delay nodes. default 0
     *
     * Generated from protobuf field <code>int64 maxRTT = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxRTT($var)
    {
        GPBUtil::checkInt64($var);
        $this->maxRTT = $var;

        return $this;
    }

    /**
     * acceptable failure rate
     *
     * Generated from protobuf field <code>float tolerance = 6;</code>
     * @return float
     */
    public function getTolerance()
    {
        return $this->tolerance;
    }

    /**
     * acceptable failure rate
     *
     * Generated from protobuf field <code>float tolerance = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setTolerance($var)
    {
        GPBUtil::checkFloat($var);
        $this->tolerance = $var;

        return $this;
    }

}
