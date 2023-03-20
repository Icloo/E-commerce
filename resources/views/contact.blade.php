<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Contact</title>

        <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> 
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" /> 


        <!-- Styles -->
      
    </head>
    <x-app-layout>  
<body>
  
    <main>
        <h1 style="text-align : center; font-family : catamaran; color : black; font-weight: 600; font-size: -webkit-xxx-large; margin: 2rem 0 2rem 0; justify-content: center;">Nous contacter</h1>

        <form style="width: 25rem; height: 30rem ;padding: 2vh; margin-left: 30rem" method="post">
            <p>
        
                <label for="nom">Nom</label><br>
                <input  id="c1" type="text" name="nom" id="nom" required placeholder="Nom de famille">
            </p>
            <p>
                <label for="prenom">Prénom</label><br>
                <input class="c1" type="text" name="prenom" id="prenom" required placeholder="Prénom">
            </p>  
            <p>
                <label for="adresse">Adresse</label><br>
                <input class="c1" type="text" name="adresse" id="adresse" required placeholder="Rue...">
            </p> 
            <p>
                <label for="codepostale">Code postale</label><br>
                <input class="c1" type="number" name="codepostale" id="codepostale" required placeholder="">
            </p>   
            <p class="radio">
                <h2 class="titreradio1">Avez-vous déjà passé commande ? </h2>
                
                <input class="radio" type="radio" name="vehicule" id="vehicule" value="non"><label for="vehicule">Non</label><br>
                <input class="radio2" type="radio" name="vehicule" id="vehicule" value="oui" checked><label for="vehicule">Oui</label>
            </p>
            <p>
                <h2 class="h2checkbox">Veuillez séléctionner la raison de votre message:</h2>
                <input class="entrecheckbox" type="checkbox" name="machin" id="machin"><label for="machin">renseignement produit</label><br>
                <input class="entrecheckbox" type="checkbox" name="truck" id="truck" checked><label for="truck">information livraison</label><br>
                <input class="entrecheckbox" type="checkbox" name="bidulle" id="bidulle"><label for="bidulle">contacter le S.A.V</label><br>
                <input class="entrecheckbox" type="checkbox" name="chouette" id="chouette"><label for="chouette">nous retourner un produit</label><br>
            </p>
            <p class="boutonposition">
                <input class="boutonenvoyer" type="submit" value="Envoyer">
            </p>

        </form>
    </main>

</body>
</html>

</x-app-layout>
@include('layouts.footer')