<?php

return [
    [
        'name' => 'Solutions',
        'flag' => 'solution.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'solution.create',
        'parent_flag' => 'solution.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'solution.edit',
        'parent_flag' => 'solution.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'solution.destroy',
        'parent_flag' => 'solution.index',
    ],
];
