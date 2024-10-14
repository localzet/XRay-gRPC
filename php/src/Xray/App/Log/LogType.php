<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/log/config.proto

namespace Xray\App\Log;

use UnexpectedValueException;

/**
 * Protobuf type <code>xray.app.log.LogType</code>
 */
class LogType
{
    /**
     * Generated from protobuf enum <code>None = 0;</code>
     */
    const None = 0;
    /**
     * Generated from protobuf enum <code>Console = 1;</code>
     */
    const Console = 1;
    /**
     * Generated from protobuf enum <code>File = 2;</code>
     */
    const File = 2;
    /**
     * Generated from protobuf enum <code>Event = 3;</code>
     */
    const Event = 3;

    private static $valueToName = [
        self::None => 'None',
        self::Console => 'Console',
        self::File => 'File',
        self::Event => 'Event',
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
