# Zhihe Subscriptions

A fork of [flarum/subscriptions](https://github.com/flarum/subscriptions) with extended functionality.

## Additional Features

This fork adds the following features to the original Flarum subscriptions extension:

### 🌟 Follow OP Support
- **Follow OP** subscription type: Users can choose to only receive notifications when the original poster replies
- Three subscription states: Following (all replies), Following OP (only OP replies), Ignore
- Backward compatible with existing `follow` and `ignore` subscriptions

### 📊 Subscription Count Display
- Shows total number of followers for each discussion (Follow + Follow OP combined)
- Displays with star icon in discussion list
- Always visible (shows 0 when no subscriptions)
- Positioned consistently with view count

### 🌏 Enhanced Translations
- Full Chinese language support
- Bilingual interface (English/Chinese)

## Installation

```bash
composer require zhihe/subscriptions
```

**Important:** This extension replaces `flarum/subscriptions`. Make sure to disable/remove the original subscriptions extension before enabling this one.

## Database Changes

This fork modifies the `subscription` enum in the `discussion_user` table to include:
- `follow` (existing)
- `ignore` (existing) 
- `follow_op` (new)

## Compatibility

- Compatible with Flarum 1.8+
- Replaces and conflicts with `flarum/subscriptions`
- Maintains database compatibility with existing subscriptions

## Development

This fork is maintained as part of the Zhihe project. 

### Keeping Up with Upstream

To sync with upstream flarum/subscriptions:

```bash
git fetch upstream
git merge upstream/main
# Resolve conflicts, test, and commit
```

## License

MIT License - same as original flarum/subscriptions

## Credits

- Original extension: [Flarum Team](https://github.com/flarum/subscriptions)
- Fork modifications: Zhihe Team