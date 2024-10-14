<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/splithttp/config.proto

namespace Xray\Transport\Internet\Splithttp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>xray.transport.internet.splithttp.Config</code>
 */
class Config extends Message
{
    /**
     * Generated from protobuf field <code>string host = 1;</code>
     */
    protected $host = '';
    /**
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     */
    private $header;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMaxConcurrentPosts = 4;</code>
     */
    protected $scMaxConcurrentPosts = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMaxEachPostBytes = 5;</code>
     */
    protected $scMaxEachPostBytes = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMinPostsIntervalMs = 6;</code>
     */
    protected $scMinPostsIntervalMs = null;
    /**
     * Generated from protobuf field <code>bool noSSEHeader = 7;</code>
     */
    protected $noSSEHeader = false;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig xPaddingBytes = 8;</code>
     */
    protected $xPaddingBytes = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.Multiplexing xmux = 9;</code>
     */
    protected $xmux = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $host
     * @type string $path
     * @type array|MapField $header
     * @type RandRangeConfig $scMaxConcurrentPosts
     * @type RandRangeConfig $scMaxEachPostBytes
     * @type RandRangeConfig $scMinPostsIntervalMs
     * @type bool $noSSEHeader
     * @type RandRangeConfig $xPaddingBytes
     * @type Multiplexing $xmux
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Splithttp\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string host = 1;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>string host = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     * @return MapField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     * @param array|MapField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::STRING);
        $this->header = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMaxConcurrentPosts = 4;</code>
     * @return RandRangeConfig|null
     */
    public function getScMaxConcurrentPosts()
    {
        return $this->scMaxConcurrentPosts;
    }

    public function hasScMaxConcurrentPosts()
    {
        return isset($this->scMaxConcurrentPosts);
    }

    public function clearScMaxConcurrentPosts()
    {
        unset($this->scMaxConcurrentPosts);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMaxConcurrentPosts = 4;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setScMaxConcurrentPosts($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->scMaxConcurrentPosts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMaxEachPostBytes = 5;</code>
     * @return RandRangeConfig|null
     */
    public function getScMaxEachPostBytes()
    {
        return $this->scMaxEachPostBytes;
    }

    public function hasScMaxEachPostBytes()
    {
        return isset($this->scMaxEachPostBytes);
    }

    public function clearScMaxEachPostBytes()
    {
        unset($this->scMaxEachPostBytes);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMaxEachPostBytes = 5;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setScMaxEachPostBytes($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->scMaxEachPostBytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMinPostsIntervalMs = 6;</code>
     * @return RandRangeConfig|null
     */
    public function getScMinPostsIntervalMs()
    {
        return $this->scMinPostsIntervalMs;
    }

    public function hasScMinPostsIntervalMs()
    {
        return isset($this->scMinPostsIntervalMs);
    }

    public function clearScMinPostsIntervalMs()
    {
        unset($this->scMinPostsIntervalMs);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig scMinPostsIntervalMs = 6;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setScMinPostsIntervalMs($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->scMinPostsIntervalMs = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool noSSEHeader = 7;</code>
     * @return bool
     */
    public function getNoSSEHeader()
    {
        return $this->noSSEHeader;
    }

    /**
     * Generated from protobuf field <code>bool noSSEHeader = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoSSEHeader($var)
    {
        GPBUtil::checkBool($var);
        $this->noSSEHeader = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig xPaddingBytes = 8;</code>
     * @return RandRangeConfig|null
     */
    public function getXPaddingBytes()
    {
        return $this->xPaddingBytes;
    }

    public function hasXPaddingBytes()
    {
        return isset($this->xPaddingBytes);
    }

    public function clearXPaddingBytes()
    {
        unset($this->xPaddingBytes);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig xPaddingBytes = 8;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setXPaddingBytes($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->xPaddingBytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.Multiplexing xmux = 9;</code>
     * @return Multiplexing|null
     */
    public function getXmux()
    {
        return $this->xmux;
    }

    public function hasXmux()
    {
        return isset($this->xmux);
    }

    public function clearXmux()
    {
        unset($this->xmux);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.Multiplexing xmux = 9;</code>
     * @param Multiplexing $var
     * @return $this
     */
    public function setXmux($var)
    {
        GPBUtil::checkMessage($var, Multiplexing::class);
        $this->xmux = $var;

        return $this;
    }

}
