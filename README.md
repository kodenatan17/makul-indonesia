
Makul Indonesia

Project untuk PT Maku Indonesia yang bergerak dibidang penjualan minuman di Indonesia, dengan adanya project ini diharapkan dapat membantu masyarakat untuk dapat membuat Toko dan Mengembangkan Usahanya.


## Features

- CMS Laravel
- Full Responsive
- Midtrans Payment
- Full REST API


## Authors

- [@kodenatan17](https://www.github.com/kodenatan17)


## Installation

Install Composer

```bash
  composer install
```

Copy .env.example to .env

```bash
  .env.example => .env
```

Make database

```bash
  name database: makulindonesia
```

Setting database .env

```bash
  DB_PORT=3306
  DB_DATABASE=makulindonesia
  DB_USERNAME=root
  DB_PASSWORD=
```
Setting your Midtrans API on .env
```bash
  MIDTRANS_SERVER_KEY="#####" (your key)
  MIDTRANS_CLIENT_KEY="#####" (your key)
  MIDTRANS_IS_PRODUCTION=true
  MIDTRANS_IS_SANITIZED=true
  MIDTRANS_IS_3DS=true
```

Buat Storage link

```bash
  php artisan storage:link
```

Run Serve

```bash
  php artisan serve
```
