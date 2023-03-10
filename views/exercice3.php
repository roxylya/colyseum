<main class="p-4">
    <div class="d-flex flex-column justify-content-center align-items-center pb-2">
        <div class="exos d-flex flex-column justify-content-center align-items-center mb-5">
            <h2>Exercice 3</h2>
            <p>Afficher les 20 premiers clients.</p>
        </div>

        <div class="program d-flex justify-content-around align-items-center p-3 pb-1">
            <div class="id d-flex flex-column justify-content-center align-items-center">
                <h3 class="pb-2">ID</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo $client->id . '</br>';
                    } ?>
                </p>
            </div>
            <div class="name d-flex flex-column justify-content-center align-items-center px-4">
                <h3 class="pb-2">Nom</h3>
                <p class="text-center">
                    <?php
                    foreach ($clients as $client) {
                            echo $client->lastName . '</br>';
                        } ?>
                </p>
            </div>
            <div class="firstname d-flex flex-column justify-content-center align-items-center">
                <h3 class="pb-2">Prénom</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo $client->firstName . '</br>';
                        } ?>
                </p>
            </div>
        </div>
    </div>
</main>