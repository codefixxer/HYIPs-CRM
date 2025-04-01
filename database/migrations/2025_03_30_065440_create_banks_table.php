<?php

// database/migrations/YYYY_MM_DD_create_banks_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('account_number');
            $table->enum('status', ['active', 'inactive'])->default('active');

                        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
