Module für OXID eShop-Systeme: Preisalarm deaktivieren
============

Hauptsächlich für die CE-Versionen, es sollte aber keine Probleme in PE/EE-Versionen des Shops bereiten.

Alle Module ohne jegliche Gewähr. Alle über Github abrufbaren Module sind in der jeweiligen Fassung mit der **MIT-Lizenz** freigegeben. Eine separate und/oder parallele Lizensierung wird vorbehalten.

Wenn ihr meine Module einsetzt, wäre ich euch sehr sehr sehr dankbar, ich würde extra dafür eine Liste führen. Sollte jemand mir Feedback geben wollen, so könnt ihr einfach an meine Mailadresse (siehe Github-Profil) eine Nachricht (am Besten mit einem aussagekräftigen Titel bezüglich OXID) schicken.


Solltet ihr eure OXID-Module mittels Grunt/Bower pflegen, so könnt ihr dies nun auch für dieses Modul machen! Einfach entsprechend in den Dependencies mit der entsprechenden Branch-Bezeichnung passend zu eurer Shop-Version aufnehmen:

```
{
    "name": "your-oxid-shop",
    "version": "1.0.0",
    "dependencies": {
        "noPriceAlert": "FibreFoX/oxid-module_noPriceAlert#ce_4.6",
    },
    "private": true
}
```