<?php

namespace App\Infrastructure\Persistence\Eloquent\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionTypeModel extends Model
{
    protected $table = 'transaction_types';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'account_id'];
    public $timestamps = true;

    public function account(): BelongsTo
    {
        return $this->belongsTo(AccountModel::class, 'account_id');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(TransactionModel::class, 'transaction_type_id');
    }
}
