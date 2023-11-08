WINERY MANAGEMENT WEB PROJECT
-------------------------------------------------

Softwares and Programming languages used:
- Atom
- XAMPP
- MySQL
- 000webhost
- HTML
- CSS
- PHP
- SQL

-------------------------------------------------

System is also available at (not available anymore):
https://lavineria.000webhostapp.com/

-------------------------------------------------

The only field to modify are in 'connect.php', which contains the connection variable by procedural method 

Use of the system with local server:
Local Server Setup:
1) Download XAMPP from https://www.apachefriends.org/
2) Place the project inside the folder xampp/htdocs/
3) From XAMPP, run both the Apache and MySQL server
4) under localhost/phpmyadmin, create a new database (on the left) and import the file "winerydatabase.sql".
5) Access the website at http://localhost/Database-Project/index.php

Use of the system:
1) eseguire l'accesso tramite username e password o iscriversi al sito.
   Ci sono già alcuni utenti predefiniti nel sistema, fra cui:
   username: prova@finale.it passw: provafinale;
2) Una volta arrivati nella pagina principale del client, si può:
   -cercare i vini per nome, per nome e anno, per anno (inserendo nel nome 'all'), 
    oppure vedere tutto il catalogo inserendo solo 'all' nel nome e nessun anno;
   -guardare la propria Cronologia acquisti ('History'), il proprio carrello ('Cart'),
    andare alla homepage ('Home') o eseguire il logout;
3) Per comprare dei vini, una vola cercati, basta selezionare il numero dal menù a tendina
   e aggiungerli al carrello, per poi andare nel carrello e premere 'Buy'.
   Ogni 'add' aggiunge solo i vini della propria casella.
   SI PUO' IN OGNI MOMENTO CONTROLLARE IL NUMERO TOTALE DI BOTTIGLIE PRESENTI NEL CARRELLO
   SEMPLICEMENTE POSIZIONANDO IL CURSORE SOPRA LA SCRITTA 'Main' E GUARDANDO IL NUMERO 
   PRESENTE NELLA ICONA DEL CARRELLO.
   Il database non filtra le inserzioni nel carrello, il cui compito è svolto nel momento di
   comprare i vini e notificato all'utente se esso è stato disattento ed ha aggiunto più
   volte lo stesso vino.
   Il sistema farà comunque comprare al massimo il numero di bottiglie disponibili,
   notificandolo all'utente.
4) Tramite il tasto 'Clear Cart' si svuota il carrello.
