# Y7K Project Boilerplate Changelog

## Version 0.14.*
* Update Craft Plugins
    - Remove ManyToMany and Introvert Plugins, which are not working properly
    - Added Minify, HttpPrefix and GroupBy Plugins
* Updated Laravel-Mix to 1.4.5

## Version 0.13.*
* Update craft plugins and add new plugins:
    - Neo (Create awesome Matrix fields with real fields)
    - TheArchitect (Import/Export sections, structure, fields etc.)
    - Supersort (Badass twig filters for array sorting)
    - Redactor Inline Styles (Add CSS to redactor editor in backend)
    - Quickfield (Create fields while in entry fieldlayout)
    - CPBodyClasses (Add user group etc. css classes to CP body)
    - CPSortCols (Entry Index: Sortable by custom fields)
* Add more ESLint Globals
* Add `.craft-cli.php`
* Add dev npm packages that laravel mix needs (browsersync)

## Version 0.10.*
* Updated Babel Presets
* Updated Laravel-Mix to 1.2.0

## Version 0.9.*
* Moved SCSS folder to its own repo
* Moved JS folder to its own repo
* Allow SCSS Globbing (@Import *)


## Version 0.8.*
* Updated all Craft Plugins
* Updated ESLint Config
* Craft CMS Config
    - Added config to set allowed filetypes in asset section
* Updated Piwik Url to avoid redirect
* Replaced Craft Cache Bust with Mix Plugin, to take account of mix-manifest.json
* Added `noindex & nofollow` tags, even if Sprout SEO is disabled

## Version 0.7.*
* Add Craft Prune Plugin
* Fix Browsersync autoreload
* Add Babel-Polyfill and use stage-2 presets
* Refactor SCSS
    - Unified commenting
    - Simplified general styles
    - Simplified/changes typo styles
* Add new SCSS utilities
    - Responsive properties
    - Named Z-Indexes
    - V-Cloak support
    - Unlink: remove link styles
* Change Breakpoint definitions: bp-phone is default (from 0)
* Refactored Barba.js transitions
* Refactored Vue Bootstrapping
* Added Formatting options to Craft Redactor config
* Added base_path to environment variables (craft config)


## Version 0.6.*
* Update Plugins
    - Imager 1.4.0 -> 1.5.0
    - ImageResizer 0.1.4 -> 1.0.0
    - SproutSEO 3.2.0 -> 3.2.1
    - SuperTable 1.0.2 -> 1.0.4
* Added `APP_NAME` to `.env` file
* Added timezone settings to Craft plate


## Version 0.5.*
* Add compatibility with Sprout SEO 3
* Split vendor chunks to vendor.js per default
* Fix favicon paths
* Use blade comments
* Remove HDTextRank Plugin
* Add namespace to body
* Approximate Craft and Laravel Template filenames
* Abort Cache-Warming Task when System is turned off
* Add to JS: Set Active class on Barba Page-Transition
* Update Laravel Mix to 0.10.0
* Update JS dependencies
* Added npm script aliases
* Disable SproutSEO output tag, so initial installs don't break


## Version 0.4.*
* Updated Craft Sprout Plugins
* Reintroduced static assets to build process
* Add sourcemaps to webpack
* Add template to mix: Task to copy non-commonjs vendor folders
* Add versioning and changelog


## Version 0.3.*
* Remove Kirby
* Merge Plain Plates
* Update Webpack Tooling
* Add Imager To Craft
* Change craft storage folders
* Minor refactoring


## Version 0.2.*
* Changes not tracked


## Version 0.1.*
* Updated JS structure
* Updated SCSS structure


## Version 0.0.*

* Initital Version, building upon Y7K Craft Boilerplate
