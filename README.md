<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Run the page locally:
```
run docker first! follow below step or commands
```
Run sail, -d for detach
```
./vendor/bin/sail up -d
```
Run the docker sail shell
```
./vendor/bin/sail shell
```
After running docker shell, you can use php artisan commands:

This is to make a component
```
php artisan make:component <name of component>
```

This is to make a component for view only, such as buttons and dots or other random components
```
php artisan make:component about-dots --view
```

while doing development, better run this:
```
npm run watch
```

### Some dictionary used in this Tailwind CSS

| Tailwind CSS Settings | Meaning Definition                                               |
|-----------------------|-------------------------------------------------------------------|
| `-mx-4`               | Applies a negative horizontal margin of 1rem to the element.      |
| `bg`                  | Stands for "background"; used to set background color or image properties. |
| `bg-slate`            | Sets the background color to a pre-defined shade of slate.        |
| `block`               | Sets the display property of an element to `block`.               |
| `border-amber-500`    | Sets the border color to a pre-defined shade of amber (amber-500). *Note: The `amber` color is not part of the default Tailwind CSS colors, but can be defined in the configuration file.* |
| `border-l-4`          | Adds a 4-pixel-wide border to the left side of an element.        |
| `border-r-2`          | Adds a 2-pixel-wide border to the right side of an element.       |
| `border-t-2`          | Adds a 2-pixel-wide border to the top side of an element.         |
| `border-b-2`          | Adds a 2-pixel-wide border to the bottom side of an element.      |
| `cursor-pointer`      | Changes the cursor to a pointer when hovering over an element.    |
| `dark`                | Prefix used to apply styles only when dark mode is active.        |
| `flex`                | Enables flex layout for an element, setting its display to `flex`.|
| `flex-wrap`           | Controls how flex items wrap within a flex container.             |
| `font-semibold`       | Sets the font weight of an element to semi-bold.                  |
| `font-bold`           | Sets the font weight of an element to bold.                       |
| `font-light`          | Sets the font weight of an element to light.                      |
| `grid`                | Enables grid layout for an element, setting its display to `grid`.|
| `grid-cols-3`         | Defines a 3-column grid layout for a grid container.              |
| `h-12`                | Sets an element's height to 3rem (48px).                          |
| `hidden`              | Sets the display property of an element to `none`.                |
| `hover:bg-blue-500`   | Changes the background color to a pre-defined shade of blue (blue-500) when hovering over an element. |
| `hover:text-red-500`  | Changes the text color to a pre-defined shade of red (red-500) when hovering over an element. |
| `inline-block`        | Sets the display property of an element to `inline-block`.        |
| `italic`              | Sets the font style of an element to italic.                      |
| `items-center`        | Aligns flex items vertically in the center of a flex container.   |
| `justify-between`     | Distributes flex items evenly along the main axis with equal space between them. |
| `lg`                  | Breakpoint prefix for large screen sizes, typically >=1024px.      |
| `leading-tight`       | Sets the line-height to a tighter value, decreasing the space between lines of text. |
| `md`                  | Breakpoint prefix for medium screen sizes, typically >=768px.      |
| `min-h-screen`        | Sets the minimum height of an element to the height of the viewport. |
| `m-5`                 | Applies a 1.25rem (20px) margin to all sides of an element.       |
| `mb-2`                | Applies a bottom margin of 0.5rem (8px) to an element.            |
| `mt-10`               | Applies a top margin of 2.5rem (40px) to an element.              |
| `overflow-hidden`     | Sets the overflow property to `hidden`, hiding content outside of an element's bounds. |
| `opacity-50`          | Sets the opacity of an element to 50%.                            |
| `p-6`                 | Applies padding of 1.5rem (24px) to all sides of an element.      |
| `px-3`                | Applies horizontal padding of 0.75rem (12px) to an element.       |
| `px-4`                | Applies horizontal padding of 1rem (16px) to an element.          |
| `py-2`                | Applies vertical padding of 0.5rem (8px) to an element.           |
| `rounded-2xl`         | Applies a large border radius (2xl) to an element.                |
| `relative`            | Sets the position property of an element to `relative`.           |
| `sm`                  | Breakpoint prefix for small screen sizes, typically >=640px.       |
| `text-center`         | Aligns text within an element to the center.                      |
| `text-left`           | Aligns text within an element to the left.                        |
| `text-right`          | Aligns text within an element to the right.                       |
| `text-xl`             | Sets the font size of an element to extra-large.                  |
| `text-gray-500`       | Sets the text color to a pre-defined shade of gray (gray-500).    |
| `text-lg`             | Sets the font size of an element to large.                        |
| `text-primary`        | Sets the text color to a predefined primary color. *Note: This class is not part of the default Tailwind CSS classes, but can be defined in the configuration file.* |
| `text-sm`             | Sets the font size of an element to small.                        |
| `uppercase`           | Transforms the text within an element to uppercase.               |
| `w-6/12`              | Sets an element's width to 50% (6/12) of its parent container.    |
| `w-full`              | Sets an element's width to 100% of its parent container.          |
| `xl`                  | Breakpoint prefix for extra-large screen sizes                    |
| `z-10`                | Sets the z-index of an element to 10.                             |

