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
