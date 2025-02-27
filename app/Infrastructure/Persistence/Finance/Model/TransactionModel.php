<?php

namespace App\Infrastructure\Persistence\Finance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'account_id',
        'description',
        'amount',
        'transaction_type_id',
        'release_date',
        'due_date',
        'category_id',
        'sub_category_id',
        'destination_account_id',
        'recurrence',
        'installment',
        'installments',
        'card_id',
    ];

    protected $dates = ['release_date', 'due_date'];

    public $timestamps = true;

    public function account(): BelongsTo
    {
        return $this->belongsTo(AccountModel::class, 'account_id');
    }

    public function destinationAccount(): BelongsTo
    {
        return $this->belongsTo(AccountModel::class, 'destination_account_id');
    }

    public function transactionType(): BelongsTo
    {
        return $this->belongsTo(TransactionTypeModel::class, 'transaction_type_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategoryModel::class, 'sub_category_id');
    }

    public function card(): BelongsTo
    {
        return $this->belongsTo(CardModel::class, 'card_id');
    }
}
