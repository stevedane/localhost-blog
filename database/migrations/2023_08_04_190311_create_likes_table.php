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
        Schema::create('likes', function (Blueprint $table) {
            $table->id('id_like');
            $table->foreignid('id_post')->constrained(table: 'posts', indexName: 'id_post');
            $table->foreignid('id_user')->constrained(table: 'users', indexName: 'id_user');
            $table->foreignid('id_com')->constrained(table: 'comments', indexName: 'id_com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
