---
title: Installation
description: Installation steps for flowcms
extends: _layouts.documentation
section: content
---

# Installation Steps

<a name="require-the-package"></a>

### Require the Package

After creating your new Laravel application you can include the Flowcms package with the following command:

```php
composer require flowcms/flowcms
```

<a name="add-credentials"></a>

### Add the DB Credentials & APP_URL

Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

You will also want to update your website URL inside of the APP_URL variable inside the .env file:

```
APP_URL=http://localhost:8000
```

Update the `FILESYSTEM_DRIVER` variable inside the .env file to public, so that media manager works correctly:

```
FILESYSTEM_DRIVER=public
```

<a name="run-the-installer"></a>

### Run The Installer

```
php artisan flowcms:install
```

And we're all good to go!

Start up a local development server with `php artisan serve` And, visit http://localhost:8000/.

<a name="logging-in"></a>

### Logging in to the Admin Panel

A user should have been created for you with the following login credentials. You can access the panel by hitting `/login` in the url:

```
email: admin@admin.com  
password: password
```

> **NOTE:** Please ensure to change the password immediately after the first login.
