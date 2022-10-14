<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v1.WriteRelationshipsResponse</code>
 */
class WriteRelationshipsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken written_at = 1;</code>
     */
    protected $written_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V1\ZedToken $written_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PermissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken written_at = 1;</code>
     * @return \Authzed\Api\V1\ZedToken|null
     */
    public function getWrittenAt()
    {
        return $this->written_at;
    }

    public function hasWrittenAt()
    {
        return isset($this->written_at);
    }

    public function clearWrittenAt()
    {
        unset($this->written_at);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken written_at = 1;</code>
     * @param \Authzed\Api\V1\ZedToken $var
     * @return $this
     */
    public function setWrittenAt($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\ZedToken::class);
        $this->written_at = $var;

        return $this;
    }

}
