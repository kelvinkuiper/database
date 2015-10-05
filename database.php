<?php
$host = '';
$username = ''; 
$password = ''; 
$database = '';

//database connectie maken
$db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password); 
//setAttribut ERRMODE om foutmeldingen weer te geven als de query niet klopt
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

//query maken en het resultaat in results opslaan
$results = $db->query("SELECT * FROM table_name");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Boeken</title>
    </head>
    <body>
        <h1>Boeken database</h1>

        <table class="books">
            <thead>
                <th>Titel</th>
            </thead>
            <tbody>
                <td></td>
            </tbody>
        </table>

    </body>
</html>