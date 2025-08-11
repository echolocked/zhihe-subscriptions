import app from 'flarum/forum/app';
import { extend } from 'flarum/common/extend';
import DiscussionListItem from 'flarum/forum/components/DiscussionListItem';

export default function addSubscriptionCount() {
  extend(DiscussionListItem.prototype, 'infoItems', function (items) {
    const discussion = this.attrs.discussion;
    const subscriptionCount = discussion.attribute('subscriptionCount') || 0;

    // Debug: log the subscription count
    console.log('Subscription count for discussion', discussion.attribute('title'), ':', subscriptionCount);

    // ZHIHE MODIFICATION: Always show subscription count (including 0)
    // Follow the same pattern as flarum-discussion-views
    items.add(
      'subscription-count',
      m('span', [
        m('i', { className: 'fas fa-star', 'aria-hidden': 'true' }),
        subscriptionCount
      ]),
      -1000 // Set very low priority to make it rightmost
    );
  });
}