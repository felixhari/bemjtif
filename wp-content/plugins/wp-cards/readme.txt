=== Plugin Name ===
Contributors: rocketwood
Tags: cards, card design, widgets
Requires at least: 3.2
Tested up to: 4.2.3
Stable tag: 1.5.1

WP Cards gives your WordPress website the ability to load "cards" into the homepage and header sections of your site.

== Description ==

WP Cards uses WordPress widgets and full-page width sidebars to add the ability to drag-and-drop widgetized cards to a website’s homepage. A theme developer just needs to add the included “home.php” file in their theme, or add a call to a dynamic sidebar to their existing home file, and their theme’s homepage will automatically support full-page width cards.

A website admin can reconfigure their site’s homepage on-the-fly without any programming skills or the need to depend on a programmer to make the changes. The admin just needs to log into the WordPress admin area, click-through to the Widgets admin page and drag-and-drop cards into the homepage’s card sidebar. Adding new page elements, moving page elements up and down, or removing page elements can happen in just a matter of seconds, and the website’s homepage is automatically updated.

WP Cards also supports adding a “Jumbotron” card area, Jumbotron cards can be configured to only show up on certain types of pages on the website. For example, a “Search Jumbotron” card can be configured to show up on just the website’s search and 404 pages. Or a “Registration Jumbotron” can be configured to appear just on the website’s homepage.

WP Cards is a framework for adding the card concept to an existing WordPress theme, and is designed to be full extended by other developers. WP Cards comes with a number of already developed cards and can be easily extended by adding new cards to the WP Cards’ “cards” directory, or by adding a “cards” folder to a theme or child theme’s root directory. WP Cards automatically loads all widgets (which use a pre-defined naming convention) from these “cards” directories into the widgets section of the WordPress admin area.

WP Cards’ default cards were built using Bootstrap 3 and are dependent on the Bootstrap 3 CSS and JavaScript files.

WP Cards automatically adds two sidebar areas to the WordPress widgets admin page, these are named “Card Staging Area” and “Home Page Cards”. The “Card Staging Area” is just a sandbox widget area for building out cards before adding them to a live page. The plugin also allows for three additional card areas to be activated from the plugin options page, these include the “Jumbotron Cards” and the “Header/Footer Cards”.

The plugin includes a “WP Cards Template” (wp-cards-template.php) that can be added to any page in order to add a card layout page to a website. An admin would just have to create a new page and set the page template to “WP Cards Template” and a widget area by the same name as the new page is automatically generated in the widget admin area. The admin just needs to drag widgets into the newly created widget area and they will load into the page.

Having cards stored in widget areas generated by the WP Cards plugin enables a website admin to switch out WordPress themes over time, the website’s existing cards will still be available to be used and maintained within a new theme.

== Installation ==

1. Upload the `wp-cards` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Example of a “Registration” Jumbotron card
2. Example of a “Search” Jumbotron card
3. Example of a “Banner” Jumbotron card
4. Example of a “Carousel” card
5. Example of a “Spotlight” card
6. Example of a “Category Carousel” card
7. Example of a “Featurette by Category” card
8. Example of a “Latest Post Grid” card

== Changelog ==

= 1.0 =
* First upload to WordPress Plugin SVN.
= 1.1 =
* Bug fixes.
* Added new cards.
* Added plugin icons.
* Tested in WP 4.0
* Added template view selection to the archive-card with views like grid and list that can be overridden in a theme or child theme.
= 1.2 =
* Added a plugin options page, allow user to add Bootstrap files to their theme through the WP-Cards plugin options page.
* Added supporting CSS to the theme.
= 1.2.1 =
* Released two new views: mini and spotlight.
* Renamed Card - Archives to Card - Multi View
* Added more features to Card - Multi View
* Deleted Card - Recent Posts in favor of using the mini view in Card - Multi View
= 1.3.1 =
* Minor bug fixes.
= 1.4 =
* Added the Owl Carousel as an optional default card.
= 1.5 =
* Added the wp-cards-template.php file to the project. When the WP Cards Template is assigned to a page a new widget area with a corresponding name is dynamically created in the WordPress admin. Any widgets added to that widget area will show up on the page using that custom template.
= 1.5.1 =
* Renamed class to prevent naming collisions.
* Added plugin options to set/override page container id and content id in template.
* Added plugin options to enable Jumbotron card area, and Header/Hooter card areas within the custom pages, both options are enabled by default.