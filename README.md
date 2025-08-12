# Enhanced Subscriptions for Flarum

[![Latest Stable Version](https://poser.pugx.org/zhihe/subscriptions/v/stable)](https://packagist.org/packages/zhihe/subscriptions)
[![Total Downloads](https://poser.pugx.org/zhihe/subscriptions/downloads)](https://packagist.org/packages/zhihe/subscriptions)
[![License](https://poser.pugx.org/zhihe/subscriptions/license)](https://packagist.org/packages/zhihe/subscriptions)

An enhanced subscription system for Flarum with extended notification options and subscription analytics.

## ✨ Features

### 🎯 Follow OP Subscriptions
- **Follow OP** option: Get notifications only when the original poster replies
- Three subscription states: Following (all replies), Following OP (OP only), Ignore
- Perfect for tutorials, guides, and serialized content where OP responses are most important

### 📊 Subscription Analytics
- Display total follower count for each discussion
- Real-time subscription counts in discussion lists
- Visual indicators with star icons
- Always visible metrics (shows 0 when no followers)

### 🌍 Multi-language Support
- Full Chinese (Simplified) translations included
- Seamless bilingual interface support
- Easy to extend with additional languages

## 📋 Requirements

- Flarum 1.8 or higher
- PHP 8.0 or higher

## 🚀 Installation

```bash
composer require zhihe/subscriptions
php flarum extension:enable zhihe-subscriptions
```

**⚠️ Important:** This extension replaces the core `flarum/subscriptions` extension. Disable the original subscriptions extension before enabling this one.

## 🔧 Usage

### For Users
1. **Following**: Receive notifications for all replies to a discussion
2. **Following OP**: Only get notified when the original poster responds
3. **Ignore**: Stop all notifications from a discussion

### For Administrators
- Subscription counts are automatically displayed in discussion lists
- All existing subscription data is preserved during migration
- No additional configuration required

## 🗄️ Database Schema

The extension adds a new subscription type to the existing schema:

```sql
-- Extends discussion_user.subscription enum
ALTER TABLE discussion_user 
MODIFY COLUMN subscription ENUM('follow', 'ignore', 'follow_op');
```

## 🛠️ Development

### Local Development Setup

```bash
git clone https://github.com/echolocked/zhihe-subscriptions.git
cd zhihe-subscriptions
composer install
cd js && npm install && npm run build
```

### Keeping Updated

This extension maintains compatibility with the original flarum/subscriptions:

```bash
git remote add upstream https://github.com/flarum/subscriptions.git
git fetch upstream
git merge upstream/main
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📄 License

MIT License - Compatible with original Flarum subscriptions extension.

## 🙏 Credits

- Based on [flarum/subscriptions](https://github.com/flarum/subscriptions) by the Flarum Team
- Enhanced and maintained by the Zhihe development team

## 🆘 Support

- **Issues**: [GitHub Issues](https://github.com/echolocked/zhihe-subscriptions/issues)
- **Community**: [Flarum Community Forum](https://discuss.flarum.org)

---

*Love this extension? Consider starring the repository and sharing it with the Flarum community! ⭐*