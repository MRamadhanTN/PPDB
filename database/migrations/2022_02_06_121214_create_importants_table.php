<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('stage_id');
            $table->foreignId('academy_year_id');
            $table->string('ijazah')->nullable();
            $table->string('skhun');
            $table->string('raport1');
            $table->string('raport2');
            $table->string('raport3');
            $table->string('raport4');
            $table->string('raport5');
            $table->string('poor_letter')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('importants');
    }
}
