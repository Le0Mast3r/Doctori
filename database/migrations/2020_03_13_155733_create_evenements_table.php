<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dateDepart');
            $table->string('title');
            $table->dateTime('dateFin');
            $table->integer('id_user')->unsigned()->default(0);
            $table->integer('id_doctor')->unsigned()->default(0);
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_doctor')->references('id')->on('doctors');
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
        Schema::dropIfExists('evenements');
        // $table->dropForeign(['user_id']);
        // $table->dropForeign(['doctor_id']);
        // $table->dropColumn('user_id');
        // $table->dropColumn('doctor_id');
    }
}
