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
        Schema::create('ebooks', function (Blueprint $table) {
            $table->id();
            $table->string('kd_ebook', 7)->unique();
            $table->bigInteger('kd_mediakonten')->length(7)->unsigned()->unique();
            $table->text('judul');
            $table->text('kategori', 50);
            $table->text('pengarang', 50);
            $table->text('penerbit', 50);
            $table->text('bahasa', 5);
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
        Schema::dropIfExists('ebooks');
    }
};
