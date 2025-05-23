# Notes

Practical Laravel - Develop clean MVC web applications by Daniel Correa – Paola Vallejo

## Chapter 01 – Introduction

## Chapter 02 – Online Store Running Example

Web application where users place orders to buy products.

Application scope:

-   **_Home Page_**

    Display a welcome message and some images.

-   **_About Page_**

    Display information about the online store and developers.

-   **_Product Page_**

    Display the availale products information. In adition, can click on a specific product and see information.

-   **_Cart Page_**

    Display the products added to the cart and the total price to be paid. In addition, a user can remove products from the cart and make purchases.

-   **_Login Page_**

    Display a from to allow users to log in to the application.

-   **_Register Page_**

    Display a form to allow users to sign up for accounts.

-   **_My Orders Page_**

    Display the orders placed by the logged in user.

-   **_Admin Panel_**

    Contain sections to manage stores's products (create, update, delete and list them).

The Online Store implemented with:

-   Laravel (PHP)
-   MySQL Database
-   Bootstrap (CSS framework)
-   Blade (a Laravel templating system)

---

## Chapter 03 – Introduction to Laravel and Installation

### Laravel Project Structure

|                          |                                                                                                                                                                                                                                               |
| ------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **app/Http/Controllers** | Place the app controllers                                                                                                                                                                                                                     |
| **app/Models**           | Place the app models                                                                                                                                                                                                                          |
| **database/migrations**  | Place for app's database schema definition                                                                                                                                                                                                    |
| **public/\***            | Place for CSS, Javacript, and images file. Also contaiins he `index.php` file, which is the entry point to the application                                                                                                                    |
| **resources/views/\***   | Place for app views.                                                                                                                                                                                                                          |
| **routes/web.php**       | Contain all the route definitions for the web application.                                                                                                                                                                                    |
| **storage/app/public**   | Place for store the user-generated files, such as product images, that should be publicly accessible                                                                                                                                          |
| **vendor/\***            | Contains all libraries downloaded from Composer. The libraries/dependencies are listed in the `composer.json` file.                                                                                                                           |
| **.env**                 | Contains some common fonfiguration values that may differ based on whether application is running locally or on production web server. It includes information such as database name, database username, and database password, among others. |
| **composer.json**        | Holds metadata relevant to the project and manages he project's dependencies, script, version, and many more                                                                                                                                  |

---

## Chapter 04 – Introduction to MVC applications

**Model-View-Controller (MVC)** is a software architectureal pattern commonly used to develop web applications containing user interfaces.

This pattern divides the application into three interconnected elements:

-   **_Model_**

    Contains the business logic of the application.

    For example, the Online Store application product data and its functions.

-   **_View_**

    Contains the application's user interfacse.

    For example, a view to register products or users.

-   **_Controller_**

    Acts as an interface between model and view elements.

    For example, a product controller collects information a _create product_ view and pass it to the product model to be stored in the database.

---

## Chapter 05 – Layout View

### Blade

**Blade** is templating engine that is included with Laravel. Blade template file use the `.blade.php` file extension and are typically stored in the `resources/views` directory.

In blade file, we will have a mix of HTML code with Blade directives and Blade elements. Blade directives are convienment shortcut for common PHP control structures, such as conditional statements and loops.

For example, the following code shows an excerpt of a simple view in Laravel using plain PHP:

```php
<?php if($records >0) { ?>
    I have records!
<?php } else { ?>
    I dont have any records!
<?php } ?>
```

The same view, but with Blade directives:

```php
@if(count($records) > 0)
    I have records!
@else
    I dont have any records!
@endif
```

---

## Chapter 06 – Index and About Pages

## Laravel Routing

Laravel routing is a mechanism used to route all application requests to specific methods of functions which will deal with those specific requests. Laravel routes accept a URI _(Uniform Resource Identifier)_ along with a closure. Closures are PHP's version of anonymous functions. A closure is a function can pass around as an object, assign to a variable, or pass a parameter to other functions and methods.

Laravel routes are defined in route file (located in the _routes_ directory).

-   **_rutes/web.php_** -- Defines routes for web interface.
-   **_routes/api.php_** -- Define routes for API.

---

## Chapter 07 – Refactoring Index and About Pages

...

---

## Chapter 08 – Use of a Coding Standard

...

A **Coding standard** is a set of rules and agreements used when writing source code in a particular programming language. Using a coding standard provides some adventages, such as:

-   It gives a uniform appearance to the code written by different programmers.
-   It improves the readability and mantainability of the code and reduce complexity.
-   It helps in code and helps to detect errors easily.
-   It promotes good rogramming practice and increases the eddiciency of the programmers.

