<main class="p-4">
    <div class="d-flex flex-column justify-content-center align-items-center mb-2">

        <div class="exos d-flex flex-column justify-content-center align-items-center mb-5">
            <h2>Exercice 5</h2>
            <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
                Les afficher comme ceci :
                Nom : Nom du client
                Prénom : Prénom du client
                Trier les noms par ordre alphabétique.</p>
        </div>
        <div class="program d-flex justify-content-around align-items-center p-3 pb-1">
            <div class="name d-flex flex-column justify-content-center align-items-center px-4">
                <h3 class="pb-3">Nom</h3>
                <?php
                foreach ($clients as $client) {
                    echo  '<p> <span class="black">Nom :</span> ' . $client->lastName . '</br>'
                        . '<span class="black">Prénom :</span> '. $client->firstName . '</br></p>';
                } ?>
            </div>
        </div>
    </div>
        <br>
</main>