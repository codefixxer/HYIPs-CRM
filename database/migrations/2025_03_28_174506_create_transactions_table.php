<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_transactions_table.php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_id')->constrained()->onDelete('cascade');
            $table->decimal('transaction_amount', 10, 2);
            $table->string('transaction_id');
            $table->string('payment_receipt')->nullable();
            $table->enum('status', ['pending', 'completed', 'rejected'])->default('pending');
            $table->decimal('total_balance', 10, 2)->default(0);
            $table->decimal('total_profit', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
