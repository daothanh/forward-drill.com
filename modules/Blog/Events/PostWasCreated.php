<?php

namespace Modules\Blog\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\Core\Contracts\StoringSeo;
use Modules\Media\Repositories\StoringMedia;
use Modules\Blog\Entities\Post;

class PostWasCreated implements StoringMedia, StoringSeo
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $entity;

    protected $data;

    /**
     * Create a new event instance.
     *
     * @param Post $page
     * @param $data
     */
    public function __construct(Post $page, $data)
    {
        $this->entity = $page;
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

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Return the ALL data sent
     * @return array
     */
    public function getSubmissionData()
    {
        return $this->data;
    }

    public function getEntityClass()
    {
        return get_class($this->entity);
    }
}
