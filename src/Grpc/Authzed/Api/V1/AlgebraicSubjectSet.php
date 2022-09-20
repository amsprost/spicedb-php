<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * AlgebraicSubjectSet is a subject set which is computed based on applying the
 * specified operation to the operands according to the algebra of sets.
 * UNION is a logical set containing the subject members from all operands.
 * INTERSECTION is a logical set containing only the subject members which are
 * present in all operands.
 * EXCLUSION is a logical set containing only the subject members which are
 * present in the first operand, and none of the other operands.
 * </pre>
 *
 * Protobuf type <code>authzed.api.v1.AlgebraicSubjectSet</code>
 */
class AlgebraicSubjectSet extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.authzed.api.v1.AlgebraicSubjectSet.Operation operation = 1;</code>
     */
    private $operation = 0;
    /**
     * <code>repeated .authzed.api.v1.PermissionRelationshipTree children = 2;</code>
     */
    private $children;

    public function __construct() {
        \GPBMetadata\Core::initOnce();
        parent::__construct();
    }

    /**
     * <code>.authzed.api.v1.AlgebraicSubjectSet.Operation operation = 1;</code>
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * <code>.authzed.api.v1.AlgebraicSubjectSet.Operation operation = 1;</code>
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Authzed\Api\V1\AlgebraicSubjectSet_Operation::class);
        $this->operation = $var;
    }

    /**
     * <code>repeated .authzed.api.v1.PermissionRelationshipTree children = 2;</code>
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * <code>repeated .authzed.api.v1.PermissionRelationshipTree children = 2;</code>
     */
    public function setChildren(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1\PermissionRelationshipTree::class);
        $this->children = $var;
    }

}

