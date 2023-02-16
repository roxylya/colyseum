<main class="p-4">
    <div class="d-flex flex-column justify-content-center align-items-center pb-2">

        <div class="exos d-flex flex-column justify-content-center align-items-center">
            <h2>Exercice 2</h2>
            <p>Afficher tous les types de spectacles possibles.</p>
        </div>
        <div class="program p-3 pb-1">
            <h3 class="pb-2">Types de spectacles</h3>
            <p class="text-center">
                <?php foreach ($showtypes as $showtype) {
                    echo $showtype->type . '</br>';
                } ?>
            </p>
        </div>
    </div>
    <div class="empty">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</main>