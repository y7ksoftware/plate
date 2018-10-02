# Y7K Craft Project

Version: See [project.json](project.json)
Changelog: See [changelog.md](changelog.md)

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
7. Install Craft at `yourdomain.test/admin`

## Favicons
- Replace all Favicons in `public/assets/images/meta/`
- Replace `favicon.ico` and `browserconfig.xml` in `public/` and `public/de/` 
- Use correct file-paths in `browserconfig.xml` and `public/assets/images/meta/manifest.json` 

## Development

### Local Server
You can use [Laravel Homestead](https://laravel.com/docs/master/homestead) as development server. Run `npm run watch` to build and watch your files, while live-reloading the browser via browser-sync. Visit [http://localhost:3000](http://localhost:3000) to view the page. It works as a proxy to your dev domain specified in the `.env` file. Use your original url for going to the CMS Backend tough.

### Build Assets
- Run `npm run dev`  for development build of all assets (non-minified)
- Run `npm run prod` for production build (minified sources and minified images) 

### Localtunnel
You can use [localtunnel](http://http://localtunnel.me/) to serve your local dev site to public internet access (for testing on other devices, webservices, api's etc.) like this: `lt --port 3000 --subdomain yourpreferedsubdomain`. If you're not using the browser-sync dev server at `localhost:3000`, you can define a host like this: `lt --local_host yourdomain.dev --port 80 --subdomain yourpreferedsubdomain`

## Console
Access the Yii Command Runner by running `php craft` from the project root (on the server or vm).
