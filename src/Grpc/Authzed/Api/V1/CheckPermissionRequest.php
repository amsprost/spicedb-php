<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * CheckPermissionRequest issues a check on whether a subject has a permission
 * or is a member of a relation, on a specific resource.
 * </pre>
 *
 * Protobuf type <code>authzed.api.v1.CheckPermissionRequest</code>
 */
class CheckPermissionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.authzed.api.v1.Consistency consistency = 1;</code>
     */
    private $consistency = null;
    /**
     * <pre>
     * resource is the resource on which to check the permission or relation.
     * </pre>
     *
     * <code>.authzed.api.v1.ObjectReference resource = 2 [(.validate.rules) = {</code>
     */
    private $resource = null;
    /**
     * <pre>
     * permission is the name of the permission (or relation) on which to execute
     * the check.
     * </pre>
     *
     * <code>string permission = 3 [(.validate.rules) = {</code>
     */
    private $permission = '';
    /**
     * <pre>
     * subject is the subject that will be checked for the permission or relation.
     * </pre>
     *
     * <code>.authzed.api.v1.SubjectReference subject = 4 [(.validate.rules) = {</code>
     */
    private $subject = null;

    public function __construct() {
        \GPBMetadata\PermissionService::initOnce();
        parent::__construct();
    }

    /**
     * <code>.authzed.api.v1.Consistency consistency = 1;</code>
     */
    public function getConsistency()
    {
        return $this->consistency;
    }

    /**
     * <code>.authzed.api.v1.Consistency consistency = 1;</code>
     */
    public function setConsistency(&$var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\Consistency::class);
        $this->consistency = $var;
    }

    /**
     * <pre>
     * resource is the resource on which to check the permission or relation.
     * </pre>
     *
     * <code>.authzed.api.v1.ObjectReference resource = 2 [(.validate.rules) = {</code>
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * <pre>
     * resource is the resource on which to check the permission or relation.
     * </pre>
     *
     * <code>.authzed.api.v1.ObjectReference resource = 2 [(.validate.rules) = {</code>
     */
    public function setResource(&$var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\ObjectReference::class);
        $this->resource = $var;
    }

    /**
     * <pre>
     * permission is the name of the permission (or relation) on which to execute
     * the check.
     * </pre>
     *
     * <code>string permission = 3 [(.validate.rules) = {</code>
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * <pre>
     * permission is the name of the permission (or relation) on which to execute
     * the check.
     * </pre>
     *
     * <code>string permission = 3 [(.validate.rules) = {</code>
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;
    }

    /**
     * <pre>
     * subject is the subject that will be checked for the permission or relation.
     * </pre>
     *
     * <code>.authzed.api.v1.SubjectReference subject = 4 [(.validate.rules) = {</code>
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * <pre>
     * subject is the subject that will be checked for the permission or relation.
     * </pre>
     *
     * <code>.authzed.api.v1.SubjectReference subject = 4 [(.validate.rules) = {</code>
     */
    public function setSubject(&$var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\SubjectReference::class);
        $this->subject = $var;
    }

}

