<?php

namespace App\Infrastructure\Persistence\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BannerModel extends Model
{
    protected $table = 'banners';
    protected $primaryKey = 'id';
    protected $fillable = ['bandeira'];
    public $timestamps = true;

    public function cards(): HasMany
    {
        return $this->hasMany(CardModel::class, 'banner_id');
    }
}
