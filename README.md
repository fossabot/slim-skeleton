[![version](https://img.shields.io/badge/Version-1.0-brightgreen.svg)](https://github.com/SimonDevelop/slim-skeleton/releases/tag/1.0)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg)](https://php.net/)
[![Build Status](https://travis-ci.org/SimonDevelop/slim-skeleton.svg?branch=master)](https://travis-ci.org/SimonDevelop/slim-skeleton)
[![GitHub license](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://github.com/SimonDevelop/slim-skeleton/blob/master/LICENSE)
# Slim skeleton

Simple Skeleton `slim 3` avec twig et des middlewares pour la gestion de tokens.

Pour toutes contribution sur github, merci de lire le document [CONTRIBUTING.md](https://github.com/SimonDevelop/slim-skeleton/blob/master/CONTRIBUTING.md).

## Installation

Via composer

``` bash
$ composer create-project simondevelop/slim-skeleton <projet_name>
$ cd <projet_name>
$ composer install
```

## Permissions

Autoriser les dossiers `app/cache` à l'écriture coté serveur web pour le cache de twig si celui-ci est activé.
