<?php

return [
    'actions'           => [
        'apply'             => 'Aplicar',
        'back'              => 'Atrás',
        'copy'              => 'Copiar',
        'copy_to_campaign'  => 'Copiar a campaña',
        'explore_view'      => 'Vista anidada',
        'export'            => 'Exportar',
        'find_out_more'     => 'Saber más',
        'go_to'             => 'Ir a :name',
        'more'              => 'Más acciones',
        'move'              => 'Mover',
        'new'               => 'Nuevo',
        'next'              => 'Siguiente',
        'private'           => 'Privado',
        'public'            => 'Público',
    ],
    'add'               => 'Añadir',
    'attributes'        => [
        'actions'       => [
            'add'               => 'Añadir atributo',
            'add_block'         => 'Añadir un bloque',
            'add_checkbox'      => 'Añadir una casilla',
            'add_text'          => 'Añadir texto',
            'apply_template'    => 'Aplicar una plantilla de atributos',
            'manage'            => 'Administrar',
            'remove_all'        => 'Eliminar todos',
        ],
        'create'        => [
            'description'   => 'Crear nuevo atributo',
            'success'       => 'Atributo :name añadido a :entity.',
            'title'         => 'Nuevo atributo para :name',
        ],
        'destroy'       => [
            'success'   => 'Atributo :name de :entity eliminado.',
        ],
        'edit'          => [
            'description'   => 'Actualizar un atributo existente',
            'success'       => 'Atributo :name de :entity actualizado.',
            'title'         => 'Actualizar atributo a :name',
        ],
        'fields'        => [
            'attribute'             => 'Atributo',
            'community_templates'   => 'Plantillas de la comunidad',
            'is_private'            => 'Atributos privados',
            'is_star'               => 'Fijado',
            'template'              => 'Plantilla',
            'value'                 => 'Valor',
        ],
        'helpers'       => [
            'delete_all'    => '¿Seguro que quieres eliminar todos los atributos de esta entidad?',
        ],
        'hints'         => [
            'is_private'    => 'Puedes ocultar todos los atributos de una entidad a todos los miembros no administradores haciéndola privada.',
        ],
        'index'         => [
            'success'   => 'Atributos de :entity actualizados.',
            'title'     => 'Atributos de :name',
        ],
        'placeholders'  => [
            'attribute' => 'Número de conquistas, Iniciativa, Población',
            'block'     => 'Nombre del bloque',
            'checkbox'  => 'Nombre de la casilla',
            'section'   => 'Nombre de la sección',
            'template'  => 'Seleccionar plantilla',
            'value'     => 'Valor del atributo',
        ],
        'template'      => [
            'success'   => 'Plantilla de atributos :name aplicada en :entity',
            'title'     => 'Aplicar plantilla de atributos a :name',
        ],
        'types'         => [
            'attribute' => 'Atributo',
            'block'     => 'Bloque',
            'checkbox'  => 'Casilla',
            'section'   => 'Sección',
            'text'      => 'Texto multilínea',
        ],
        'visibility'    => [
            'entry'     => 'El atributo se muestra en el menú de la entidad.',
            'private'   => 'Atributo visible solo para miembros con el rol "Admin".',
            'public'    => 'Atributo visible por todos los miembros.',
            'tab'       => 'El atributo se muestra solo en la pestaña de Atributos.',
        ],
    ],
    'boosted'           => 'Mejorada',
    'bulk'              => [
        'errors'        => [
            'admin' => 'Solamente los administradores de la campaña pueden cambiar el estatus privado de las entidades.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Ignorar',
            ],
            'helpers'   => [
                'override'  => 'Si está seleccionado, los permisos de las entidades seleccionadas serán ignorados y en cambio usarán estos ajustes. Si no está seleccionado, los estos permisos se añadirán a los existentes.',
            ],
            'title'     => 'Cambiar permisos a varias entidades',
        ],
        'success'       => [
            'permissions'   => 'Permisos cambiados en :count entidad.|Permisos cambiados en :count entidades.',
            'private'       => ':count entidad es ahora privada|:count entidades son ahora privadas.',
            'public'        => ':count entidad es ahora visible|:count son ahora visibles.',
        ],
    ],
    'cancel'            => 'Cancelar',
    'click_modal'       => [
        'close'     => 'Cerrar',
        'confirm'   => 'Confirmar',
        'title'     => 'Confirmar acción',
    ],
    'copy_to_campaign'  => [
        'panel' => 'Copiar',
        'title' => 'Copiar \':name\' a otra campaña',
    ],
    'create'            => 'Crear',
    'datagrid'          => [
        'empty' => 'Aún no hay nada que mostrar.',
    ],
    'delete_modal'      => [
        'close'         => 'Cerrar',
        'delete'        => 'Eliminar',
        'description'   => '¿Seguro que quieres eliminar :tag?',
        'mirrored'      => 'Eliminar relación reflejada',
        'title'         => 'Eliminar',
    ],
    'destroy_many'      => [
        'success'   => ':count entidad eliminada|:count entidades eliminadas.',
    ],
    'edit'              => 'Editar',
    'errors'            => [
        'node_must_not_be_a_descendant' => 'Nodo inválido (categoría, localización superior): sería un descendiente de sí mismo.',
    ],
    'events'            => [
        'hint'  => 'Los eventos del calendario asociados a esta entidad se muestran aquí.',
    ],
    'export'            => 'Exportar',
    'fields'            => [
        'attribute_template'    => 'Plantilla de atributos',
        'calendar'              => 'Calendario',
        'calendar_date'         => 'Fecha del calendario',
        'character'             => 'Personaje',
        'copy_attributes'       => 'Copiar atributos',
        'copy_notes'            => 'Copiar notas de la entidad',
        'creator'               => 'Creador',
        'dice_roll'             => 'Tirada de dados',
        'entity'                => 'Entidad',
        'entity_type'           => 'Tipo de entidad',
        'entry'                 => 'Entrada',
        'event'                 => 'Evento',
        'excerpt'               => 'Extracto',
        'family'                => 'Familia',
        'files'                 => 'Archivos',
        'header_image'          => 'Imagen de cabecera',
        'image'                 => 'Imagen',
        'is_private'            => 'Privado',
        'is_star'               => 'Fijada',
        'item'                  => 'Objeto',
        'location'              => 'Localización',
        'name'                  => 'Nombre',
        'organisation'          => 'Organización',
        'race'                  => 'Raza',
        'tag'                   => 'Etiqueta',
        'tags'                  => 'Etiquetas',
        'tooltip'               => 'Descripción emergente',
        'visibility'            => 'Visibilidad',
    ],
    'files'             => [
        'actions'   => [
            'drop'      => 'Haz clic para añadir o arrastra un archivo',
            'manage'    => 'Administrar archivos de la entidad',
        ],
        'errors'    => [
            'max'   => 'Has alcanzado el número máximo (:max) de archivos para esta entidad.',
        ],
        'files'     => 'Archivos subidos',
        'hints'     => [
            'limit'         => 'Cada entidad puede tener un máximo de :max archivos.',
            'limitations'   => 'Formatos soportados: jpg, png, gif y pdf. Tamaño máximo de archivo: :size',
        ],
        'title'     => 'Archivos de :name',
    ],
    'filter'            => 'Filtrar',
    'filters'           => [
        'all'       => 'Mostrar todos los descendientes',
        'clear'     => 'Quitar filtros',
        'direct'    => 'Filtrar solo los descendientes directos',
        'filtered'  => 'Mostrando :count de :total :entity.',
        'hide'      => 'Ocultar filtros',
        'show'      => 'Mostrar filtros',
        'title'     => 'Filtros',
    ],
    'forms'             => [
        'actions'       => [
            'calendar'  => 'Añadir fecha de calendario',
        ],
        'copy_options'  => 'Opciones de copia',
    ],
    'hidden'            => 'Oculto',
    'hints'             => [
        'attribute_template'    => 'Aplica una plantilla de atributos directamente al crear esta entidad.',
        'calendar_date'         => 'Las fechas de calendario hacen que sea más fácil filtrar las listas, y también fijan los eventos al calendario seleccionado.',
        'header_image'          => 'Esta imagen está situada sobre la entidad. Para obtener mejores resultados, usa una imagen apaisada.',
        'image_limitations'     => 'Formatos soportados: jpg, png y gif. Tamaño máximo del archivo: :size.',
        'image_patreon'         => 'Aumenta el límite apoyándonos en Patreon',
        'is_private'            => 'Ocultar a los "Invitados"',
        'is_star'               => 'Los elementos fijados aparecerán en el menú principal de la entidad.',
        'map_limitations'       => 'Formatos soportados: jpg, png, gif y svg. Tamaño máximo del archivo: :size.',
        'tooltip'               => 'Reemplaza la descripción emergente automática con uno de los siguientes contenidos.',
        'visibility'            => 'Al seleccionar "Administrador", solo los miembros con el rol de administrador podrán ver esto. "Solo yo" significa que solo tú puedes ver esto.',
    ],
    'history'           => [
        'created'   => 'Creado por <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'   => 'Desconocido',
        'updated'   => 'Última modificación por <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'      => 'Historial de cambios de la entidad',
    ],
    'image'             => [
        'error' => 'No hemos podido obtener la imagen. Puede que la página web no nos permita descargarla (típico de Squarespace o DeviantArt), o que el enlace ya no es válido.',
    ],
    'is_private'        => 'Esta entidad es privada y no será visible por los usuarios Invitados.',
    'linking_help'      => '¿Como puedo enlazar otras entradas?',
    'manage'            => 'Administrar',
    'move'              => [
        'description'   => 'Mover esta entidad a otro lugar',
        'errors'        => [
            'permission'        => 'No tienes permiso para crear entidades de este tipo en la campaña seleccionada.',
            'same_campaign'     => 'Debes seleccionar otra campaña donde mover la entidad.',
            'unknown_campaign'  => 'Campaña desconocida.',
        ],
        'fields'        => [
            'campaign'  => 'Nueva campaña',
            'copy'      => 'Hacer una copia',
            'target'    => 'Nuevo tipo',
        ],
        'hints'         => [
            'campaign'  => 'También puedes intentar mover esta entidad a otra campaña.',
            'copy'      => 'Selecciona esta opción si quieres crear una copia en la nueva campaña.',
            'target'    => 'Por favor ten en cuenta que algunos datos pueden perderse al mover un elemento de un tipo a otro.',
        ],
        'success'       => 'Entidad \':name\' movida.',
        'success_copy'  => 'Entidad \':name\' copiada.',
        'title'         => 'Mover :name',
    ],
    'new_entity'        => [
        'error' => 'Por favor revisa lo introducido.',
        'fields'=> [
            'name'  => 'Nombre',
        ],
        'title' => 'Nueva entidad',
    ],
    'or_cancel'         => 'o <a href=":url">Cancelar</a>',
    'panels'            => [
        'appearance'            => 'Apariencia',
        'attribute_template'    => 'Plantilla de atributos',
        'calendar_date'         => 'Fecha de calendario',
        'entry'                 => 'Presentación',
        'general_information'   => 'Información general',
        'move'                  => 'Mover',
        'system'                => 'Sistema',
    ],
    'permissions'       => [
        'action'        => 'Acción',
        'actions'       => [
            'bulk'          => [
                'add'       => 'Añadir',
                'remove'    => 'Eliminar',
            ],
            'delete'        => 'Eliminar',
            'edit'          => 'Editar',
            'entity_note'   => 'Notas de entidad',
            'read'          => 'Leer',
        ],
        'allowed'       => 'Permitido',
        'fields'        => [
            'member'    => 'Miembro',
            'role'      => 'Rol',
        ],
        'helper'        => 'Usa esta interfaz para afinar qué usuarios y roles pueden interactuar con esta entidad.',
        'inherited'     => 'Este rol ya tiene este permiso en esta entidad.',
        'inherited_by'  => 'Este usuario forma parte del rol ":role", que le otorga este permiso en esta entidad.',
        'success'       => 'Permisos guardados.',
        'title'         => 'Permisos',
    ],
    'placeholders'      => [
        'calendar'      => 'Escoge un calendario',
        'character'     => 'Escoge un personaje',
        'entity'        => 'Entidad',
        'event'         => 'Elige un evento',
        'family'        => 'Elige una familia',
        'image_url'     => 'Puedes subir una imagen desde una URL',
        'item'          => 'Elige un objeto',
        'location'      => 'Escoge una localización',
        'organisation'  => 'Elige una organización',
        'race'          => 'Elige una raza',
        'tag'           => 'Elige una etiqueta',
    ],
    'relations'         => [
        'actions'   => [
            'add'   => 'Añadir una relación',
        ],
        'fields'    => [
            'location'  => 'Localización',
            'name'      => 'Nombre',
            'relation'  => 'Relación',
        ],
        'hint'      => 'Se pueden relacionar entidades para representar sus conexiones.',
    ],
    'remove'            => 'Eliminar',
    'rename'            => 'Renombrar',
    'save'              => 'Guardar',
    'save_and_close'    => 'Guardar y Cerrar',
    'save_and_new'      => 'Guardar y Crear nuevo',
    'save_and_update'   => 'Guardar y Seguir editando',
    'save_and_view'     => 'Guardar y Ver',
    'search'            => 'Buscar',
    'select'            => 'Seleccionar',
    'tabs'              => [
        'attributes'    => 'Atributos',
        'boost'         => 'Mejorar',
        'calendars'     => 'Calendarios',
        'default'       => 'Por defecto',
        'events'        => 'Eventos',
        'inventory'     => 'Inventario',
        'map-points'    => 'Puntos del mapa',
        'mentions'      => 'Menciones',
        'menu'          => 'Menú',
        'notes'         => 'Notas',
        'permissions'   => 'Permisos',
        'relations'     => 'Relaciones',
        'tooltip'       => 'Descripción emergente',
    ],
    'update'            => 'Actualizar',
    'users'             => [
        'unknown'   => 'Desconocido',
    ],
    'view'              => 'Ver',
    'visibilities'      => [
        'admin' => 'Admin',
        'all'   => 'Todos',
        'self'  => 'Solo yo',
    ],
];
