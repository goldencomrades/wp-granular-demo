# WP Granular Demo

[![Build Status](https://travis-ci.org/goldencomrades/wp-granular-demo.svg?branch=master)](https://travis-ci.org/goldencomrades/wp-granular-demo)
[![codecov](https://codecov.io/gh/goldencomrades/wp-granular-demo/branch/master/graph/badge.svg)](https://codecov.io/gh/goldencomrades/wp-granular-demo)

Sample plugin using WP Granular approch.

## Get started

Type the follow commands on project terminal
```bash
$ docker-compose run --rm composer install
```
```bash
$ docker-compose up -d
```

You are ready to:
1. Visit `http://localhost:8888`
2. Follow WordPress installation
3. Go to plugins menu than activate `WP Granular Demo`

## Testing

Type the follow command on project terminal
```bash
$ docker-compose run --rm phpunit test
```
