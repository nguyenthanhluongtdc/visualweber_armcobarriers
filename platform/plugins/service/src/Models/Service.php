<?php

namespace Platform\Service\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;

class Service extends BaseModel
{
    use EnumCastable, SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
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
