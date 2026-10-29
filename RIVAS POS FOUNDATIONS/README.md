# POS Foundations — Laravel TFA5

This project completes **IT0049 Web System Technologies — Technical Formative Assessment 5: From Zero to Four Pages, Again: Your First Laravel Application**.

## Required pages

| Page | URL | Laravel implementation |
|---|---|---|
| Landing page | `/` | `PageController::home()` and `home.blade.php` |
| About page | `/about` | `PageController::about()` and `about.blade.php` |
| Customer Accounts | `/customers` | `CustomerController::index()` and `customers.blade.php` |
| User Accounts | `/users` | `UserController::index()` and `users.blade.php` |

Both account controllers contain five sample records in static PHP arrays. The Blade account views use `@foreach` to render those arrays. All four pages include navigation links to one another.

## Run as a normal Laravel project

Requirements: PHP 8.2+, Composer, and Laravel dependencies.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan route:list
php artisan serve
```

Then open `http://127.0.0.1:8000`.

The database files are included for the submission requirement:

- `database/migrations/2026_10_29_000001_create_customers_table.php`
- `database/migrations/2026_10_29_000002_create_pos_users_table.php`
- `database/seeders/DatabaseSeeder.php`

## Upload to InfinityFree

1. Open the InfinityFree File Manager and enter the domain's `htdocs` folder.
2. Upload the contents of this ZIP directly into `htdocs` (the ZIP has `index.php` and `.htaccess` at its top level).
3. Make sure the uploaded folders remain intact: `app`, `bootstrap`, `database`, `public`, `resources`, and `routes`.
4. Visit the InfinityFree domain.

The root `index.php` first attempts to use the normal Laravel entry point if `vendor/autoload.php` is present. If the host does not provide Composer dependencies, the included `public/infinityfree_fallback.php` serves the same four required pages immediately, using the same sample records and URL paths. This makes the package suitable for shared hosting while preserving the complete Laravel source required for the activity.

## Project structure

```text
app/Http/Controllers/        PageController, CustomerController, UserController
database/migrations/         customers and POS users tables
database/seeders/            sample database records
public/                      Laravel entry point and shared-host fallback
resources/views/             Blade layout and four page views
routes/web.php               four required routes
```

## Submission checklist

- [x] `/` landing page
- [x] `/about` page
- [x] `/customers` page
- [x] `/users` page
- [x] Controller for every page group
- [x] At least five static customer records
- [x] At least five static user records
- [x] `@foreach` in both account Blade views
- [x] Navigation links between all pages
- [x] Migrations and database seeder
- [x] README with local and InfinityFree instructions

For the hosted-link portion of the submission, paste the final InfinityFree domain into your course submission after confirming the four URLs work.
