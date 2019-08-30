<?php

return [
    'description'   => 'Quelques aides disponnibles dans ' . config('app.name'),
    'dice'          => [
        'description'               => 'Example de jet de dés: "d20", "4d4+4", "d%" pour un pourcent et "df" pour un jet Fudge.',
        'description_attributes'    => 'Il est aussi possible d\'accéder aux paramètres d\'un personnage en utilisant la syntax {character.nom_d_attribut}. Par example, {character.niveau}d6+{character.force}.',
        'more'                      => 'D\'autres options sont expliquées sur le site du plugin.',
        'title'                     => 'Jets de dés',
    ],
    'link'          => [
        'auto_update'   => 'Les liens vers d\'autres entités seront automatiquement mis à jour lorsque le nom ou la description de l\'entitée cible est modifié.',
        'description'   => 'Un lien vers une entité peut être facilement inséré en utilisant \'@\' dans le text. \'#\' peut être utilisé pour avoir une liste de mois depuis les calendriers de la campagne.',
        'title'         => 'Liens vers d\'autres éléments et raccourcis',
    ],
    'map'           => [
        'description'   => 'Uploader une carte à un lieu active le menu "Carte" sur un lieu, ainsi qu\'un lien vers la carte depuis la liste des lieux de la campagne. Les utilisateurs avec les droits de modification d\'une carte peuvent activer le mode \'Edition\' en visionnant la carte. Ceci permet d\'ajouter des Points sur la carte. Ceux-ci peuvent lier vers une entité existante ou être un text.',
        'private'       => 'Les membres du rôle Admin de la campagne peuvent rendre les cartes privées. Cela permet à un utilisateur de voir un lieu touot en guardant la carte secrète.',
        'title'         => 'Carte de lieux',
    ],
    'public'        => 'Une vidéo sur Youtube explique comment fonctionne les campagnes publiques.',
    'title'         => 'Aides',
];
