<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Accueil</title>

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

    <body class="antialiased">
        <div>
           
            
            <h1 style="text-align : center; font-family : catamaran; color : black; font-weight: 600; font-size: -webkit-xxx-large; margin: 2rem 0 2rem 0; justify-content: center;">Café Nueve</h1>

            <p style="text-align : center; margin: 0 4rem 0 4rem; font-weight: bold; color: green;">Avec nos cafés à capsules ou en grains, préparez vos boissons préférées directement chez vous !<br><br>
            Préservons notre planète en consommant bio :<br><br>
            Nous fabriquons avec le plus grand soin nos cafés, artisanalement, dans nos ateliers depuis plus de 13 ans. Nous utilisons des matières premières de qualité et bio afin de vous garantir un produit d’excellence.
            Des espressos intenses, des cafés gourmands, de délicieux ristretto ou encore un Macchiato surprenant, avec Café Nueve® dégustez plus de 45 boissons de qualité professionnelle. 
            </p>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="/" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Certifié biologique</h2>
                                <p class="text-gray-900 dark:text-white">
                                    Nos cafés sont BIO issu d'une agriculture BIO garantie sans huile de palme.
                                </p>
                            </div>
                        </a>

                        <a href="/contact" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"> Contact</h2>

                                <p class="text-gray-900 dark:text-white">
                                N’hésitez pas à nous contacter pour tous renseignements, avant ou après achat.</p>
                            </div>
                        

                        <a href="/qsn" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"> Qui sommes-nous ? </h2>

                                <p class="text-gray-900 dark:text-white">
                                    Vous avez la possibilité d’être livrés à domicile via notre livreur Chronopost ou récupérer votre commande en points relais.
                                </p>
                            </div>

                            
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Paiement sécurisé</h2>
                                <p class="text-gray-900 dark:text-white">
                                    Notre site de vente en ligne a un système de paiement 100% sécurisé.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      
    </body>
        <!-- Footer -->
        
</html>

</x-app-layout>
@include('layouts.footer')