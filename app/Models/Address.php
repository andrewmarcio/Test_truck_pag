<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Address.
 *
 * @package namespace App\Models;
 */
class Address extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "street_name",
        "number",
        "neighborhood",
        "city_id"
    ];

    public function city()
    {
        return $this->belongsTo(City::class, "city_id");
    }

}
