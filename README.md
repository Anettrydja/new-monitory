
# MONITORY demo versioon
### Veebilehtede, serverite, rakenduste haldamine

Rakenduse koostajad: Anett Rüdja, Gaspar Luik, Liisa Mikola, Lisanne Järv 

## Lühikirjeldus
Tallinna Ülikoolil on väga mitmeid servereid, rakendusi ning veebilehti, mida kasutatakse igapäevaselt töö tegemisel. Meie rakendus proovib lihtsustada seda protsessi tuues kõik info kokku ühte veebirakendusse. Eesmärgiks on muuta tööelu kiiremaks, lihtsamaks ja mugavamaks st lihtsustada rakenduste, serverite, veebilehtede igapäevast haldamist.

## Projekt
Projekt on loodud Tallinna Ülikooli, Informaatika BA eriala, Suvepraktika aine raames. Projekti alustasime juba aasta alguses Sissejuhatus Infosüsteemidesse ja Interaktsioonidisaini aines, mis valmistas meid ette suvepraktikaks.


### Versioonid, mis on hetkel kasutuses rakenduses:

PHP 8.0.7

Laravel 8

Composer 2.1.3

Mysql  8.0.25

XAMPP 8.0.7 (Serverite haldamiseks ja andmebaasi nägemiseks)

Apache Web Server


## Installeerimine
Lae alla [XAMPP](https://www.apachefriends.org/download.html).
Käivita XAMPP, ühenda mysql andmebaas ja mine localhost/phpmyadmin, seal tee uus andmebaas nimega Monitory . Kopeeri järgneva faili sisu SQLi kohale.

Palun vaadake [Laraveli dokumentatsiooni](https://laravel.com/docs/8.x) installeerimiseks, kui teil veel ei ole seda. Installeerida on võimalik läbi Composer'i või Docker'i, meie kasutasime Composer'it. Kuidas composer [alla laadida](https://getcomposer.org/download/) või jooksuta järgmine käsk failide kaustas läbi terminali.
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
Seejärel kui vaja jooksutage järgmised käsud.
```
composer require laravel/installer
composer require laravel/ui
```
```
php artisan ui bootstrap
```
Seejärel kopeeri antud käsklus npm install && npm run dev
```
npm install && npm run dev
```



SQL Create lause: 
[Monitory_create.txt](https://github.com/Anettrydja/new-monitory/files/6661736/Monitory_create.txt)

Võta lahti failid, otsi .env fail ja muuda ära DB_NAME oma andmebaasi nimeks (meie puhul Monitory). Kui vaja muuda ka PORT ja muud väljad. Mine Public/config/database.php ja vajadusel muuda ka seal andmebaasi andmed (mysql oma).
Et näha oma veebilehte, jooksuta järgmine käsk. Seejärel näed oma veebiserveri aadressil nt aadress/home
```
php artisan serve
```


## License
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/Anettrydja/new-monitory/blob/main/LICENSE)

