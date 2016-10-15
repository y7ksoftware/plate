# Y7K Craft Boilerplate

Version: See [version.js](version.js)
Changelog: See [CHANGELOG.md](CHANGELOG.md)

## Prerequisites

- [Git](http://git-scm.com/)
- [Node.js](http://nodejs.org/) (with NPM)
- [Composer](https://getcomposer.org/)

## Installation

1. `git clone <repository-url>` this repository
2. Change into the new directory
3. Install composer packages with `composer install`
4. Install node packages with `npm install`
5. Run `composer run-script project-created-cmd`
6. Set Project Domain and Database in `.env`
7. Install Craft at `yourdomain.dev/admin`.
8. If you're building a multi-language page, configure nginx accordingly (see [Multilanguage NGINX Setup](#user-content-multilanguage-nginx-setup) or example below)

## Change Favicons

- Replace all Favicons in `resources/assets/images/meta/`
- Replace `favicon.ico` and `browserconfig.xml` in `public/` and `public/de/` 
- Use correct file-paths in `browserconfig.xml` and `resources/assets/images/meta/manifest.json` 

## Development

### Live-Reloading Development Server

You can use [Laravel Homestead](https://laravel.com/docs/master/homestead) as development server. Please read [these instructions](https://medium.com/@didgeoridoo/how-to-get-craft-cms-2-5-running-on-a-laravel-homestead-3-0-x-vagrant-box-556fe57ff807#.siftkm7kt) on how to set it up to get Craft running on it.
Run `gulp watch` for development and livereloading via browser-sync. Visit [http://localhost:3000](http://localhost:3000) to view the page. It works as a proxy to your dev domain specified in the `.env` file. Use your original url for going to the CMS Backend tough.

### Build assets

- Run `gulp `  for development build of all assets (non-minified)
- Run `gulp --production` for production build (minified sources and minified images) 

### Device and API testing

#### Browser-Sync
For autoreload, [browser-sync](http://www.browsersync.io/) is used. You can open the page in different browsers, devices etc. All file changes are synchronized and all browser interactions (clicks, scrolling etc.) also.

#### Localtunnel
You can use [localtunnel](http://http://localtunnel.me/) to serve your local dev site to public internet access (for testing on other devices, webservices, api's etc.) like this: `lt --port 3000 --subdomain yourpreferedsubdomain`. If you're not using the browser-sync dev server at localhost:3000, You can define a host like this: `lt --local_host yourdomain.dev --port 80 --subdomain yourpreferedsubdomain`


## Production Deploy

### Build

- Point public webfolder to `public/`
- Run all tasks described at [Installation](#user-content-installation))
- Use `gulp --production` for production build (minified sources and minified images)

### Multilanguage NGINX Setup

For Multilanguage support, add following entries to nginx config (replace current `location`). Example with 'de' folder for german:

```
location @rewrites {
    rewrite ^(.*) /index.php?p=$1 last;
}

location / {
    try_files $uri $uri/ @rewrites;
}

location @derewrites {
    rewrite ^(.*)$ /de/index.php?p=$1 last;
}

location /de/ {
    try_files $uri $uri/ @derewrites;
}
```

## Console
Access the Yii Command Runner by running `php console` from the project root (on the server or vm).

## Roadmap

- Add Error Pages for 404/503/500