One of the most used PHP coding standards is _[PSR-2](https://www.php-fig.org/psr/psr-2/)_. It is a standard established by PHP-FIG (PHP Framework Interop Group).

Some tools help programmers to automatically check their code against these coding standard.

### `PHP_CodeSniffer`

[`PHP_CodeSniffer`](https://github.com/squizlabs/PHP_CodeSniffer) is a set of two PHP scripts:

-   The `phpcs` script tokenizea PHP, Javascript, and CSS file to detect violations based on a defined coding standard.
-   The `phpcbf` script automatically corrects coding standard violations.

[`PHP_CodeSniffer`](https://github.com/squizlabs/PHP_CodeSniffer) is an essential development tool that ensures our code remains clean and consistent.

#### Installing `PHP_CodeSniffer`

```bash
composer require --dev squizlabs/php_codesniffer
```

#### Configuring `PHP_CodeSniffer`

Create a new file with name `phpcs.xml`:

```xml
<?xml version="1.0"?>
<ruleset name="PHP_CodeSniffer">
    <description>The coding standard for the Online Store project</description>
    <rule ref="PSR2"/>
    <file>app/</file>
    <file>config/</file>
    <file>database/</file>
    <file>routes/</file>
    <exclude-pattern>*/migrations/*</exclude-pattern>
</ruleset>
```

#### Running `PHP_CodeSniffer`

```bash
./vendor/bin/phpcs
```

Ti automatically fix it, execute PHP_CodeSniffer `phpcbf`

```bash
./vendor/bin/phpcbf
```

---

## Chapter 09 – List Products with Dummy Data

...

---

## Chapter 10 – Configuration of MySQL 

...

---

## Chapter 11 – Product Migration

### Product migration

Create Product Migration:

```bash
php artisan make:migration create_products_table
```

Execute the migrations

```bash
php artisan migrate
```

---

## Chapter 12 – Product Model

### Eloquent

**Eloquent** is a Laravel object-relation mapper (ORM) that makes it easy to interact with database. When using Eloquent, each database table corresponding _Model_ used to interact with the table. Eloquent models allow to insert, retrieve, update, and delete records from the database table.

### Creating Product Model

```bash
php artisan make:model Product
```

---

## Chapter 13 – List Products with Database Data

...

---

## Chapter 14 – Refactoring List Products

...

---

## Chapter 15 – Admin Panel

...

---

## Chapter 16 – List Products in Admin Panel

...

---

## Chapter 17 – Create Products

...

---

## Chapter 18 – Create Products with Images

### Laravel `Storage`

Laravel provides a class called _Storage_. This class contains a set of methods which allow creating, deleting, and moving files and directories. It also defining the kind of disk we want interact with (i.e., local disk or Amazon S3)

To make file accessible from the web, we must create a _symbolic link_ from `public/storage` to `storage/app/public`, with execute:

```bash
php artisan storage:link
```

---

## Chapter 19 – Edit and Delete Products

...

---

## Chapter 20 – Refactoring Validations

...

---

## Chapter 21 – Login System

### Laravel Authentication System

Laravel `6.*` and `7.0` provided an oficial authentication system called _[laravel/ui](https://laravel.com/docs/7.x/authentication)_. `laravel_ui` is a straighforward authentication system build on the Boostrap CSS framework. This library wa created by Y=Taylor Otwell (the creator of Laravel). Later, thhis library provided support to create an authentication system with Vue and React. However, `laravel_ui` is no longer the official authentication system for Laravel `8.*` and `9.*`.

Laravel `9.*` have three official authentication system:

- **Breese**

    Is a simple authentication system based on Blade template style with Tailwind CSS.

- **Breeze & Inertia**

    Breeze also offers an `Inertia.js` frontend implemented powered by Vue or React.

- **Jetstream**

    Augments functionalities with more robust features and additional frontend technology stacks. Jetsream designed using Tailwind CDD and offers your choice of Livewire or Inertia.js driven frontend scaffolding

### Installing `laravel/ui`

```bash
composer require laravel/ui
```

We also need to generate the frontent scaffolding and the login system, with command:

```bash
php artisan ui bootstrap --auth
```

---

## Chapter 22 – Refactoring User

### Laravel Tinker

Laravel **_Tinker_** is a REPL (Read-Eval-Print Loop) for the Laravel framework. Tinker allows you to interact with your Laravel application on the command line.

To use Laravel Tinker, in the terminal go to the prohect directory, and execute the following:

```bash
php artisan tinker
```

---

## Chapter 23 – AdminAuthMiddleware

### Laravel Middleware

Laravel moddleware provides a convenient mechanism for inspecting adn filtering HTTP request entering your application.

For example, Laravel includes a middleware that verifies your application's user is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's logi screen. However. id the user is authenticated. the middleware will alow the request to proceed further into the application. Additional middleware can be written to perform a setof tasks besides authentication. For example, a logging middleware mogh log all incoming request to your application

To create a new middleware, in the Terminal, go to the project directory, and execute:

```bash
php artisan make:middleware MiddlewareName
```

For example, create a middleware to verify that only admin users:

```bash
php artisan make:middleware AdminAuthMiddleware
```

After created middleware, we will need to register middleware in our application's.

[Laravel 12 - Registerig Middleware](https://laravel.com/docs/12.x/middleware#registering-middleware)


---

## Chapter 24 – Introduction to Web Session

...

---

## Chapter 25 – Shopping Cart

...

---

## Chapter 26 – Orders and Items

...

---

## Chapter 27 – Product Purchase

...

---

## Chapter 28 – Orders Page

### Lazy loading and eager loading

The use Eloquent relationship has a silent cost. The related models are **_lazy loaded_** when we access Eloquent relationships as attributes. It means the ralationship data is not loaded untul you first access the attribute. It presents an important issue. lazy loading affect application performance.

Fortunetaly, Eloquent can reduce the number of queries and **_eager load_** relationships using the `with` method.

### Debugging our application queries

**_[Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)_** library allows us to debug aur Laravel application
---

## Chapter 29 – Deploying to the Cloud – Clever-Cloud – MySQL Database

## Chapter 30 – Deploying to the Cloud – Heroku – Laravel Application

## Chapter 31 – Continue your Laravel Journey
