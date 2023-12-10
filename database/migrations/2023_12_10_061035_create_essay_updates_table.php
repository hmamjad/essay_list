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
        Schema::create('essay_updates', function (Blueprint $table) {
            $table->id();
            $table->string("sl_old");
            $table->string("user");
            $table->string('title');
            $table->longText('description_1')->nullable();
            $table->longText('description_2')->nullable();
            $table->longText('description_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essay_updates');
    }
};
