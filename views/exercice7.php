<main>
    <div class="d-flex flex-column justify-content-center align-items-center pb-5">

        <div class="exos d-flex flex-column justify-content-center align-items-center">
            <h2>Exercice 7</h2>
            <p>Afficher tous les clients comme ceci :
                Nom : Nom de famille du client
                Prénom : Prénom du client
                Date de naissance : Date de naissance du client
                Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
                Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</p>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="name d-flex flex-column justify-content-center align-items-center px-4">
                <h3 class="p-3">Clients</h3>
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <?php
                    foreach ($clients as $client) {
                        echo  '<div class="clients m-3 p-2"><p><span class="black">Nom :</span> ' . $client->lastName . '</br>'
                            . '<span class="black">Prénom :</span> ' . $client->firstName . '</br>'
                            . '<span class="black">Date de naissance :</span> ' . $client->birthDate. '</br>'
                            . '<span class="black">Carte de fidélité :</span> ' . $client->fidelity . '</br>'
                            . '<span class="black">Numéro de carte :</span> ' . $client->cardFidelity . '</p></div>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</main>