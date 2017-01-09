<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });

        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('survey_id')->unsigned();

            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys');


        });

        Schema::create('votes', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('option_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('option_id')->references('id')->on('options');

        });

        Schema::table('users', function (Blueprint $table) {

            $table->integer('age')->unsigned();
            $table->enum('gender', ['male', 'female']);
            $table->enum('state', array(
                'Andalucia',
                'Madrid',
                'Cataluña',
                'Castilla y León',
                'Castilla y La Mancha',
                'Galicia',
                'Aragón',
                'Cantabria',
                'Asturias',
                'Valencia',
                'Murcia',
                'Extremadura',
                'Rioja',
                'Navarra',
                'País Vasco',
                'Baleares',
                'Canarias',
                'Ceuta',
                'Melilla',
            ));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
