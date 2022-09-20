<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * RelationshipFilter is a collection of filters which when applied to a
 * relationship will return relationships that have exactly matching fields.
 * resource_type is required. All other fields are optional and if left
 * unspecified will not filter relationships.
 * </pre>
 *
 * Protobuf type <code>authzed.api.v1.RelationshipFilter</code>
 */
class RelationshipFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string resource_type = 1 [(.validate.rules) = {</code>
     */
    private $resource_type = '';
    /**
     * <code>string optional_resource_id = 2 [(.validate.rules) = {</code>
     */
    private $optional_resource_id = '';
    /**
     * <code>string optional_relation = 3 [(.validate.rules) = {</code>
     */
    private $optional_relation = '';
    /**
     * <code>.authzed.api.v1.SubjectFilter optional_subject_filter = 4;</code>
     */
    private $optional_subject_filter = null;

    public function __construct() {
        \GPBMetadata\PermissionService::initOnce();
        parent::__construct();
    }

    /**
     * <code>string resource_type = 1 [(.validate.rules) = {</code>
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * <code>string resource_type = 1 [(.validate.rules) = {</code>
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;
    }

    /**
     * <code>string optional_resource_id = 2 [(.validate.rules) = {</code>
     */
    public function getOptionalResourceId()
    {
        return $this->optional_resource_id;
    }

    /**
     * <code>string optional_resource_id = 2 [(.validate.rules) = {</code>
     */
    public function setOptionalResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->optional_resource_id = $var;
    }

    /**
     * <code>string optional_relation = 3 [(.validate.rules) = {</code>
     */
    public function getOptionalRelation()
    {
        return $this->optional_relation;
    }

    /**
     * <code>string optional_relation = 3 [(.validate.rules) = {</code>
     */
    public function setOptionalRelation($var)
    {
        GPBUtil::checkString($var, True);
        $this->optional_relation = $var;
    }

    /**
     * <code>.authzed.api.v1.SubjectFilter optional_subject_filter = 4;</code>
     */
    public function getOptionalSubjectFilter()
    {
        return $this->optional_subject_filter;
    }

    /**
     * <code>.authzed.api.v1.SubjectFilter optional_subject_filter = 4;</code>
     */
    public function setOptionalSubjectFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\SubjectFilter::class);
        $this->optional_subject_filter = $var;
    }

}

