<?php
// include permet d'importer du code depuis un fichier
// Inclusion du header
include "./incs/header.php";
?>
<section>
    <h2 class="page__title">Tarifs</h2>
    <div class="prices__lists">

        <div class="prices__list">
            <h3 class="prices__list-title">
                A l'unité
            </h3>
            <ul>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
                </li>
            </ul>
        </div>

        <div class="prices__list">
            <h3 class="prices__list-title">
                Abonnement
            </h3>
            <ul>
                <li class="prices__item">
                    <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="prices__description">
        <p class="prices__description-line">
            <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
            <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
    </div>
</section>

<section>
    <h2 class="page__title">Tarif du capitaine</h2>
    <!-- Code php à insérer pour gérer les tarifs et l'âge -->
    <!-- donc j'ouvre une balise php -->
    <?php

    $age = mt_rand(1,70);

    $tarifPlein = 8.3;

    $tarifReduit = 6.8;

    $tarifEnfant = 4.5;


    // Si moins de 14 ans = tarifs enfant
    if ($age < 14) {
        $montant = $tarifEnfant;
    }
    // Si supérieur à 60 ou inferieur à 16 tarif réduit
    else if ($age > 60 || $age < 16) {
        $montant = $tarifReduit;
    }
    // Tout les autres payent plein pot !
    else {
        $montant = $tarifPlein;
    }


    ?>
    <div class="prices__list">
        <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
            <li class="prices__item">
                <!-- echo raccourcie pour afficher l'age -->
                <span class="prices__item-desc"><?= $age ?> ans</span>
                <!-- echo raccourcie pour afficher le montant -->
                <span class="prices__item-value"><?= $montant ?> &euro;</span>
            </li>
        </ul>
    </div>

</section>

<section>
    <h2 class="page__title">Tarif âge par âge</h2>

    <div class="prices">
        <div class="prices__list">
            <h3 class="prices__list-title">
                <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
            </h3>
            <ul>
                <!-- 1ere étape identifier la répétition -->
                <!-- ecrire la boucle -->
                <!-- intégrer le code html -->
                <!-- ajouter la condition -->
                <!-- changer les valeurs qui sont dynamiques -->
                <?php
                for($age = 1; $age <= 99; $age ++){
                    // Si moins de 14 ans = tarifs enfant
                    if ($age < 14) {
                        $montant = $tarifEnfant;
                    }
                    // Si supérieur à 60 ou inferieur à 16 tarif réduit
                    else if ($age > 60 || $age < 16) {
                        $montant = $tarifReduit;
                    }
                    // Tout les autres payent plein pot !
                    else {
                        $montant = $tarifPlein;
                    }
                ?>
                    <li class="prices__item">
                        <span class="prices__item-desc"><?= $age ?> ans</span> 
                        <span class="prices__item-value"><?= $montant ?> &euro;</span>
                    </li>
                <?php
                // On reouvre php juste pour fermer la boucle
                }
                // la la boucle est finis
                ?>
               
                <!-- et ici -->
            </ul>
        </div>
    </div>

</section>

<!-- inclusion du footer -->
<?php
include "./incs/footer.php";
// Tout le code du footer.php est ici comme si je l'avais écris
?>