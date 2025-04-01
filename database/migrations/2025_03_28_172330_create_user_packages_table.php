<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_user_packages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_id')->constrained()->onDelete('cascade');
            $table->decimal('investment_amount', 10, 2);
            $table->decimal('total_profit', 10, 2)->default(0);
            $table->enum('status', ['active', 'completed', 'withdrawn'])->default('active');
            $table->date('start_date');
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('user_packages');
    }
}
