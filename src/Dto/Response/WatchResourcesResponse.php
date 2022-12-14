<?php declare(strict_types=1);

namespace LinkORB\Authzed\Dto\Response;

use LinkORB\Authzed\Dto\PermissionUpdate;
use LinkORB\Authzed\Dto\ZedToken;

class WatchResourcesResponse
{
    /** @var PermissionUpdate[] */
    private ?array $updates;
    private ?ZedToken $changesThrough;

    public function __construct(array $updates = [], ZedToken $changesThrough = null)
    {
        $this->updates        = $updates;
        $this->changesThrough = $changesThrough;
    }

    public function getUpdates(): ?array
    {
        return $this->updates;
    }

    public function getChangesThrough(): ?ZedToken
    {
        return $this->changesThrough;
    }

    public function setUpdates(?array $updates): self
    {
        $this->updates = $updates;
        return $this;
    }

    public function addUpdate(PermissionUpdate $update): self
    {
        $this->updates[] = $update;
        return $this;
    }

    public function setChangesThrough(?ZedToken $changesThrough): self
    {
        $this->changesThrough = $changesThrough;
        return $this;
    }
}
