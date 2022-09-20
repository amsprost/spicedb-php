<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * DirectSubjectSet is a subject set which is simply a collection of subjects.
 * </pre>
 *
 * Protobuf type <code>authzed.api.v1.DirectSubjectSet</code>
 */
class DirectSubjectSet extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .authzed.api.v1.SubjectReference subjects = 1;</code>
     */
    private $subjects;

    public function __construct() {
        \GPBMetadata\Core::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .authzed.api.v1.SubjectReference subjects = 1;</code>
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * <code>repeated .authzed.api.v1.SubjectReference subjects = 1;</code>
     */
    public function setSubjects(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1\SubjectReference::class);
        $this->subjects = $var;
    }

}
