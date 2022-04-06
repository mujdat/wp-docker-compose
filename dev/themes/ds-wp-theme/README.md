# Docker Starter WordPress Theme

A WP theme for setting up new projects with Docker Compose.

## Features / Integrations

- [Timber Library](https://timber.github.io/docs)
- [Advanced Custom Fields Pro](https://www.advancedcustomfields.com)
- [Alpine.js](https://github.com/alpinejs/alpine)
- [TailwindCSS](https://tailwindcss.com)
- [SVG Inject](https://github.com/iconfu/svg-inject)

## Must Use Plugins

The following plugins are integrated as Must Use Plugins.

- ACF Pro
- Timber Library

## Setup & Development

```bash
# Tnstall all dependencies and set up necessary tools
$ yarn install

# Start development server and watch styles/scripts
$ yarn dev

# Compile, lint and format project for production
$ yarn prod
```

## Flexible Content with ACF and Timber/Twig

We use Timber Library/Twig as a template engine within this starter. To get it handy working with the ACF Flexbile Content Module there is a `module-loader.twig` file which automatically loads all ACF modules in the folder `/modules`.

page-modules.php

```php
$context = Timber::get_context();
$context['page'] = new Timber\Post();
$context['layout'] = get_field('modules');
Timber::render('module-loader.twig', $context);
```

module-loader.twig

```twig
{% if layout is not empty %}
    {% for module in layout %}
        {% include 'modules/' ~ module.acf_fc_layout ~ '.twig' ignore missing %}
    {% endfor %}
{% endif %}
```

## Naming Convention for Modules

The name of a module has to match with the name of the ACF. As an example, in order to add the markup for a layout called Contact Module with the id contact-module in a flexbile content field the matching twig file has to be named `contact-module`.
