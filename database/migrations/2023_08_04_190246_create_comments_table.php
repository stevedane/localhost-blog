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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('id_com');
            $table->text('content');
            $table->date('date');
            $table->foreignId('id_user')->constrained(table: 'users', indexName:'comments_id_user');
            $table->foreignId('id_post')->constrained(table: 'posts', indexName:'comments_id_post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
