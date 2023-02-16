<main class="p-4">
    <div class="d-flex flex-column justify-content-center align-items-center pb-2">

        <div class="exos d-flex flex-column justify-content-center align-items-center">
            <h2>Exercice 4</h2>
            <p>N'afficher que les clients possédant une carte de fidélité.</p>
        </div>
        <div class="program d-flex justify-content-around align-items-center p-3 pb-1 m-3 mb-5">
            <div class="id d-flex flex-column justify-content-center align-items-center pe-4">
                <h3 class="pb-3">ID</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo $client->id . '</br>';
                        }?>
                </p>
            </div>
            <div class="name d-flex flex-column justify-content-center align-items-center pe-4">
                <h3 class="pb-3">Nom</h3>
                <p class="text-center">
                    <?php
                    foreach ($clients as $client) {
                            echo $client->lastName . '</br>';
                        } ?>
                </p>
            </div>
            <div class="firstname d-flex flex-column justify-content-center align-items-center pe-4">
                <h3 class="pb-3">Prénom</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo $client->firstName . '</br>';
                    } ?>
                </p>
            </div>
            <div class="birthDate d-flex flex-column justify-content-center align-items-center pe-4">
                <h3 class="pb-3">Date de naissance</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo date('d/m/Y',strtotime($client->birthDate)) . '</br>';
                    } ?>
                </p>
            </div>
            <div class="cardtype d-flex flex-column justify-content-center align-items-center pe-4">
                <h3 class="pb-3">Carte</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo $client->card . '</br>';
                    } ?>
                </p>
            </div>
            <div class="cardNumber d-flex flex-column justify-content-center align-items-center">
                <h3 class="pb-3">Numéro de carte</h3>
                <p class="text-center">
                    <?php foreach ($clients as $client) {
                            echo $client->cardNumber . '</br>';
                    } ?>
                </p>
            </div>
        </div>
    </div>
    <br> <br><br><br><br>
   
</main>