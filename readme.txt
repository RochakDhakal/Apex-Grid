=== Apex Grid ===
Contributors: rochakdhakal
Requires at least: 6.9
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A dark, motorsport-inspired block theme with a fixed sidebar navigation in place of a top header.

== Description ==

Apex Grid is a dark, motorsport-inspired block theme with a fixed sidebar navigation in place of a top header. Built for clubs, communities, teams and blogs, it uses native blocks, theme.json and Full Site Editing so every part of the layout can be customised in the Site Editor.

On large screens the site navigation lives in a sticky left sidebar. Below 1024px it becomes a compact top bar with a slide-in drawer menu, built on the Navigation block's own accessible overlay.

Features:

* Sidebar header template part (registered in the Header area) with sectioned navigation, search, social icons and a contact button.
* Carbon-black colour system with race-red accents, a red-to-cyan racing stripe, and condensed display type.
* Templates for the front page, blog, single posts and pages (with optional content sidebar), full-width pages, archives, search and 404.
* Patterns for a hero, stats bar, featured event, quick links, latest posts, posts grid, announcement, standings table, gallery, call to action and section headings.
* Block styles: card, carbon texture, speed lines, racing stripe heading and separator, gradient text, kicker, live dot and leaderboard table.
* One alternate style variation: Carbon Cyan.
* Self-hosted fonts, no external requests, no JavaScript of its own.

== Installation ==

1. In your admin panel, go to Appearance → Themes and click Add New Theme.
2. Click Upload Theme, choose the theme ZIP file and click Install Now.
3. Click Activate.

== Frequently Asked Questions ==

= How do I edit the sidebar? =

Go to Appearance → Editor → Patterns → Template Parts → Sidebar Header (it is listed under Headers). You can change the logo, title, tagline, menu sections, search, social icons and contact button there. Menu items are edited in the Navigation block, or under Appearance → Editor → Navigation.

= How do I change the menu sections ("Main", "Explore")? =

Each section is a Navigation Submenu that is set to always show its items. Rename a submenu to change the label, add links inside it, or add another submenu for a new section.

= Can I add icons to menu items? =

Yes. Select a menu link and add one of these classes under Advanced → Additional CSS class(es): apex-grid-icon-home, apex-grid-icon-chat, apex-grid-icon-image, apex-grid-icon-calendar, apex-grid-icon-flag, apex-grid-icon-chart. Icons are decorative; the link text is always shown.

= How do I use the hero image? =

The hero pattern ships with a sample photo. Select the Cover block and choose Replace to use your own photo from the Media Library. The overlay keeps text readable.

= Where are events, standings and memberships stored? =

The theme only provides visual patterns with editable sample content. Event registration, live standings, memberships and similar features belong in plugins.

= Why is the copyright year in the footer fixed after I edit the footer? =

The footer pattern prints the current year when it is loaded. Once you customise the footer in the Site Editor, the content is saved as static text, so update the year there when needed.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Apex Grid WordPress Theme, (C) 2026 Rochak Dhakal.
Apex Grid is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Barlow Condensed
Copyright 2017 The Barlow Project Authors (https://github.com/jpt/barlow)
License: SIL Open Font License, Version 1.1, https://openfontlicense.org
Source: https://github.com/jpt/barlow

DM Sans
Copyright 2014 The DM Sans Project Authors (https://github.com/googlefonts/dm-fonts)
License: SIL Open Font License, Version 1.1, https://openfontlicense.org
Source: https://github.com/googlefonts/dm-fonts

JetBrains Mono
Copyright 2020 The JetBrains Mono Project Authors (https://github.com/JetBrains/JetBrainsMono)
License: SIL Open Font License, Version 1.1, https://openfontlicense.org
Source: https://github.com/JetBrains/JetBrainsMono

Images in assets/images (streaks-red.webp, streaks-cyan.webp, streaks-night.webp, streaks-grid.webp)
Copyright 2026 Rochak Dhakal. Original abstract artwork created for this theme.
License: GPLv2 or later, same as the theme.

Image in assets/images (hero.jpg)
License: CC0 1.0 Universal (CC0 1.0) Public Domain Dedication, https://creativecommons.org/publicdomain/zero/1.0/
Source: https://pxhere.com/en/photo/927411

Screenshot (screenshot.png)
Copyright 2026 Rochak Dhakal. Screenshot of the theme using the images above.
License: GPLv2 or later, same as the theme.

Menu icons in assets/css/layout.css
Original inline SVG drawings created for this theme.
License: GPLv2 or later, same as the theme.
