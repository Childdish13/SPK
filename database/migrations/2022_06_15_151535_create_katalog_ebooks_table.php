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
        Schema::create('katalog_ebooks', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('kd_mediakonten')->length(7)->unsigned();
            $table->text('judul');
            $table->smallInteger('tahun_terbit')->length(4)->unsigned();
            $table->text('kategori', 50);
            $table->bigInteger('harga')->unsigned();
            $table->text('segmen_pendidikan', 20);
            $table->text('flag_ebook', 5);
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
        Schema::dropIfExists('katalog_ebooks');
    }
};
