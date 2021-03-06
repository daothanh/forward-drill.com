<?php

namespace Modules\User\Events;

use Modules\Media\Repositories\StoringMedia;
use Modules\User\Entities\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserWasCreated implements StoringMedia
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $entity;
    protected $data;

    /**
     * Create a new event instance.
     *
     * @param User $user
     * @param $data
     */
    public function __construct(User $user, $data)
    {
        $this->entity = $user;
        $this->data = $data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @inheritDoc
     */
    public function getSubmissionData()
    {
        return $this->data;
    }
}
