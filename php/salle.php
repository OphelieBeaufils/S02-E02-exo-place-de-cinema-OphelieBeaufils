<?php

$films = [
    "Snatch",
    "Shaun of the dead",
    "Deadpool",
    "La 7eme compagnie",
    "Dirty Dancing"
];

$rooms = [
    'Athéna',
    'Dyonisos',
    'Hadès',
    'Zeus'
];

// Inclusion du header
include "./incs/header.php";
?>


<h1 class="page__title">En salle</h1>
<section>
    <div class="EnSalle">
        <h2>Mes films en salle :</h2>

        <ul class="EnSalle_list">
            <!-- boucles qui parcourt le tableau -->
            <?php
            // on utilise le compteur de la boucle pour aller chercher les différents indexs du tableau
            for($count=0;$count<5;$count++){
                // affichage du html avec echo
                echo "<li>";
                echo $films[$count]."</br>";
                echo "</li>";
            }
            ?>
            <!-- fin de boucle -->
        </ul>
    </div>
    <div class="EnSalle">
    <h2>Salles :</h2>
        <ul class="EnSalle_list">
            <?php for ($count = 0; $count < 4; $count ++){
                echo "<li>";
                echo $rooms[$count]. "</br>";
                echo "</li>";
            }
            ?>
            
        </ul>
    </div>
</section>

<?php
// Inclusion du footer
include "./incs/footer.php";