# WordPress Project Skeleton

### Description

[Innocode](https://innocode.com/) starter code for a WordPress project.

### Install

There are few possible options to use this skeleton:

- Create new project with [Composer](https://getcomposer.org/):
    ```
    composer create-project innocode-digital/wp-project-skeleton
    ```

- Create new project on [GitHub](https://github.com/) from
[this template](https://github.com/innocode-digital/wp-project-skeleton).

- Alternative way is to clone this repo:
    ```
    git clone git@github.com:innocode-digital/wp-project-skeleton.git <name>
    ```
  
Find `@TODO: ...` in code and replace with needed settings. 
  
### Documentation

#### Install plugins, mu-plugins, PHP packages

Manage dependencies with Composer. To install e.g. plugins use:

```
composer require innocode-digital/wp-hybrid-lazy-loading
composer require innocode-digital/wp-crontrol
```

#### Update WordPress core, plugins, mu-plugins, PHP packages

All updates should be done through Composer. To update e.g.
WordPress core use:

```
composer update johnpbloch/wordpress
```

To update all dependencies (core, plugins, PHP packages):

```
composer update
```

Normally project should be initialized with new `.env` file after `create-project` command
but if it was not created or other method was used to create project
then it's possible to initialize `.env` with next command:

```
composer run-script wp-init
```

To install [wp-theme-skeleton](https://github.com/innocode-digital/wp-theme-skeleton) run:

```
composer run-script wp-scaffold-theme <slug>
composer dump-autoload
```

If you want to install some theme as dependency then remember
to add it to `.gitignore`.

### Caveats

**Install premium extensions from metabox.io**

See documentation [metabox.io](https://docs.metabox.io/extensions/composer/) on how to do it in general. 
Keep in mind that storing of the API Key in project `composer.json` is not a good idea, since 
it could be situation that project will be taken by someone else, so the API Key may be accidentally
shared. To add private source to `repositories`, you can add it in global config with the following command 
`composer config repositories.metabox\.io composer https://packages.metabox.io/<API Key> --global` or edit 
`$HOME/.composer/config.json` manually:

```
{
    "config": {},
    "repositories": {
        "metabox.io": {
            "type": "composer",
            "url": "https://packages.metabox.io/<API Key>"
        }
    }
}
```

Then it should be possible to add extensions to project:

```
composer require meta-box/meta-box-group:dev-master
```