<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/shadowsocks/config.proto

namespace Xray\Proxy\Shadowsocks;

use UnexpectedValueException;

/**
 * Protobuf type <code>xray.proxy.shadowsocks.CipherType</code>
 */
class CipherType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>AES_128_GCM = 5;</code>
     */
    const AES_128_GCM = 5;
    /**
     * Generated from protobuf enum <code>AES_256_GCM = 6;</code>
     */
    const AES_256_GCM = 6;
    /**
     * Generated from protobuf enum <code>CHACHA20_POLY1305 = 7;</code>
     */
    const CHACHA20_POLY1305 = 7;
    /**
     * Generated from protobuf enum <code>XCHACHA20_POLY1305 = 8;</code>
     */
    const XCHACHA20_POLY1305 = 8;
    /**
     * Generated from protobuf enum <code>NONE = 9;</code>
     */
    const NONE = 9;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::AES_128_GCM => 'AES_128_GCM',
        self::AES_256_GCM => 'AES_256_GCM',
        self::CHACHA20_POLY1305 => 'CHACHA20_POLY1305',
        self::XCHACHA20_POLY1305 => 'XCHACHA20_POLY1305',
        self::NONE => 'NONE',
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
