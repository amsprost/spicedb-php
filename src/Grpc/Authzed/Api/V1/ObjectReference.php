<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ObjectReference is used to refer to a specific object in the system.
 * </pre>
 *
 * Protobuf type <code>authzed.api.v1.ObjectReference</code>
 */
class ObjectReference extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string object_type = 1 [(.validate.rules) = {</code>
     */
    private $object_type = '';
    /**
     * <code>string object_id = 2 [(.validate.rules) = {</code>
     */
    private $object_id = '';

    public function __construct() {
        \GPBMetadata\Core::initOnce();
        parent::__construct();
    }

    /**
     * <code>string object_type = 1 [(.validate.rules) = {</code>
     */
    public function getObjectType()
    {
        return $this->object_type;
    }

    /**
     * <code>string object_type = 1 [(.validate.rules) = {</code>
     */
    public function setObjectType($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_type = $var;
    }

    /**
     * <code>string object_id = 2 [(.validate.rules) = {</code>
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * <code>string object_id = 2 [(.validate.rules) = {</code>
     */
    public function setObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_id = $var;
    }

}

