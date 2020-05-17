# Shareboard

Project is result of practice after watching the course of Object Oriented PHP.

## How to install

1. Rename the file `config.php.sample` to `config.php`.
2. Added to fields your parameters.
3. Open your domain in a browser.

## Nginx config

Add the string below to `location /`:<br/>
`rewrite ^/([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ /index.php?controller=$1&action=$2&id=$3;`

## Apache config

You don't need change anything because I've added the `.htaccess` file to the project.