<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultToTanggalInBlogTable extends Migration
{
    public function up(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->date('tanggal')->default(now())->change();
        });
    }

    public function down(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->date('tanggal')->nullable(false)->change();
        });
    }
};
