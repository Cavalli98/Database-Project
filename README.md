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

The only field to modify are in 'connect.php', which contains the connection variable by procedural method 

Use of the system with local server:
Local Server Setup:
1) Download XAMPP from https://www.apachefriends.org/
2) Place the project inside the folder xampp/htdocs/
3) From XAMPP, run both the Apache and MySQL server
4) under localhost/phpmyadmin, create a new database (on the left) and import the file "winerydatabase.sql".
5) Access the website at http://localhost/Database-Project/index.php

Use of the system:
1) log in with username and password or register on the site.
   There are already some predefined users in the system, including:
   username: prova@finale.it passw: provafinale;
2) Once on the main client page, you can:
   -search the wines by name, by name and year, by year (by entering ‘all’ in the name), 
    or view the entire catalogue by entering only ‘all’ in the name and no year;
   -look at your purchase history (‘History’), your cart (‘Cart’),
    go to the homepage (‘Home’) or log out;
3) To buy wines, once searched, simply select the number from the drop-down menu
   and add them to the cart, then go to the cart and press ‘Buy’.
   Each ‘add’ only adds the wines in your box.
   YOU CAN AT ANY TIME CHECK THE TOTAL NUMBER OF BOTTLES IN YOUR CART
   SIMPLY PUSHING THE CURSOR ABOVE THE ‘Main’ SCREEN AND LOOKING AT THE NUMBER 
   IN THE CART ICON.
   The database does not filter the listings in the cart, which is done at the time of
   buying wines and notifies the user if they have been careless and have added the same wine several
   times the same wine.
   The system will still make the user buy the maximum number of bottles available,
   notifying the user.
4) The ‘Clear Cart’ button is used to empty the cart.
