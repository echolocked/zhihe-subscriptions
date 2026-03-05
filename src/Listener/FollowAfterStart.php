<?php

namespace Flarum\Subscriptions\Listener;

use Flarum\Post\Event\Posted;

/**
 * Auto-subscribes the discussion creator to 'follow' when they start a discussion.
 *
 * The original flarum/subscriptions handled this via JS (DiscussionComposer extension),
 * but that was not included in this fork. This backend listener achieves the same result
 * reliably: post->number === 1 identifies the first post (i.e., discussion creation).
 */
class FollowAfterStart
{
    public function handle(Posted $event)
    {
        $post = $event->post;
        $actor = $event->actor;

        // Only applies to the first post (discussion creation)
        if ($post->number !== 1 || !$actor || !$actor->exists) {
            return;
        }

        $actor->assertRegistered();

        $state = $post->discussion->stateFor($actor);

        // Only set if not already explicitly subscribed to something
        if (!$state->subscription) {
            $state->subscription = 'follow';
            $state->save();
        }
    }
}
