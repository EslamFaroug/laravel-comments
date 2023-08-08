<?php

namespace EslamFaroug\LaravelComments\Events;

use Illuminate\Queue\SerializesModels;
use EslamFaroug\LaravelComments\Comment;

class CommentDeleted
{
    use SerializesModels;

    public $comment;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }
}
