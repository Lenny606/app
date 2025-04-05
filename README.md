##
install using cli
composer global require laravel/installer
laravel new <app-name>


## server 
php artisan serve


## dtb
### php ext
pecl install mongodb
## laravel packege
composer require mongodb/laravel-mongodb:^5.2

## models
php artisan make:model <# Laravel - Instrukce pro instalaci a základní nastavení

## Instalace aplikace Laravel
1. **Nainstalujte Laravel přes příkazovou řádku:**
   ```bash
   composer global require laravel/installer
   ```

2. **Vytvořte novou Laravel aplikaci:**
   ```bash
   laravel new <app-name>
   ```

---

## Spuštění serveru
1. Spusťte vývojový server:
   ```bash
   php artisan serve
   ```

   Aplikace bude standardně dostupná na adrese:
   ```
   http://127.0.0.1:8000
   ```

---

## Práce s databází
### Instalace MongoDB pro Laravel
1. **Nainstalujte rozšíření MongoDB pro PHP:**
   ```bash
   pecl install mongodb
   ```

2. **Přidejte Laravel balíček pro MongoDB:**
   ```bash
   composer require mongodb/laravel-mongodb:^5.2
   ```

---

## Vytvoření modelu
1. **Vytvořte nový model:**
   ```bash
   php artisan make:model <ModelName> -m
   ```

    - Flag `-m` vytvoří zároveň i migraci pro databázi.
    - Migrace jsou pro správu databázových změn.Name> -m

2. **Controller**
```bash
php artisan make:controller PostController --resource 
```
## Auth
``
composer require laravel/ui
php artisan ui bootstrap --auth
``
- package with auth
