<?php

$link = mysqli_connect('roger_mysql', 'clma', '1234')
    or die('Impossible de se connecter : ' . mysqli_error());
echo 'Connected successfully';
mysqli_select_db($link, 'admin') or die('Impossible de sélectionner la base de données');

//$sql='update coucou set compteur = compteur + 1';

// if (mysqli_query($link, $sql)) {
//     echo "Success";
// } else {
//     echo "Error: " . mysqli_error($link);
// }


?><br />
<?= "Hello from PHP" ?>
