<?php

return [
    'linkable_to_page' => true,
    'per_page' => 30,
    'order' => [
        'id' => 'desc',
    ],
    'sidebar' => [
        'icon' => '<i class="bi bi-box"></i>',
        'weight' => 8,
    ],
    'permissions' => [
        'read cats' => 'Read',
        'create cats' => 'Create',
        'update cats' => 'Update',
        'delete cats' => 'Delete',
    ],
];
