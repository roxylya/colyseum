<main>
    <div class="d-flex flex-column justify-content-center align-items-center pb-2">

        <div class="exos d-flex flex-column justify-content-center align-items-center">
            <h2>Exercice 5</h2>
            <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
                Les afficher comme ceci :
                Nom : Nom du client
                Prénom : Prénom du client
                Trier les noms par ordre alphabétique.</p>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="name d-flex flex-column justify-content-center align-items-center px-4">
                <h3>Nom</h3>
                <?php
                foreach ($clients as $client) {
                    echo  '<p> <span class="black">Nom :</span> ' . $client->lastName . '</br>'
                        . '<span class="black">Prénom :</span> '. $client->firstName . '</br></p>';
                } ?>
            </div>
        </div>
    </div>
    <div class="empty">
        <br>
   
        <br>
        <br>
        <br>
    </div>
</main>