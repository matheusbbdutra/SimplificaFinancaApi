<?php

namespace App\Infrastructure\Persistence\Eloquent\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardModel extends Model
{
    protected $table = 'cards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'account_id',
        'banner_id',
        'name',
        'limit',
        'due_date',
        'card_number',
        'expiry_date'
    ];
    protected $dates = ['due_date', 'expiry_date'];
    public $timestamps = true;

    public function account(): BelongsTo
    {
        return $this->belongsTo(AccountModel::class, 'account_id');
    }

    public function banner(): BelongsTo
    {
        return $this->belongsTo(BannerModel::class, 'banner_id');
    }
}
