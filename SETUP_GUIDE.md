# TST White House — Laravel Project Setup Guide

## Project Overview

**Company:** TST White House Ltd.
**Stack:** Laravel 10 · PHP 8.1+ · Vanilla CSS · Vanilla JS
**Pages:** Home · About · Products (index + 5 sub-pages) · Quality · Partnership · Contact
**Total Files:** ~30+ files

---

## Prerequisites

Make sure the following are installed on your system:

| Tool       | Required Version | Check Command         |
|------------|------------------|-----------------------|
| PHP        | 8.1 or higher    | `php --version`       |
| Composer   | 2.x              | `composer --version`  |
| MySQL      | 5.7+ or 8.0      | `mysql --version`     |
| Node.js    | 16+ (optional)   | `node --version`      |
| Git        | any              | `git --version`       |

---

## Step 1 — Extract the Project

```bash
# Unzip the downloaded file
unzip tst-whitehouse-laravel.zip -d tst-whitehouse

# Enter the project folder
cd tst-whitehouse
```

---

## Step 2 — Install PHP Dependencies

```bash
composer install
```

This downloads Laravel framework and all required packages into the `vendor/` folder.
> Takes 1–3 minutes depending on your internet speed.

---

## Step 3 — Environment Configuration

```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

Now open `.env` in any text editor and configure:

```env
APP_NAME="TST White House"
APP_URL=http://localhost:8000

# Database (if using MySQL)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tst_whitehouse
DB_USERNAME=root
DB_PASSWORD=your_password_here

# Mail (for contact form — optional to configure now)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@tstwhitehouseltd.com
MAIL_FROM_NAME="TST White House"
```

---

## Step 4 — Database Setup

### Create the database
```sql
-- In MySQL client or phpMyAdmin:
CREATE DATABASE tst_whitehouse CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### Run migrations
```bash
php artisan migrate
```

> The website works without a database (all data is in controllers). The DB is only needed for future features like contact form logging.

---

## Step 5 — Storage Link

```bash
php artisan storage:link
```

This creates the `public/storage` symlink for file uploads.

---

## Step 6 — Start the Development Server

```bash
php artisan serve
```

Open your browser and go to: **http://localhost:8000**

---

## All Pages & URLs

| Page                     | URL                          | Controller Method          |
|--------------------------|------------------------------|----------------------------|
| Home                     | `/`                          | HomeController@index       |
| About Us                 | `/about`                     | AboutController@index      |
| Products (all)           | `/products`                  | ProductController@index    |
| Sugar Trading            | `/products/sugar`            | ProductController@sugar    |
| Edible Oils              | `/products/edible-oils`      | ProductController@oils     |
| Lentils                  | `/products/lentils`          | ProductController@lentils  |
| Salt                     | `/products/salt`             | ProductController@salt     |
| Construction Materials   | `/products/construction`     | ProductController@construction |
| Quality Assurance        | `/quality`                   | QualityController@index    |
| Partnership (SKS JV)     | `/partnership`               | PartnershipController@index|
| Contact                  | `/contact`                   | ContactController@index    |
| Contact (POST)           | `/contact` (POST)            | ContactController@submit   |

---

## File Structure

```
tst-whitehouse/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── AboutController.php
│   │   ├── ProductController.php      ← handles all 5 product sub-pages
│   │   ├── QualityController.php
│   │   ├── PartnershipController.php
│   │   └── ContactController.php
│   └── Providers/
│       └── AppServiceProvider.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php          ← main layout (navbar + footer)
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── footer.blade.php
│       │   └── page-hero.blade.php    ← reusable page banner component
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── quality.blade.php
│           ├── partnership.blade.php
│           ├── contact.blade.php
│           └── products/
│               ├── index.blade.php
│               ├── sugar.blade.php
│               ├── oils.blade.php
│               ├── lentils.blade.php
│               ├── salt.blade.php
│               └── construction.blade.php
├── routes/
│   └── web.php
├── public/
│   ├── css/
│   │   └── app.css                    ← all styles (no build step needed)
│   ├── js/
│   │   └── app.js                     ← all JS (no build step needed)
│   ├── index.php
│   └── .htaccess
├── .env.example
├── composer.json
└── artisan
```

---

## Design System (Branding)

### Colors (matching PDF exactly)
```css
--green-dark:   #1a5c35    /* Primary brand green */
--green-mid:    #2e7d4f    /* Hover / accent green */
--green-light:  #e8f5ec    /* Light green backgrounds */
--orange:       #e07b00    /* Primary accent orange */
--orange-light: #f0a020    /* Lighter orange */
--orange-pale:  #fff3e0    /* Orange tint background */
--white:        #ffffff    /* Page background */
--off-white:    #f7f9f7    /* Section alternating background */
```

### Fonts (matching PDF exactly)
- **Headings:** Playfair Display (700, 800, 900)
- **Body:** Nunito Sans (400, 600, 700, 800)
- Loaded from Google Fonts (no installation needed)

---

## Deploying to Apache/Nginx Shared Hosting

### Apache (cPanel / shared hosting)

1. Upload all files to `public_html/` or a subdomain folder
2. Move contents of `public/` to the root, or configure:

```apache
# In .htaccess at root:
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

3. Set document root to `public/` in your hosting panel
4. Set folder permissions:
```bash
chmod -R 755 storage bootstrap/cache
```

### Nginx

```nginx
server {
    listen 80;
    server_name tstwhitehouseltd.com www.tstwhitehouseltd.com;
    root /var/www/tst-whitehouse/public;

    index index.php;
    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Production .env settings
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tstwhitehouseltd.com
```

### Cache for production
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Adding Contact Form Email

In `ContactController.php`, the `submit()` method is ready. To enable actual email sending:

1. Configure `MAIL_*` values in `.env`
2. Create a Mailable:
```bash
php artisan make:mail ContactMail
```
3. In `app/Mail/ContactMail.php`, build your email template
4. Uncomment in `ContactController@submit`:
```php
Mail::to('info@tstwhitehouseltd.com')->send(new ContactMail($validated));
```

---

## Adding New Products or Content

All content is in the controller files. For example, to add a new sugar variety:

**File:** `app/Http/Controllers/ProductController.php`

```php
// In the sugar() method, add to $varieties array:
['name' => 'Demerara Sugar', 'grade' => 'ICUMSA 1200', 'icon' => '✨',
 'desc' => 'Coarse golden sugar with distinctive crunch.', 'origin' => 'Guyana'],
```

No database changes needed — content is controller-driven.

---

## Troubleshooting

| Problem                          | Solution                                              |
|----------------------------------|-------------------------------------------------------|
| `Class not found` error          | Run `composer dump-autoload`                         |
| CSS/JS not loading               | Run `php artisan storage:link` and clear cache       |
| 500 Server Error                 | Check `.env` file exists and `APP_KEY` is set        |
| Permission denied (storage)      | `chmod -R 775 storage bootstrap/cache`               |
| Views not updating               | `php artisan view:clear`                             |
| Routes not found                 | `php artisan route:clear && php artisan route:cache` |
| Blank page on Apache             | Enable `mod_rewrite` and check `.htaccess`           |

---

## Quick Commands Reference

```bash
# Start development server
php artisan serve

# Clear all caches
php artisan optimize:clear

# List all routes
php artisan route:list

# Cache for production
php artisan optimize

# Check app status
php artisan about
```

---

## Support

**TST White House Ltd.**
- 📍 H-12/A, Road-110, Gulshan 2, Dhaka-1212, Bangladesh
- 📞 +88 01894 70 99 95
- ✉️ info@tstwhitehouseltd.com
- 🌐 www.tstwhitehouseltd.com
