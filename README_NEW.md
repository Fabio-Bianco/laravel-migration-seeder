# laravel-migration-seeder

Questo progetto nasce come esercizio per imparare a modellare la struttura dei database tramite le **Migrations** di Laravel.

## Stack Tecnologico

- **Laravel** come framework backend.
- **Tailwind CSS** per la gestione dello stile.
- **DaisyUI** come framework di componenti UI, scelto per la sua flessibilità e semplicità rispetto a soluzioni come Bootstrap.
- **Font consigliato:** Share Tech Mono per lo stile del tabellone treni.

## Argomenti trattati

- Creazione e gestione delle **Migrations** per la definizione delle tabelle.
- Modellazione della tabella `trains` con i seguenti campi:
  - Azienda
  - Stazione di partenza
  - Stazione di arrivo
  - Orario di partenza
  - Orario di arrivo
  - Codice Treno
  - Totale Carrozze
  - Stato (in orario/cancellato)
  - Altre colonne utili per la gestione dei dati
- Popolamento del database con dati fittizi tramite PhpMyAdmin.
- Creazione di un **Model** e di un **Controller** per i treni.
- Visualizzazione nella home page di tutti i treni in partenza dalla data odierna in avanti, ordinati cronologicamente.
- Bonus: personalizzazione grafica del tabellone treni con DaisyUI e font dedicato.

## Come avviare il progetto

1. Installa le dipendenze PHP e JS:
   ```powershell
   composer install; npm install
   ```
2. Configura il file `.env` con i dati del tuo database.
3. Esegui le migrations:
   ```powershell
   php artisan migrate
   ```
4. Avvia il server di sviluppo:
   ```powershell
   php artisan serve
   ```
5. Compila gli asset:
   ```powershell
   npm run dev
   ```

## Note

- Il progetto non utilizza Bootstrap, ma DaisyUI integrato con Tailwind CSS.
- Tutte le funzionalità sono pensate per essere facilmente estendibili e personalizzabili.
