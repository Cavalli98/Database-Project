PROGETTO WEB DI GESTIONE DI AZIENDA VINICOLA
-------------------------------------------------
Software and Programming language used:
-Atom
-XAMPP
-MySQL
-000webhost
-HTML
-CSS
-PHP
-SQL

-------------------------------------------------
Il sistema è presente anche alla pagina (not available anymore):
https://lavineria.000webhostapp.com/
-------------------------------------------------

La cartella principale 'Database Project' contiene, oltre ai file del progetto, anche il database da utilizzare;

Gli unici valori da cambiare in teoria sono nel file 'connect.php', il quale contiene la variabile di connessione tramite metodo procedurale (mysqli_connect(...));

Uso del sistema con server locale:
1) tramite il browser accedere al file 'index.php' dentro la cartella 'Database Project';
2) eseguire l'accesso tramite username e password o iscriversi al sito.
   Ci sono già alcuni utenti predefiniti nel sistema, fra cui:
   username: stefano.cagnoni@unipr.it passw: basididati;
3) Una volta arrivati nella pagina principale del client, si può:
   -cercare i vini per nome, per nome e anno, per anno (inserendo nel nome 'all'), 
    oppure vedere tutto il catalogo inserendo solo 'all' nel nome e nessun anno;
   -guardare la propria Cronologia acquisti ('History'), il proprio carrello ('Cart'),
    andare alla homepage ('Home') o eseguire il logout;
4) Per comprare dei vini, una vola cercati, basta selezionare il numero dal menù a tendina
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
5) Tramite il tasto 'Clear Cart' si svuota il carrello.
