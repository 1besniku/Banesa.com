<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShpalljetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shpalljets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('is_aproved');
            $table->string('emri');
            $table->string('mbiemri');
            $table->string('emaili');
            $table->string('nr_tel');
            $table->string('kategoria')->index();
            $table->string('llojishpalljes')->nullable()->index();
            $table->string('garazhda')->nullable()->index();
            $table->string('soba_oxhak')->nullable()->index();
            $table->string('shtepi_re')->nullable()->index();
            $table->string('shtepi_vequar')->nullable()->index();
            $table->string('rinovuar')->nullable()->index();
            $table->string('mobiluar')->nullable()->index();
            $table->string('uji')->nullable()->index();
            $table->string('ballkon')->nullable()->index();
            $table->string('energji_elektrike')->nullable()->index();
            $table->string('ndertes_montuse')->nullable()->index();
            $table->string('ndertes_ngurt')->nullable()->index();
            $table->string('ndertes_nentoksore')->nullable()->index();
            $table->string('kat_cati')->nullable()->index();
            $table->string('ashensor')->nullable()->index();
            $table->string('interfon')->nullable()->index();
            $table->string('bodrum')->nullable()->index();
            $table->string('dublex')->nullable()->index();
            $table->string('siperfaqe_ujore')->nullable()->index();
            $table->string('pyll')->nullable()->index();
            $table->string('vend_peshkim')->nullable()->index();
            $table->string('vend_skijim')->nullable()->index();
            $table->string('tok')->nullable()->index();
            $table->string('fush')->nullable()->index();
            $table->string('asfalt')->nullable()->index();
            $table->string('leje_ndertimi')->nullable()->index();
            $table->string('adresa')->nullable()->index();
            $table->string('siperfaqja')->nullable()->index();
            $table->string('komuna')->nullable()->index();
            $table->string('titulli')->nullable()->index();
            $table->text('komenti');
            $table->string('qmimi')->nullable()->index();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('shpalljets');
    }
}
