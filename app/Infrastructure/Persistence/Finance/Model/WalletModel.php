<?php

namespace App\Infrastructure\Persistence\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WalletModel extends Model
{
    protected $table = 'wallets';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'balance'];
    public $timestamps = true;

    public function accounts(): BelongsToMany
    {
        return $this->belongsToMany(
            AccountModel::class,
            'account_wallet',
            'wallet_id',
            'account_id'
        );
    }
}
