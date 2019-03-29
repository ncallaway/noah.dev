# noah.dev

This is the WordPress site that powers noah.dev

## Getting Started

1. `docker-compose up -d`
1. `docker-compose exec ndwp bin/bootstrap`

## noah.dev Theme
Theme files can be found and modified in `wp-content/themes/noah.dev`.

## Deploy

The app deploys with [`punt`](https://bitbucket.com/apsislabs/punt).

1. `gem install punt`
1. `punt deploy prod`

## Local Container

To ssh into the local container run: `docker-compose exec ndwp /bin/bash`

### Cloned from WPEngine Boilerplate
https://github.com/apsislabs/wpengine-boilerplate