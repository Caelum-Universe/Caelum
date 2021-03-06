<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Sidebar Links
    |--------------------------------------------------------------------------
    |
    | Admin panel sidebar links.
    | Add links here to have them show up in the admin panel.
    | Users that do not have the listed power will not be able to
    | view the links in that section.
    |
    */

    'Admin' => [
        'power' => 'admin',
        'links' => [
            [
                'name' => 'User Ranks',
                'url' => 'admin/users/ranks'
            ]
        ]
    ],
    'Reports' => [
        'power' => 'manage_reports',
        'links' => [
            [
                'name' => 'Report Queue',
                'url' => 'admin/reports/pending'
            ]
        ]
    ],
    'Site' => [
        'power' => 'edit_pages',
        'links' => [
            [
                'name' => 'News',
                'url' => 'admin/news'
            ],
            [
                'name' => 'Sales',
                'url' => 'admin/sales'
            ],
            [
                'name' => 'Page Sections',
                'url' => 'admin/page-sections'
            ],
            [
                'name' => 'Page Categories',
                'url' => 'admin/page-categories'
            ],
            [
                'name' => 'Pages',
                'url' => 'admin/pages'
            ]
        ]
    ],
    'Users' => [
        'power' => 'edit_user_info',
        'links' => [
            [
                'name' => 'User Index',
                'url' => 'admin/users'
            ],
            [
                'name' => 'Invitation Keys',
                'url' => 'admin/invitations'
            ],
        ]
    ],
    'Queues' => [
        'power' => 'manage_submissions',
        'links' => [
            [
                'name' => 'Gallery Submissions',
                'url' => 'admin/gallery/submissions'
            ],
            [
                'name' => 'Gallery Currency Awards',
                'url' => 'admin/gallery/currency'
            ],
            [
                'name' => 'Prompt Submissions',
                'url' => 'admin/submissions'
            ],
            [
                'name' => 'Claim Submissions',
                'url' => 'admin/claims'
            ],
        ]
    ],
    'Grants' => [
        'power' => 'edit_inventories',
        'links' => [
            [
                'name' => 'Currency Grants',
                'url' => 'admin/grants/user-currency'
            ],
            [
                'name' => 'Item Grants',
                'url' => 'admin/grants/items'
            ],
            [
                'name' => 'Recipe Grants',
                'url' => 'admin/grants/recipes'
            ],
            [
                'name' => 'EXP Grants',
                'url' => 'admin/grants/exp'
            ],
            [
                'name' => 'Pet Grants',
                'url' => 'admin/grants/pets'
            ],
            [
                'name' => 'Gear Grants',
                'url' => 'admin/grants/gear'
            ],
            [
                'name' => 'Weapon Grants',
                'url' => 'admin/grants/weapons'
            ],
        ]
    ],
    'Masterlist' => [
        'power' => 'manage_characters',
        'links' => [
            [
                'name' => 'Create Character',
                'url' => 'admin/masterlist/create-character'
            ],
            [
                'name' => 'Create MYO Slot',
                'url' => 'admin/masterlist/create-myo'
            ],
            [
                'name' => 'Character Transfers',
                'url' => 'admin/masterlist/transfers/incoming'
            ],
            [
                'name' => 'Character Trades',
                'url' => 'admin/masterlist/trades/incoming'
            ],
            [
                'name' => 'Design Updates',
                'url' => 'admin/design-approvals/pending'
            ],
            [
                'name' => 'MYO Approvals',
                'url' => 'admin/myo-approvals/pending'
            ],
        ]
    ],
    'Genetics' => [
        'power' => 'view_hidden_genetics',
        'links' => [
            [
                'name' => 'Gene Groups',
                'url' => 'admin/genetics/genes'
            ],
            [
                'name' => 'Breeding Roller',
                'url' => 'admin/genetics/roller'
            ],
            [
                'name' => 'Breeding Logs',
                'url' => 'admin/genetics/logs'
            ],
        ]
    ],
    'Stats' => [
        'power' => 'edit_stats',
        'links' => [
            [
                'name' => 'Stats',
                'url' => 'admin/stats'
            ],
        ]
    ],
    'Levels' => [
        'power' => 'edit_levels',
        'links' => [
            [
                'name' => 'User Levels',
                'url' => 'admin/levels'
            ],
            [
                'name' => 'Character Levels',
                'url' => 'admin/levels/character'
            ],
        ]
    ],
    'Data' => [
        'power' => 'edit_data',
        'links' => [
            [
                'name' => 'Galleries',
                'url' => 'admin/data/galleries'
            ],
            [
                'name' => 'Character Categories',
                'url' => 'admin/data/character-categories'
            ],
            [
                'name' => 'Sub Masterlists',
                'url' => 'admin/data/sublists'
            ],
            [
                'name' => 'Rarities',
                'url' => 'admin/data/rarities'
            ],
            [
                'name' => 'Species',
                'url' => 'admin/data/species'
            ],
            [
                'name' => 'Subtypes',
                'url' => 'admin/data/subtypes'
            ],
            [
                'name' => 'Traits',
                'url' => 'admin/data/traits'
            ],
            [
                'name' => 'Character Titles',
                'url' => 'admin/data/character-titles'
            ],
            [
                'name' => 'Shops',
                'url' => 'admin/data/shops'
            ],
            [
                'name' => 'Currencies',
                'url' => 'admin/data/currencies'
            ],
            [
                'name' => 'Prompts',
                'url' => 'admin/data/prompts'
            ],
            [
                'name' => 'Loot Tables',
                'url' => 'admin/data/loot-tables'
            ],
            [
                'name' => 'Items',
                'url' => 'admin/data/items'
            ],
            [
                'name' => 'Recipes',
                'url' => 'admin/data/recipes'
            ],
            [
                'name' => 'Forums',
                'url' => 'admin/forums'
            ],
            [
            'name' => 'Pets',
            'url' => 'admin/data/pets'
            ],
        ],
    ],
    'World.Expanded' => [
        'power' => 'manage_world',
        'links' => [
            [
                'name' => 'Locations',
                'url' => 'admin/world/locations'
            ],
            [
                'name' => 'Fauna',
                'url' => 'admin/world/faunas'
            ],
            [
                'name' => 'Flora',
                'url' => 'admin/world/floras'
            ],
            [
                'name' => ' Events',
                'url' => 'admin/world/events'
            ],
            [
                'name' => ' Figures',
                'url' => 'admin/world/figures'
            ],
            [
                'name' => 'Factions',
                'url' => 'admin/world/factions'
            ],
            [
                'name' => 'Concepts',
                'url' => 'admin/world/concepts'
            ],
        ]
    ],
    'Claymores' => [
        'power' => 'edit_claymores',
        'links' => [
            [
                'name' => 'Gear',
                'url' => 'admin/gear'
            ],
            [
                'name' => 'Weapons',
                'url' => 'admin/weapon'
            ],
            [
                'name' => 'Character Classes',
                'url' => 'admin/character-classes'
            ],
            [
                'name' => 'Character Skills',
                'url' => 'admin/data/skills'
            ]
        ]
    ],
    'Raffles' => [
        'power' => 'manage_raffles',
        'links' => [
            [
                'name' => 'Raffles',
                'url' => 'admin/raffles'
            ],
        ]
    ],
    'Settings' => [
        'power' => 'edit_site_settings',
        'links' => [
            [
                'name' => 'Site Settings',
                'url' => 'admin/settings'
            ],
            [
                'name' => 'Site Images',
                'url' => 'admin/images'
            ],
            [
                'name' => 'File Manager',
                'url' => 'admin/files'
            ],
            [
                'name' => 'Theme Manager',
                'url' => 'admin/themes'
            ],
        ]
    ],
];
