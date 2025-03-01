<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('accounts');
            $table->string('description');
            $table->decimal('amount', 10, 2);
            $table->foreignId('transaction_type_id')->constrained('transaction_types');
            $table->date('release_date');
            $table->date('due_date');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->foreignId('destination_account_id')->nullable()->constrained('accounts');
            $table->string('recurrence')->nullable();
            $table->integer('installment')->nullable();
            $table->integer('installments')->nullable();
            $table->foreignId('card_id')->nullable()->constrained('cards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
