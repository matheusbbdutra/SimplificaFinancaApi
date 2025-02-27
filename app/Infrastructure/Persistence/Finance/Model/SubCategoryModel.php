<?php

namespace App\Infrastructure\Persistence\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategoryModel extends Model
{
    protected $table = 'sub_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'category_id'];
    public $timestamps = true;

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(TransactionModel::class, 'sub_category_id');
    }
}
