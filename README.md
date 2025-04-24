[![LinkedIn](https://custom-icon-badges.demolab.com/badge/LinkedIn-0A66C2?logo=linkedin-white&logoColor=fff)](https://www.linkedin.com/in/tia-septiana-widi/)
[![Gmail](https://img.shields.io/badge/Gmail-D14836?logo=gmail&logoColor=white)](mailto:tia.septianawidi@gmail.com)

# Laravel Online Store

Web application where users place orders to buy products with Laravel, contains hands-on projects and exercises completed while studying **_[Practical Laravel – Develop Clean MVC Web Applications (Daniel Correa & Paola Vallejo)](https://www.amazon.com/Practical-Laravel-Develop-clean-applications/dp/B09S69MHRB)_**.

It showcases practical implementation of Laravel features including routing, controllers, Eloquent ORM, Blade templating, form handling, validation, and more. Ideal for reinforcing foundational Laravel skills and MVC application structure.

## Features / Application Scope

|                      |                                                                                                                                                  |
| -------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------ |
| **_Home Page_**      | Display a welcome message and some images.                                                                                                       |
| **_About Page_**     | Display information about the online store and developers.                                                                                       |
| **_Product Page_**   | Display the availale products information. In adition, can click on a specific product and see information.                                      |
| **_Cart Page_**      | Display the products added to the cart and the total price to be paid. In addition, a user can remove products from the cart and make purchases. |
| **_Login Page_**     | Display a from to allow users to log in to the application.                                                                                      |
| **_Register Page_**  | Display a form to allow users to sign up for accounts.                                                                                           |
| **_My Orders Page_** | Display the orders placed by the logged in user.                                                                                                 |
| **_Admin Panel_**    | Contain sections to manage stores's products (create, update, delete and list them).                                                             |

## Tech Stack

[![Composer](https://img.shields.io/badge/Composer-885630?logo=composer&logoColor=fff)](#)
[![Laravel](https://img.shields.io/badge/Laravel-%23FF2D20.svg?logo=laravel&logoColor=white)](#)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=fff)](#)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=fff)](#)

## Installation

1. Clone the repository

    ```bash
    git clode https://github.com/AankTia/laravel-online-store.git
    ```

2. Navigate into the directory

    ```bash
    cd laravel-online-store
    ```

3. Install dependencies

    ```bash
    composer install
    ```

    > Make sure you have **_PHP (>=8.1)_** and composer installed
    > If not installed, you can see link bellow for install:
    >
    > - [PHP - Instalation and Configuration](https://www.php.net/manual/en/install.php)
    > - [Download Composer](https://getcomposer.org/download/)

4. Copy and configure `.env`

    ```bash
    cp .env.example .env
    ```

    Edit the `.env` file with your configuration:

    ```env
    DB_HOST=your_database_host
    DB_PORT=your_database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

5. Generate application key

    ```bash
    php artisan key:generate
    ```

6. Run migrations

    ```bash
    php artisan migrate
    ```

7. Create a symbolic link

    Create a symbolic link from the `public/storage` directory to the `storage/app/public` directory (for uploads product images).

    ```bash
    php artisan storage:link
    ```

8. Serve the App (for local dev)

    ```bash
    php artisan serve
    ```
