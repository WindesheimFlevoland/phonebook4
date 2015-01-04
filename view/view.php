<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Telefoonboek -4-</title>

        <link rel="stylesheet" href="css/stylesheet.css" type="text/css" >

    </head>
    <body>
        <div>
            
            <b>Telefoonboek:</b></br><br/>
            
            <?php
            include("../model/Person.php");
            // maak telefoonboek array van de sessie data (de-serialize objecten)

            if (isset($_SESSION['phonebook'])) {
                $phonebook = unserialize($_SESSION['phonebook']);

                foreach ($phonebook as $person) {
                    echo " <a>Edit</a> <a>Delete</a> ".$person->getName() . ' heeft telefoon nummer ' . $person->getPhonenumber() . "<br/>";
                }

                echo '</br>'; // extra lege regel
            }
            ?>
            <b>Nieuw contact:</b></br>
            <!-- toon HTML formulier om een persoon toe te voegen aan phonebook -->
            <form  method="post" action="../index.php" >

                <br/>Name: <input type="text" name="name">
                Phone number: <input type="text" name="phonenumber">
                <input type="submit" name="submit" value="OK">

            </form>


        </div>    
    </body>
</html>
