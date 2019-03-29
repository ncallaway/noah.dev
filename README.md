# noah.dev

This is the WordPress site that powers noah.dev

## Getting Started

1. `docker-compose up -d`
1. `docker-compose exec ndwp bin/bootstrap`

## noah.dev Theme
Theme files can be found and modified in `wp-content/themes/noah.dev`.

## Local Container

To ssh into the local container run: `docker-compose exec ndwp /bin/bash`

## Remote

### Deploy

The app deploys with [`punt`](https://bitbucket.com/apsislabs/punt).

1. `gem install punt`
1. `punt deploy prod`

### SSH

`ssh -i ~/.ssh/ncallaway-us-west-2.pem bitnami@noah.dev`

WordPress root: `/opt/bitnami/apps/wordpress/htdocs/`
Restart apache: `sudo /opt/bitnami/ctlscript.sh restart apache`

### Cloned from WPEngine Boilerplate
https://github.com/apsislabs/wpengine-boilerplate