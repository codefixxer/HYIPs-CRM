<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_withdrawals_table.php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ensures foreign key constraint with the 'users' table
            $table->foreignId('trans_id')->constrained('transactions')->onDelete('cascade'); // References 'transactions' table, not 'trans'
            $table->decimal('withdrawal_amount', 10, 2);
            $table->string('account_number');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamp('requested_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->text('bank_name')->nullable();
            $table->text('admin_note')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdrawals');
    }
}
