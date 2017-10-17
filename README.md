# Islamic Apps Docker Template for Development

This Docker template can be used to deploy various parts of AlAdhan.com and AlQuran.cloud using Docker.

# Supported Apps
You can currently deploy the following using this Docker template:

* <a href="https://github.com/islamic-apps/aladhan-web-app">AlAdhan.com Web App</a>
* <a href="https://github.com/islamic-apps/alquran-web-app">AlQuran.cloud Web App</a>
* The APIs are coming soon.

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

### For AlQuran.cloud
```
php deploy-alquran.php
```
## How to Use this for Development

The code for the applications is  now in the app folder in this repository. You can edit code directly in that folder and it syncs with the Docker Container(s) so you can see your changes in runtime.

You can commit directly from the app folder into the relevant repository for the app. Unless you're actually making changes to the Docker / environment configuration, you will not need to push to this repository.

# Credits
This is based on https://github.com/webdevops/php-docker-boilerplate.
