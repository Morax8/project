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
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('header1');
            $table->string('header2');
            $table->string('descspan');
            $table->string('descstrong');
            $table->string('desch1');
            $table->string('desc');
            $table->string('jmljurusan');
            $table->string('jurusan');
            $table->string('descjurusan');
            $table->string('jmlsiswa');
            $table->string('siswa');
            $table->string('descsiswa');
            $table->string('jmlguru');
            $table->string('guru');
            $table->string('descguru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descriptions');
    }
};
