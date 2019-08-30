<?php

return [
    'attribute-templates'   => [
        'answer'    => "
The best way we can explain Attribute Templates is with an example. Let's imagine that your world has lots of Locations, and on many of those locations, you want to remember to create a custom Attribute for \"Population\", \"Climate\", \"Crime Level\". 

Now, you could easily do that on every Location, but it can get tedious, and you might forget sometimes to create the attribute \"Crime Level\". This is where Attribute Templates come into play.

You can create an Attribute Template with those attributes (Population, Climate, Crime Level, etc), and later apply that template our your locations. This will create the attributes from the template on the locations, so all you have to do is change the values and not have to remember about the attributes!",
        'question'  => 'Attribute Templates, what are they?',
    ],
    'conversations'         => [
        'answer'    => 'Conversations can be set up as talks between Characters or between Campaign Members. If for example you wish to document an important talk between NPCs and the PCs, you can do so using this module. You can also use them for play-by-post campaigns.',
        'question'  => 'What are Conversations?',
    ],
    'entity-notes'          => [
        'answer'    => 'All entities have an \'Entity Notes\' tab that are little snippets of text that can be set to only visible by you (great when co-dming), only for members of the admin role, or visible to all. You can also give your players permission to create and edit entity notes on entities without having to allow them editing a whole entity.',
        'question'  => 'How does ' . config('app.name') . ' handle partially hidden information?',
    ],
    'fields'                => [
        'answer'    => 'Answer',
        'category'  => 'Category',
        'locale'    => 'Locale',
        'order'     => 'Order',
        'question'  => 'Question',
    ],
    'free'                  => [
        'answer'    => "
Yes! We believe that your financial situation shouldn't impact your enjoyment of role playing games or world building, and such will always keep the app free. Thanks to our generous Patrons on :patreon, we are able to cover the monthly server costs and keep the app ad free!
        
Supporting us on Patreon however allows you to increase file size upload limits, adds your name to the Patreon wall of fame, have nicer default icons, vote on prioritising what gets works on and more!",
        'question'  => 'Will the app stay free?',
    ],
    'help'                  => [
        'answer'    => 'Firstly, thank you for wanting to help out! We are always interested in people who can help out with translations, testing new features, or who can help out new users. We also love when people promote ' . config('app.name') . ' to reach new users in places we hadn\'t thought of. Your best course of action is to join us on the :discord where a channel is dedicated to helping out. We also love our patrons on Patreon if you wish to support us and get access to some perks!',
        'question'  => 'I want to help! What can I do?',
    ],
    'map'                   => [
        'answer'    => "Every location can contain a map (png, jpg or svg) that itself has \"map points\" that can be placed with control over size, shape, icon and colour, and as links to entities or simple labels.

Please note that maps from popular tools like Azgaar and Medieval Fantasy Town Generator compress the generated files making them incompatible with ' . config('app.name') . '. A fix involves opening the files in Inkscape or Photoshop and re-saving the SVG files before uploading them to ' . config('app.name') . '.
"
,
        'question'  => 'Can I upload maps to ' . config('app.name') . '?',
    ],
    'mobile'                => [
        'answer'    => 'There currently is no dedicated mobile app for ' . config('app.name') . ', but most of the app works on a mobile device. One limitation is the mentions tool not working in the text editor. If the support on Patreon permits it, I hope to pay someone to build a mobile app one day, but don\'t forsee that happening any time soon.',
        'question'  => 'Is there a mobile app? Is one planned?',
    ],
    'multiworld'            => [
        'answer'    => 'No you don\'t! You can create as many "campaigns" in the app as you want, and have them represent worlds, settings, or whatever you want. Once you have several campaigns, you can easily switch between them',
        'question'  => 'I am building several worlds in different settings, do I need a different account for each world?',
    ],
    'permissions'           => [
        'answer'    => 'Absolutely, this is why we built ' . config('app.name') . '! You can invite all your players to your campaigns, and give them roles and permissions. We built the system to be extremely flexible (you can both use an opt-in and opt-out configuration) to cover as many needs and situations as possible.',
        'question'  => 'I want to use ' . config('app.name') . ' to build my RPG world, but want my players to have access to some of the entities and edit their characters. Is this possible?',
    ],
    'plans'                 => [
        'answer'    => "The long term plans for " . config('app.name') . " are to build a versatile worldbuilding and campaign management tool that is system agnostic with system specific content managed by the community in the form of \"Community Templates\". A longer goal is to build tools that integrate with other platforms like Virtual Table Top apps to link those with the worlds of " . config('app.name') . ".
        
As for the second part, most hobby projects end up in burnout and the creator abandoning them. The Patreon is set up with the goal of me reducing my working hours to devote more time to " . config('app.name') . " without sacrificing my family's financial security, as well as covering the server costs. The project is also open source and can be picked up by the community if something were to ever happen to me. Each campaign's data can also be exported by the campaign admins once a day in case you are concerned about ever losing all your content.
"
,
        'question'  => 'What are the long term plans? What if Ilestis gets bored of working on ' . config('app.name') . '?',
    ],
    'show'                  => [
        'return'    => 'Return to the FAQ',
        'timestamp' => 'Last updated :date',
        'title'     => 'FAQ :name',
    ],
    'user-switch'           => [
        'answer'    => 'Permissions can get tricky, especially with large campaigns. As a campaign admin, you can navigate to the campaign\'s members page and click the "Switch" button which will appear next to non-admin members of the campaign. Doing so will log you in as that user and allow you to see the campaign as they would. This is the easiest way to check your campaign\'s permissions.',
        'question'  => 'My campaign permissions are set up, how can I test them?',
    ],
    'visibility'            => [
        'answer'    => 'Only the people that you invite to your campaign can see and interact with that you have created. Your data is private and always in your control.',
        'question'  => 'Can anyone see my world?',
    ],
];
