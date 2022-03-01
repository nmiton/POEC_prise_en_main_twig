<?php

include "inc.twig.php";

$template = $twig->load('base.html.twig');



//~ URL appelée nous retournant des données au format JSON
$data_url = 'http://api.randomuser.me/?results=3';

//~ On appelle l'URL et on stocke le contenu retourné dans une variable
$data_contenu = file_get_contents($data_url);

//~ Les données étant au format JSON, on les décode pour les stocker sous la forme d'un tableau associatif
$data_array = json_decode($data_contenu, true);

//~ On pointe directement sur les données du/des utilisateur(s) retourné(s)
$utilisateurs = $data_array['results'];


echo $template->render(
    [
        'utilisateurs' => $utilisateurs
    ]
);