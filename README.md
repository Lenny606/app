# Laravel - Instrukce pro instalaci a základní nastavení

## Instalace Laravelu přes CLI
1. **Globální instalace Laravel instalátoru:**
   ```bash
   composer global require laravel/installer
   ```

2. **Vytvoření nové Laravel aplikace:**
   ```bash
   laravel new <app-name>
   ```

---

## Spuštění serveru
1. Spusťte vestavěný vývojový server Laravel:
   ```bash
   php artisan serve
   ```
   Aplikace bude dostupná na adrese:
   ```
   http://127.0.0.1:8000
   ```

---

## Práce s databází

### Instalace MongoDB pro Laravel
1. **Nainstalujte rozšíření MongoDB pro PHP (přes PECL):**
   ```bash
   pecl install mongodb
   ```

2. **Přidejte balíček Laravel pro MongoDB:**
   ```bash
   composer require mongodb/laravel-mongodb:^5.2
   ```

### Vytvoření symbolického odkazu pro úložiště
Laravel vyžaduje propojení složky `storage` s veřejně dostupnou složkou:
   ```bash
   php artisan storage:link
   ```
### Vytvoření Sanctum
   ```bash
   php artisan install:api
   ```
---

## Práce s modely a controllery
1. **Vytvoření nového modelu:**
   ```bash
   php artisan make:model <ModelName> -m
   ```
    - **Flag `-m`** vytvoří zároveň migraci pro usnadnění změn v databázové struktuře.

2. **Vytvoření nového kontroleru:**
   ```bash
   php artisan make:controller <ControllerName> --resource
   ```
    - Parametr `--resource` vygeneruje kompletní RESTful resource controller.

---

## Ověřování uživatelů (Auth)
1. **Nainstalujte balíček pro uživatelské rozhraní s ověřováním:**
   ```bash
   composer require laravel/ui
   ```

2. **Vytvořte základní autentizační rozhraní s Bootstrapem:**
   ```bash
   php artisan ui bootstrap --auth
   ```
    - Tento příkaz vygeneruje potřebné rozhraní a základní soubory pro autentizaci.

---

## Shrnutí dalších užitečných příkazů
- **Migrace databáze:**
  ```bash
  php artisan migrate
  ```
- **Vyprázdnění a obnovení migrací:**
  ```bash
  php artisan migrate:refresh
  ```
- **Cache konfigurace a složek:**
  ```bash
  php artisan config:cache
  php artisan route:cache
  ```

To je vše, co potřebujete k rychlému rozběhnutí nové aplikace Laravel se základní konfigurací!
