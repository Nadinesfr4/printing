<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameadminToblog extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('admin', 'blog');
        Schema::table('blog', function (Blueprint $table) {
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('admin', 'blog');
        Schema::table('blog', function (Blueprint $table) {
        });
    }
};
