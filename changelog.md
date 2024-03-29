# Y7K Project Boilerplate Changelog


## Version 3.0.* - 2019-01-30
* define CRAFT_LICENCE_KEY via env
* disable beta releases in composer
* add craft plugins: agnostic-fetch, image-resizer
* remove craft plugins: craft-minify
* refactor redactor config files
* update date-formatter helper
* remove sprout-seo imports and config

## Version 2.0.* - 2019-01-15
* Set Craft to fixed composer version (prevent beta updates)
* add Locale to frontend constants
* Improve _layout structure
* Disable barba by default
* Add polyfills.io
* Minor improvements

## Version 1.0.* - 2018-10-08
* Updated Versioning to include major releases
* Fix laravel mix and webpack to work with hot reloading and correct paths
* Rename twig "modules" to "components"
* Refactor _layout.twig -> correct maintainableCSS naming
* Refactor frontend constants (now "window.backendConfig" instead of "window.App.constants")
* Remove unnecessary, outdated configs including bugsnag
* Add and streamline backend->frontend constants
* Add "no-fuoc" to html element initially
* Remove debuggrid from plate code (it is a component)
* Update eslint, add stylelint


## Version 0.20.* - 2018-06-19
* Updated Craft 3 boilerplate
* Added Y7K Modules to Craft 3 boilerplate

## Version 0.19.*
* Upgrades npm packages
* Updates Cachemonster Plugin
* Updates Craft 3 Plugins

## Version 0.18.*
* Add new Eslint Rules (based in AirBnb)
* Added npm packages needed for linting

## Version 0.17.*
* Craft Plugins
    - Removed Kint Plugin
    - Updated SproutSeo to 3.3.9
* Updated npm Packages
* Updated Craft CMS Readme: Ngix configuration for multilanguage Projects
* Renamed Piwik to Matomo

## Version 0.14.*
* Update Craft Plugins
    - Remove ManyToMany and Introvert Plugins, which are not working properly
    - Added Minify, HttpPrefix and GroupBy Plugins
    - Added Kint Plugin
    - Added Sprout Fields Plugin
* Updated Laravel-Mix to 1.4.5
* Added an imagetransforms config file

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
