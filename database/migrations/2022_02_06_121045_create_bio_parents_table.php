<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_parents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('stage_id');
            $table->foreignId('academy_year_id');
            $table->enum('data_wali', ['ayah', 'ibu', 'wali', '-']);
            $table->enum('parent', ['lengkap', 'ayah', 'ibu', 'yatim_piatu']);
            $table->string('name_father');
            $table->string('name_mother');
            $table->string('work_father');
            $table->string('work_mother');
            $table->text('address_guardian');
            $table->enum('parent_income', ['-', '<500', '500-1000', '1000-2000', '2000-3000', '3000-5000', '>5000']);
            $table->integer('tanggungan');
            $table->integer('no_guardian');
            $table->string('guardian')->nullable();
            $table->string('description_guardian')->nullable();

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
        Schema::dropIfExists('bio_parents');
    }
}
