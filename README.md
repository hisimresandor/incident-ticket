## A projekt telepítése
### 1. lépés: a repository clone-olása
A projekt tárolására szánt mappában futtassa az alábbi parancsot:
```
git clone https://github.com/hisimresandor/incident-ticket.git
```

### 2. lépés: belépés a projekt mappájába
Futtassa az alábbi parancsot:
```
cd incident-ticket
```

### 3. lépés: a függőségek telepítése
Futtassa az alábbi parancsokat:
```
composer install
```

```
npm install
```

### 4. lépés: adatbázis létrehozása
Hozzon létre egy adatbázist, ahol a projekt tábláit fogja tárolni.

### 5. lépés: a .env fájl beállítása
Másolja le a .env.example fájlt. A fájl-t nevezze el .env-ként, majd adja meg a szükséges beállításokat.

Futtassa az alábbi parancsot:
```
php artisan key:generate
```

### 6. lépés: adatbázis feltöltése
Futtassa az alábbi parancsot:
```
php artisan migrate
```