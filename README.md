<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## PROJECTO MICOLE

1. Clonar el projecto

2. Copiar el archivo .env.example y renombrarlo a .env

3. Instalar los paquetes

```
composer install
```

4. Agregar en el archivo .env los datos de acceso a la db

```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

5. Ejecutar el comando para correr las migraciones

```
php artisan make:migrate
```

6. Ejecutar el comando para correr el SEED

```
php artisan db:seed --class=UserSeeder
```
