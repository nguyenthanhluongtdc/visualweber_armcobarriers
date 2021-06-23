<?php

namespace Platform\Solution\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;

class Solution extends BaseModel
{
    use EnumCastable,SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_solutions';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
        'is_featured',

    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
