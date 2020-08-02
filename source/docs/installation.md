---
title: Installation
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---
#   Installation
<a name="install"></a>

## Install

-   Clone or copying the repository

```bash
git clone git@github.com:team-underground/flowcms.git personalsite
```

-   Change directory to your personal site

```bash
cd personalsite
```

-   Install package dependency

```bash
composer install
```

-   Copy base environment variables

```bash
cp .env.example .env
```

<a name="cms-installation"></a>

## CMS Installation

-   Open your site in the browser
-   While opening, you will be redirected to `/install` path.
-   Provide the necessary details for installion of your personal site.

<a name="default-user"></a>

## Default User

-   After successfull installation FlowCMS will create one default user:

```bash
# Email
yourgiven@email.com
# Password
password
```

>  It is very important that you change the password for the default user immediately after log in

Go to Profile Settings to change password.

>  Please provide the APP_URL correctly so that, the resources like images or files correctly works