### Frequently Used Tailwind CSS Settings

| Tailwind CSS Settings | Meaning Definition                                               |
|-----------------------|-------------------------------------------------------------------|
| `container`           | Centers an element and sets its max-width based on screen size.   |
| `mx-auto`             | Centers an element horizontally by applying equal left and right margins (`auto`). |
| `text-center`         | Centers text within an element.                                   |
| `font-bold`           | Sets the font weight of an element to bold.                       |
| `uppercase`           | Transforms the text inside an element to uppercase.               |
| `tracking-wide`       | Increases the letter-spacing of an element.                       |
| `leading-none`        | Sets the line-height of an element to 1.                          |
| `border`              | Adds a border to an element.                                      |
| `border-t`            | Adds a border to the top side of an element.                      |
| `border-b`            | Adds a border to the bottom side of an element.                   |
| `border-r`            | Adds a border to the right side of an element.                   |
| `border-l`            | Adds a border to the left side of an element.                    |
| `border-none`         | Removes all borders from an element.                              |
| `shadow`              | Applies a subtle drop-shadow to an element.                       |
| `shadow-lg`           | Applies a large drop-shadow to an element.                        |
| `shadow-none`         | Removes any drop-shadow from an element.                          |
| `opacity-50`          | Sets the opacity of an element to 50%.                            |
| `cursor-pointer`      | Changes the cursor to a pointer when hovering over an element.    |
| `hover:bg-blue-500`   | Changes the background color to blue-500 when an element is hovered. |
| `focus:outline-none`  | Removes the default outline when an element is focused.           |




# More Tailwind CSS Settings

This table describes some important Tailwind CSS settings and their meanings:

| Setting Name | Meaning Definition |
|--------------|--------------------|
| `theme`      | The `theme` setting is used to customize the default styles provided by Tailwind CSS, such as colors, fonts, and spacing. You can modify these values or add your custom styles to better match your project's design. |
| `variants`   | The `variants` setting allows you to control which CSS properties can be used with different pseudo-classes like `hover`, `focus`, and `active`. By customizing this setting, you can enable or disable specific variants for each utility. |
| `plugins`    | The `plugins` setting is used to extend Tailwind CSS with additional functionality. You can include third-party plugins or create your own to add custom utility classes and components to your project. |
| `purge`      | The `purge` setting is used to optimize the final CSS output by removing unused styles from your production build. By specifying the paths to your HTML, JS, or template files, Tailwind CSS can analyze the usage of the utility classes and remove those that aren't used in your project. |
| `screens`    | The `screens` setting allows you to define custom breakpoints for your project. These breakpoints can be used to create responsive designs and apply styles based on the screen size or device type. |
| `separator`  | The `separator` setting defines the character used to separate modifiers from their base classes. By default, Tailwind CSS uses a colon (`:`), but you can change this if it conflicts with your project's syntax or preferences. |

For more information about configuring Tailwind CSS, please refer to the [official documentation](https://tailwindcss.com/docs/configuration).



