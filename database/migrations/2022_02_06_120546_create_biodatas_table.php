<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('stage_id');
            $table->foreignId('academy_year_id');
            $table->foreignId('provinces_id');
            $table->foreignId('regencies_id');
            $table->foreignId('districts_id');
            $table->integer('no_peserta')->unique();
            $table->integer('nspn');
            $table->string('name_school');
            $table->integer('no_hp')->unique();
            $table->enum('gender',['l','p'])->unique();
            $table->string('village');
            $table->integer('nik');
            $table->integer('sibling');
            $table->integer('child_to');
            $table->string('place_birth');
            $table->integer('age');
            $table->text('address');
            $table->enum('religion', ['islam','kristen','katholik','hindu','budha','kong_hu_chu']);
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('pos_code');

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
        Schema::dropIfExists('biodatas');
    }
}
