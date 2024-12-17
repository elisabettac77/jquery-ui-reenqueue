/**
 * Plugin Name: JQuery UI Reenqueue
 * Plugin URI: https://elica-webservices.it/
 * Description: A plugin to reenqueue JQuery UI and make non-coders' life easier
 * Version: 1.1
 * Requires PHP: 7.0
 * Requires CP: 2.0
 * Author: Elisabetta Carrara
 * Author URI: https://elica-webservices.it/
 * License: GNU General Public License v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: jquery-ui-reenqueue
 * Domain Path: /languages/
 * @author Elisabetta Carrara <info@elica-webservices.it>
 * @copyright Copyright (c) 2024, ELI.CA. Web Services
**/

# JQuery UI Enqueue

A ClassicPress plugin to reenqueue JQuery UI via CDN to make non-coders' life easier

## What does it do?

It reenqueues scripts and styles for JQueryUI via CDN making sure it's loaded first before all other plugins and theme are

## Why?

Some plugins and themes do work with ClassicPress, but rely on these scripts and styles to work properly.
Some users might not be confident in meddling with the plugin/theme code and don't have the budget to pay a dev,
or they urgently need them working.
This plugin is a viable temporary solution, while they ask for support to see if someone is able to help.

### To do:

- Add other deprecated scripts as per my needs/feature requests. (like thinkbox).

# PLEASE NOTE

This plugin is a temporary solution!

Another method I would not recommend is including the missing libraries in each of the affected plugins or themes.

As ClassicPress v3 approaches it is better to follow the guides that can be found here: https://www.classicpress.net/deprecated-scripts/
Following the guides will help in getting rid of the deprecated libraries and will allow the use of more performant code.
