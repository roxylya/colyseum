<main>
    <div class="d-flex flex-column justify-content-center align-items-center pb-2">

        <div class="exos d-flex flex-column justify-content-center align-items-center">
            <h2>Exercice 6</h2>
            <p> Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique.
                Afficher les résultat comme ceci : 'Spectacle' par 'artiste', le 'date' à 'heure'.</p>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="title d-flex flex-column justify-content-center align-items-center pe-4">
                <h3>Programme</h3>
                <p class="">
                    <?php foreach ($shows as $show) {
                        echo $show->title . ' par ' . $show->performer . ', le ' . date('d/m/Y',strtotime($show->date)) . ' à ' . date('H:i',strtotime($show->startTime)) . '</br>';
                    } ?>
                </p>
            </div>
        </div>
    </div>
    <div class="empty">
        <br>
        <br>
        <br>
    </div>
</main>