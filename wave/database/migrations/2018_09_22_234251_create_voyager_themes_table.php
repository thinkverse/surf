<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyager_themes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('folder')->unique();
            $table->boolean('active')->default(0);
            $table->string('version')->default('');
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
        Schema::dropIfExists('voyager_themes');
    }
};
