<?php

namespace App\Infrastructure\Persistence\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];
    public $timestamps = true;

    public function transactions(): HasMany
    {
        return $this->hasMany(TransactionModel::class, 'category_id');
    }

    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategoryModel::class, 'category_id');
    }
}
