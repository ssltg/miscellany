<?php

return [
    'actions'           => [
        'apply'             => 'Appliquer',
        'back'              => 'Retour',
        'copy'              => 'Copier',
        'copy_to_campaign'  => 'Copier vers une campagne',
        'explore_view'      => 'Vue Imbriquée',
        'export'            => 'Export',
        'find_out_more'     => 'En savoir plus',
        'go_to'             => 'Aller à :name',
        'more'              => 'Autres Actions',
        'move'              => 'Déplacer',
        'new'               => 'Nouveau',
        'next'              => 'Prochain',
        'private'           => 'Privé',
        'public'            => 'Publique',
    ],
    'add'               => 'Ajouter',
    'attributes'        => [
        'actions'       => [
            'add'               => 'Ajouter un attribut',
            'add_block'         => 'Ajouter un block',
            'add_checkbox'      => 'Ajouter une case à docher',
            'add_text'          => 'Ajouter un text',
            'apply_template'    => 'Appliquer un modèle d\'attribut',
            'manage'            => 'Gérer',
            'remove_all'        => 'Tout supprimer',
        ],
        'create'        => [
            'description'   => 'Créer un nouvel attribut',
            'success'       => 'Attribut :name ajouté à :entity.',
            'title'         => 'Nouvel attribut pour :name',
        ],
        'destroy'       => [
            'success'   => 'Attribut :name supprimé de :entity.',
        ],
        'edit'          => [
            'description'   => 'Modifier un attribut existant',
            'success'       => 'Attribut :name modifié pour :entity.',
            'title'         => 'Modifier l\'attribut pour :name',
        ],
        'fields'        => [
            'attribute'             => 'Attribut',
            'community_templates'   => 'Modèles Communautaire',
            'is_private'            => 'Attributs privés',
            'is_star'               => 'Épinglé',
            'template'              => 'Modèle',
            'value'                 => 'Valeur',
        ],
        'helpers'       => [
            'delete_all'    => 'Es-tu certain de vouloir supprimer tous les attributs de cette entité?',
        ],
        'hints'         => [
            'is_private'    => 'Tous les attributs d\'une entité peuvent être cachés des membres non-admin.',
        ],
        'index'         => [
            'success'   => 'Attributs modifiés pour :entity.',
            'title'     => 'Attributs pour :name',
        ],
        'placeholders'  => [
            'attribute' => 'Nombre de quêtes, niveau de difficulté, initiative, population',
            'block'     => 'Nom du bloque',
            'checkbox'  => 'Nom de la case à cocher',
            'section'   => 'Nom de la section',
            'template'  => 'Sélectionner un modèle',
            'value'     => 'Valeur de l\'attribut',
        ],
        'template'      => [
            'success'   => 'Modèle d\'attribut :name appliqué pour :entity.',
            'title'     => 'Appliquer un modèle d\'attribut pour :name',
        ],
        'types'         => [
            'attribute' => 'Attribut',
            'block'     => 'Block',
            'checkbox'  => 'Case à cocher',
            'section'   => 'Section',
            'text'      => 'Texte multiligne',
        ],
        'visibility'    => [
            'entry'     => 'Attribut affiché sur le menu d\'entité.',
            'private'   => 'Attribut seulement visible aux membres du rôle "Admin".',
            'public'    => 'Attribut visible par tous les membres.',
            'tab'       => 'Attribut visible sous l\'onglet Attributs.',
        ],
    ],
    'boosted'           => 'Boosté',
    'bulk'              => [
        'errors'        => [
            'admin' => 'Seulement les membres administrateur de la campagne peuvent changer le status des entités.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Remplacer',
            ],
            'helpers'   => [
                'override'  => 'Si sélectionné, les permissions des entités sélectionnées seront remplacer par ceux-ci. Si non-sélectionné, les permissions sélectionnées seront ajoutées à celles existantes.',
            ],
            'title'     => 'Changer les permissions pour plusieurs entités',
        ],
        'success'       => [
            'permissions'   => 'Permissions changées pour :count entité. |Permissions changées pour :count entités.',
            'private'       => ':count entité est maintenant privée.|:count entitées sont maintenant privées.',
            'public'        => ':count entité est maintenant visible.|:count entitées sont maintenant visibles.',
        ],
    ],
    'cancel'            => 'Annuler',
    'click_modal'       => [
        'close'     => 'Fermer',
        'confirm'   => 'Confirmer',
        'title'     => 'Confirme ton action',
    ],
    'copy_to_campaign'  => [
        'panel' => 'Copier',
        'title' => 'Copier \':name\' vers une autre campagne',
    ],
    'create'            => 'Créer',
    'datagrid'          => [
        'empty' => 'Rien à afficher.',
    ],
    'delete_modal'      => [
        'close'         => 'Fermer',
        'delete'        => 'Supprimer',
        'description'   => 'Est-tu sûr de vouloir supprimer :tag?',
        'mirrored'      => 'Supprimer la relation liée.',
        'title'         => 'Confirmation la suppression',
    ],
    'destroy_many'      => [
        'success'   => ':count élément supprimé.|:count éléments supprimés.',
    ],
    'edit'              => 'Modifier',
    'errors'            => [
        'node_must_not_be_a_descendant' => 'Node invalide (étiquette, lieu parent): l\'entité serait un descendant de lui-même.',
    ],
    'events'            => [
        'hint'  => 'Les événements de calendrier peuvent être associé à cette entité et être affiché ici.',
    ],
    'export'            => 'Export',
    'fields'            => [
        'attribute_template'    => 'Modèle d\'attribut',
        'calendar'              => 'Calendrier',
        'calendar_date'         => 'Date calendrier',
        'character'             => 'Personnage',
        'copy_attributes'       => 'Copier les attributs',
        'copy_notes'            => 'Copier les notes d\'entité',
        'creator'               => 'Créateur',
        'dice_roll'             => 'Jet de dés',
        'entity'                => 'Entité',
        'entity_type'           => 'Type d\'entité',
        'entry'                 => 'Entrée',
        'event'                 => 'Evénement',
        'excerpt'               => 'Extrait',
        'family'                => 'Famille',
        'files'                 => 'Fichiers',
        'header_image'          => 'Image d\'en-tête',
        'image'                 => 'Image',
        'is_private'            => 'Privé',
        'is_star'               => 'Epinglé',
        'item'                  => 'Objet',
        'location'              => 'Lieu',
        'name'                  => 'Nom',
        'organisation'          => 'Organisation',
        'race'                  => 'Race',
        'tag'                   => 'Etiquette',
        'tags'                  => 'Etiquettes',
        'tooltip'               => 'Infobulle',
        'visibility'            => 'Visibilité',
    ],
    'files'             => [
        'actions'   => [
            'drop'      => 'Ajouter un fichier en cliquant ou en glissant déposant',
            'manage'    => 'Gérer les fichiers d\'entité',
        ],
        'errors'    => [
            'max'   => 'Nombre maximal de fichier (:max) atteint pour cette entité.',
        ],
        'files'     => 'Fichiers uploadé',
        'hints'     => [
            'limit'         => 'Chaque entité peut avoir un nombre maximal de :max fichiers uploadé.',
            'limitations'   => 'Formats supportés: jpg, png, gif et pdf. Taille maximale: :size',
        ],
        'title'     => 'Fichiers d\'entité pour :name',
    ],
    'filter'            => 'Filtre',
    'filters'           => [
        'all'       => 'Afficher tous les descendants',
        'clear'     => 'Effacer les filtres',
        'direct'    => 'Affichier seulement descendants directs',
        'filtered'  => 'Affichant :count de :total :entity.',
        'hide'      => 'Cacher les filtres',
        'show'      => 'Afficher les filtres',
        'title'     => 'Filtres',
    ],
    'forms'             => [
        'actions'       => [
            'calendar'  => 'Ajouter une date de calendrier',
        ],
        'copy_options'  => 'Option de copie',
    ],
    'hidden'            => 'Caché',
    'hints'             => [
        'attribute_template'    => 'Appliquer un modèl d\'attribut lors de la création de cette entité.',
        'calendar_date'         => 'Une date de calendrier permet un triage plus facile dans les listes, et garde à jour un événement de calendrier dans le calendrier sélectionné.',
        'header_image'          => 'Cette image s\'affiche au dela de l\'entité. Les images larges mènent a un meilleur résultat.',
        'image_limitations'     => 'Formats supportés: jpg, png et gif. Taille max: :size.',
        'image_patreon'         => 'Augmenter la taille limite?',
        'is_private'            => 'Cacher des membres de type non-Admin',
        'is_star'               => 'Les éléments épinglés sont affichés sur le menu de l\'entité.',
        'map_limitations'       => 'Formats supportés: jpg, png, gif et svg. Taille maximale: :size.',
        'tooltip'               => 'Remplace l\'infobulle automatiquement généré avec le text ci-dessous.',
        'visibility'            => 'Si la visibilité est définie à Admin, seuls les membres du rôle Admin de la campagne verront ceci. La visibilité "Soit-même" signifie que seulement tu peux le voir.',
    ],
    'history'           => [
        'created'   => 'Créé par <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'   => 'Inconnu',
        'updated'   => 'Dernière modification par <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'      => 'Visionner les journaux de l\'entité',
    ],
    'image'             => [
        'error' => 'Impossible de récupérer l\'image demandée. Il est possible que le site web ne nous permet pas de télécharger des images (cela arrive par example avec squarespace et DeviantArt), ou le lien n\'est plus valide.',
    ],
    'is_private'        => 'Cet élément est privé et pas visible.',
    'linking_help'      => 'Comment lier vers d\'autres éléments?',
    'manage'            => 'Gérer',
    'move'              => [
        'description'   => 'Déplacer cet élément à un nouveau endroit',
        'errors'        => [
            'permission'        => 'Droits insuffisants pour créer une entité de ce type dans la campagne sélectionnée.',
            'same_campaign'     => 'Une autre campagne doit être sélectionnée pour y déplacer l\'entité.',
            'unknown_campaign'  => 'Campagne inconnue.',
        ],
        'fields'        => [
            'campaign'  => 'Nouvelle campagne',
            'copy'      => 'Créer une copie',
            'target'    => 'Nouveau type',
        ],
        'hints'         => [
            'campaign'  => 'Il est aussi possible de déplacer cette entité vers une autre campagne.',
            'copy'      => 'Activer cette option créé une copie dans la nouvelle campagne.',
            'target'    => 'Attention! Certaines informations peuvent être perdues lors du déplacement d\'un élément.',
        ],
        'success'       => 'Elément :name déplacé.',
        'success_copy'  => 'Entité \':name\' copiée.',
        'title'         => 'Déplacer :name autre part',
    ],
    'new_entity'        => [
        'error' => 'Vérifier les valeures.',
        'fields'=> [
            'name'  => 'Nom',
        ],
        'title' => 'Nouvel élément',
    ],
    'or_cancel'         => 'ou <a href=":url">annuler</a>',
    'panels'            => [
        'appearance'            => 'Apparence',
        'attribute_template'    => 'Modèle d\'attribut',
        'calendar_date'         => 'Date Calendrier',
        'entry'                 => 'Entrée',
        'general_information'   => 'Information Generale',
        'move'                  => 'Déplacer',
        'system'                => 'Système',
    ],
    'permissions'       => [
        'action'        => 'Action',
        'actions'       => [
            'bulk'          => [
                'add'       => 'Ajouter',
                'remove'    => 'Retirer',
            ],
            'delete'        => 'Supprimer',
            'edit'          => 'Modifier',
            'entity_note'   => 'Notes d\'entité',
            'read'          => 'Lire',
        ],
        'allowed'       => 'Permis',
        'fields'        => [
            'member'    => 'Membre',
            'role'      => 'Rôle',
        ],
        'helper'        => 'En utilisant cette interface, il est possible d\'affiner les permissions des membres et rôles de la campagne pouvant interagir avec cette entité.',
        'inherited'     => 'Ce rôle a déjà cette permission pour ce type d\'entité.',
        'inherited_by'  => 'Cet utilisateur fait partie du rôle :role qui permet cette permission pour ce type d\'entité.',
        'success'       => 'Permissions enregistrées.',
        'title'         => 'Permissions',
    ],
    'placeholders'      => [
        'calendar'      => 'Choix du calendrier',
        'character'     => 'Choix du personnage',
        'entity'        => 'Entité',
        'event'         => 'Choix de l\'événement',
        'family'        => 'Choix de la famille',
        'image_url'     => 'Ou depuis une URL',
        'item'          => 'Choix d\'un objet',
        'location'      => 'Choix du lieu',
        'organisation'  => 'Choix d\'une organisation',
        'race'          => 'Choix d\'une race',
        'tag'           => 'Choix d\'une étiquette',
    ],
    'relations'         => [
        'actions'   => [
            'add'   => 'Ajouter une relation',
        ],
        'fields'    => [
            'location'  => 'Lieu',
            'name'      => 'Nom',
            'relation'  => 'Relation',
        ],
        'hint'      => 'Des relations entre les entités peuvent être définies pour représenter leur connexion.',
    ],
    'remove'            => 'Supprimer',
    'rename'            => 'Renommer',
    'save'              => 'Enregistrer',
    'save_and_close'    => 'Enregistrer et Fermer',
    'save_and_new'      => 'Enregistrer et Nouveau',
    'save_and_update'   => 'Enregistrer et continuer la modification',
    'save_and_view'     => 'Enregistrer et Afficher',
    'search'            => 'Rechercher',
    'select'            => 'Sélection',
    'tabs'              => [
        'attributes'    => 'Attributs',
        'boost'         => 'Boost',
        'calendars'     => 'Calendriers',
        'default'       => 'Défaut',
        'events'        => 'Événements',
        'inventory'     => 'Inventaire',
        'map-points'    => 'Points de carte',
        'mentions'      => 'Mentions',
        'menu'          => 'Menu',
        'notes'         => 'Notes',
        'permissions'   => 'Permissions',
        'relations'     => 'Relations',
        'tooltip'       => 'Infobulle',
    ],
    'update'            => 'Modifier',
    'users'             => [
        'unknown'   => 'Inconnu',
    ],
    'view'              => 'Voir',
    'visibilities'      => [
        'admin' => 'Admin',
        'all'   => 'Tous',
        'self'  => 'Sois-même',
    ],
];
