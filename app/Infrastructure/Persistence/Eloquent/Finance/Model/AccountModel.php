<?php

namespace App\Infrastructure\Persistence\Eloquent\Finance\Model;

use App\Infrastructure\Persistence\Eloquent\User\Model\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'user_id', 'amount'];
    public $timestamps = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id');
    }

    public function cards(): HasMany
    {
        return $this->hasMany(CardModel::class, 'account_id');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(TransactionModel::class, 'account_id');
    }
}
