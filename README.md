# Islamic Apps Docker Template for Development

This Docker template can be used to deploy various parts of AlAdhan.com and AlQuran.cloud using Docker.

# Supported Apps
You can currently deploy the following using this Docker template:

* <a href="https://github.com/islamic-apps/aladhan-web-app">AlAdhan.com Web App</a>
* <a href="https://github.com/islamic-apps/alquran-web-app">AlQuran.cloud Web App</a>
* <a href="https://github.com/islamic-apps/alquran-api">AlQuran.cloud API</a>
* <a href="https://github.com/islamic-apps/aladhan-api">AlAdhan.com API</a>

# Requirements
* Docker
* Docker Compose
* PHP 7.0+
* Composer

# Usage

If you want to get this up and running in one command, please ensure you have PHP 7.0+ running locally along with composer.

Then run:

### For AlAdhan.com
```
php deploy-aladhan.php
```
The app will now be available @ http://localhost:8000

### For AlQuran.cloud
```
php deploy-alquran.php
```
The app will now be available @ http://localhost:9000

### For the AlQuran.cloud API (http://api.alquran.cloud)
```
php deploy-alquran-api.php
```
The api will now be available @ http://localhost:9001. Try http://localhost:9001/ayah/262 for Ayat al Kursi.

### For the AlAdhan.com API (http://api.aladhan.com)
```
php deploy-aladhan-api.php
```
The api will now be available @ http://localhost:8001. Try http://localhost:8001/gToH to get today's Hijri Date. NOTE: For all endpoints that require Google Geocoding, you will need to add your key in app/config/config.yml. You might get away with a few free queries, but Google won't let you get too far.

## How to Use this for Development

The code for the applications is  now in the app folder in this repository. You can edit code directly in that folder and it syncs with the Docker Container(s) so you can see your changes in runtime.

You can commit directly from the app folder into the relevant repository for the app. Unless you're actually making changes to the Docker / environment configuration, you will not need to push to this repository.

# Credits
This is based on https://github.com/webdevops/php-docker-boilerplate.
