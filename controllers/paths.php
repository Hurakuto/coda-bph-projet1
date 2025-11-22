<?php

    $path_number = 0;

    $pageContent = [
        "<em>Un sorcier s'avança près des portes du plus grand château du pays.<br>Les gardes, postés devant la porte principale, demandèrent :</em> ".'"Halte-là ! Veuillez décliner votre identité !".<br><em>Votre sorcier '."s'appelle...</em>",
        '"Gandalf ? C\'est ça... Et nous, on est le roi et la reine ?"<em> Le sorcier décide alors...</em>',
        'M-Merlin...? Nous... nous sommes désolé Archichancelier Merlin ! Vous pouvez bien sûr passer !<br><em>Une fois dans l\'enceinte du château, le sorcier se dirigea vers la salle du trône. Une fois face au Roi, le sorcier décida...</em>',
        "",
        "<em>Le sorcier décide alors d'envoyer une tornade de feu sur les gardes.<br>Quelques personnes vous ont vu lancer ce sort... Vous ne pouvez pas rentrer dans l'enceinte du château à moins de subir le poids de leur regard à tous...<br>Le sorcier décide donc...</em>"
    ];

    $Endings = [
        "<em>Le sorcier rentra donc dans l'enceinte du château mais... le sorcier n'ira pas plus loin. Tous les gardes sont autour de lui, prêt à le tuer.<br>Et c'est ce qui arrive, Gandalf fut tuer dans l'enceinte du château pour avoir tuer des gardes.</em>",
        "<em>Le sorcier décide de rebrousser son chemin... Après ce qu'il venait de faire, il ne pu se sentir bien seulement quand il était rentré chez lui.</em>",
        "<em>Le sorcier utilisa un sort lui permettant d'être invisible, ce qui lui a permis d'aller jusqu'à la salle du trône. Une fois en face du Roi, le sorcier enleva son sort et se dévoili.</em><br>\"Très cher Gandalf ! Tu es de retour parmis nous !\"<br><em>Le Roi commença à vous demandez ce que vous aviez fait avant de revenir le voir au château...</em>",
        "\"Pourquoi nous te laisserions passer ?\"<br><em>Dit un garde, quand soudainement la Reine arriva.</em><br>\"Laissez passer cet homme, c'est quelqu'un d'important.\" <em>Le sorcier la remercia avant d'aller à la salle du trône où se trouve le Roi.</em>"
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
            "1" => "",
            "2" => ""
        ],
        [
            "1" => "",
            "2" => ""
        ],
        [
            "1" => "De rentrer dans l'enceinte du château",
            "2" => "D'utiliser un sort lui permettant d'être invisible"
        ]
    ];
?>