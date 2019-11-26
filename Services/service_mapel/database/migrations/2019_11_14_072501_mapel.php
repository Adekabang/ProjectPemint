<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //MapelTable migration 
        Schema::create('mapels',function(Blueprint $table){             
            $table->increments('id');            
            $table->string('nama_mapel');             
            $table->integer('guru_id');                          
            $table->text('description');             
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
        //
    }
}
