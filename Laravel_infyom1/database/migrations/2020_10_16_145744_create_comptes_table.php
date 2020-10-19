<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operations_id')->unsigned();
            $table->foreign('operations_id')->references('id')->on('operations');
            $table->string('accountnumber');
            $table->integer('clerib');
            $table->string ('typecompte');
            $table->string('solde');
            $table->string('datecreation');
            $table->timestamps();
            $table->softDeletes();
        
 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
