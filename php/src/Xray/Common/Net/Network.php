<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/net/network.proto

namespace Xray\Common\Net;

use UnexpectedValueException;

/**
 * Protobuf type <code>xray.common.net.Network</code>
 */
class Network
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>TCP = 2;</code>
     */
    const TCP = 2;
    /**
     * Generated from protobuf enum <code>UDP = 3;</code>
     */
    const UDP = 3;
    /**
     * Generated from protobuf enum <code>UNIX = 4;</code>
     */
    const UNIX = 4;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::TCP => 'TCP',
        self::UDP => 'UDP',
        self::UNIX => 'UNIX',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

