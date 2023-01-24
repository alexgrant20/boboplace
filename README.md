# BoboPlace
Boboplace adalah website yang menyediakan layanan pemesanan hotel secara online. Pengguna dapat mencari dan memesan berbagai pilihan hotel dengan mudah dan cepat melalui situs ini, dan juga menikmati harga yang kompetitif dan promo menarik. Sistem pemesanan yang aman dan terpercaya membuat proses pemesanan hotel menjadi lebih mudah dan nyaman bagi para pengguna. Boboplace memberikan solusi yang cepat dan efisien bagi Anda yang ingin memesan hotel secara online.

# About Us
Project Member Team:

-  2440027631 - Dicky Hung
-  2440007762 - Francesco Jovan
-  2440027676 - Ghaly Zahirsyah
-  2440106522 - Padmawati Pramita
-  2401960422 - Steven Alexander Grant

# How to run App
## Requirement

- Download [XAMPP](https://www.apachefriends.org/download.html)
- Download [Composer]( https://getcomposer.org/Composer-Setup.exe)
 
## Installation & Setup
1. Clone project dari repository Github 
```sh
git clone https://github.com/alexgrant20/boboplace.git
```
2. Setup Laravel & install npm dependencies
```sh
composer install
npm install
```
3. Copy .env file and fill the credentials as below
```sh
cp .env.example .env
```
| Variable | Description |
| :--- | :--- |
| `DB_DATABASE` | Your database name* |
*You can fill these credentials as u like it

4. Migrate and Seed Database
 ```sh
php artisan migrate:fresh --seed
```

5. Run Vendor
```sh
php artisan vendor:publish --provider="Proengsoft\JsValidation\JsValidationServiceProvider"
```
6. Generate application key
 ```sh
php artisan key:generate
```
7. Run app
```sh
php artisan serve
```
