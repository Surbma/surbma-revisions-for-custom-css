=== Surbma - Revisions for Custom CSS ===
Contributors: Surbma
Donate link: http://surbma.com/wordpress-plugins/
Tags: revisions, css, custom css
Requires at least: 4.7
Tested up to: 4.7
Stable tag: 1.0.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds revisions support for the Custom CSS post type.

== Description ==

This plugin adds revisions support for the new Custom CSS post type, which is added in WordPress 4.7. Use this plugin only, if you have already upgraded to WordPress 4.7.

Revisions are like a history for posts, so you can see previous versions of the content. This plugin adds this functionality to the new Custom CSS post type, so you can easily see and reset your previous customizations. This option is disabled by default and this plugin enables it for your website.

**Do you want to contribute or help improving this plugin?**

You can find it on GitHub: [https://github.com/Surbma/surbma-revisions-for-custom-css](https://github.com/Surbma/surbma-revisions-for-custom-css)

**You can find my other plugins and projects on GitHub:**

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

**Do you want to know more about me?**

Visit my webpage: [Surbma.com](http://surbma.com/)

== Installation ==

1. Upload `surbma-revisions-for-custom-css` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - Revisions for Custom CSS plugin through the 'Plugins' menu in WordPress
3. That's it. :)

== Frequently Asked Questions ==

= What are Revisions? =

The WordPress revisions system stores a record of each saved draft or published update. The revision system allows you to see what changes were made in each revision by dragging a slider (or using the Next/Previous buttons). The display indicates what has changed in each revision - what was added, what remained unchanged, and what was removed. Lines added or removed are highlighted, and individual character changes get additional highlighting. Click the 'Restore This Revision' button to restore a revision.

[https://codex.wordpress.org/Revisions](https://codex.wordpress.org/Revisions)

= I can not see Revisions. What should I do? =

Please check your wp-config.php file, if you have disabled revisions globally with this code:

```
define( 'WP_POST_REVISIONS', false );
```

= Can I limit the number of revisions? =

Sure, you can with this code in your wp-config.php file:

```
define( 'WP_POST_REVISIONS', 3 );
```

You have to know, that this code will limit revisions for all post types, like posts and pages also.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 1.0.0 =

- Initial release.
