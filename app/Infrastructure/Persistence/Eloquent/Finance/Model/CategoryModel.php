<?php

namespace App\Infrastructure\Persistence\Eloquent\Finance\Model;

use App\Infrastructure\Persistence\Eloquent\User\Model\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'user_id'];
    public $timestamps = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(TransactionModel::class, 'category_id');
    }

    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategoryModel::class, 'category_id');
    }
}
