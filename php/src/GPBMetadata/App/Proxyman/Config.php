<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/config.proto

namespace GPBMetadata\App\Proxyman;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Common\Net\Address;
use GPBMetadata\Common\Net\Port;
use GPBMetadata\Common\Serial\TypedMessage;

class Config
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        Address::initOnce();
        Port::initOnce();
        \GPBMetadata\Transport\Internet\Config::initOnce();
        TypedMessage::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
app/proxyman/config.protoxray.app.proxymancommon/net/port.prototransport/internet/config.proto!common/serial/typed_message.proto"

InboundConfig"�
AllocationStrategy8
type (2*.xray.app.proxyman.AllocationStrategy.TypeX
concurrency (2C.xray.app.proxyman.AllocationStrategy.AllocationStrategyConcurrencyP
refresh (2?.xray.app.proxyman.AllocationStrategy.AllocationStrategyRefresh.
AllocationStrategyConcurrency
value (
*
AllocationStrategyRefresh
value (
",
Type

Always 

Random
External"�
SniffingConfig
enabled (
destination_override (	
domains_excluded (	

metadata_only (

route_only ("�
ReceiverConfig,
	port_list (2.xray.common.net.PortList+
listen (2.xray.common.net.IPOrDomainB
allocation_strategy (2%.xray.app.proxyman.AllocationStrategy>
stream_settings (2%.xray.transport.internet.StreamConfig$
receive_original_destination (<
sniffing_settings (2!.xray.app.proxyman.SniffingConfigJ"�
InboundHandlerConfig
tag (	;
receiver_settings (2 .xray.common.serial.TypedMessage8
proxy_settings (2 .xray.common.serial.TypedMessage"
OutboundConfig"�
SenderConfig(
via (2.xray.common.net.IPOrDomain>
stream_settings (2%.xray.transport.internet.StreamConfig<
proxy_settings (2$.xray.transport.internet.ProxyConfigA
multiplex_settings (2%.xray.app.proxyman.MultiplexingConfig
via_cidr (	"l
MultiplexingConfig
enabled (
concurrency (
xudpConcurrency (
xudpProxyUDP443 (	BU
com.xray.app.proxymanPZ&github.com/xtls/xray-core/app/proxyman�Xray.App.Proxymanbproto3'
            , true);

        static::$is_initialized = true;
    }
}

