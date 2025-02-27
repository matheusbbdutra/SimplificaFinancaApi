<?php

namespace App\Infrastructure\Persistence\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];
    public $timestamps = true;

    public function wallets(): BelongsToMany
    {
        return $this->belongsToMany(
            WalletModel::class,
            'account_wallet',
            'account_id',
            'wallet_id'
        );
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
