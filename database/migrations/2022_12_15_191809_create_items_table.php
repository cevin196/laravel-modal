<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('name');
            $table->float('price', 8, 2);
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
};
