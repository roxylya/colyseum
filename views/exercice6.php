<main class="p-4 pb-5">
    <div class="d-flex flex-column justify-content-center align-items-center pb-2">

        <div class="exos d-flex flex-column justify-content-center align-items-center mb-5">
            <h2>Exercice 6</h2>
            <p> Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique.
                Afficher les résultat comme ceci : 'Spectacle' par 'artiste', le 'date' à 'heure'.</p>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="program d-flex flex-column justify-content-center align-items-center p-3 pb-1">
                <h3 class="">Programme</h3>
                <p class="text-center">
                    <?php foreach ($shows as $show) {
                        echo $show->title . ' par ' . $show->performer . ', le ' . date('d/m/Y',strtotime($show->date)) . ' à ' . date('H:i',strtotime($show->startTime)) . '</br>';
                    } ?>
                </p>
            </div>
        </div>
    </div>
</main>