<?php namespace WhSol\Reservation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDlistTable extends Migration
{

    public function up()
    {
        if ( !Schema::hasTable('whsol_download_list') )
        {
            Schema::create('whsol_download_list', function($table)
            {
                $table->increments('id');
                $table->string('title');
                $table->boolean('published')->default(false);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::drop('whsol_download_list');
    }

}
