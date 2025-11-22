<?php

    $path_number = 0;

    $pageContent = [
        "<em>Un sorcier s'avança près des portes du plus grand château du pays.<br>Les gardes, postés devant la porte principale, demandèrent :</em> ".'"Halte-là ! Veuillez décliner votre identité !".<br><em>Votre sorcier '."s'appelle...</em>",
        '"Gandalf ? C\'est ça... Et nous, on est le roi et la reine ?"<em> Le sorcier décide alors...</em>',
        'M-Merlin...? Nous... nous sommes désolé Archichancelier Merlin ! Vous pouvez bien sûr passer !<br><em>Une fois dans l\'enceinte du château, le sorcier se dirigea vers la salle du trône. Une fois face au Roi, le sorcier décida...</em>',
        "",
        "<em>Le sorcier décide alors d'envoyer une tornade de feu sur les gardes.<br>Quelques personnes vous ont vu lancer ce sort... Vous ne pouvez pas rentrer dans l'enceinte du château à moins de subir le poids de leur regard à tous...<br>Le sorcier décide donc...</em>",
        "<em>Le sorcier rentra donc dans l'enceinte du château mais... le sorcier n'ira pas plus loin. Tous les gardes sont autour de lui, prêt à le tuer.<br>Et c'est ce qui arrive, Gandalf fut tuer dans l'enceinte du château pour avoir tuer des gardes.</em>",
        "<em>Le sorcier décide de rebrousser son chemin... Après ce qu'il venait de faire, il ne pu se sentir bien seulement quand il était rentré chez lui."
    ];


    $paths = [
        [
            "1" => "Gandalf",
            "2" => "Merlin",
            "3" => "Dumbledore"
        ],
        [
            "1" => "D'envoyer une tornade de feu",
            "2" => "De demander poliment de le laisser passer",
            "3" => "D'abandonner et de rebrousser son chemin"
        ],
        [
            "1" => "t1",
            "2" => "t2"
        ],
        [
            "1" => "d1",
            "2" => "d2"
        ],
        [
            "1" => "De rentrer dans l'enceinte du château",
            "2" => ""
        ]
    ];
?>