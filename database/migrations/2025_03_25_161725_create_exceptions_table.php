<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceptionsTable extends Migration
{
    public function up()
    {
        Schema::create('exceptions', function (Blueprint $table) {
            $table->id();
            $table->string('error_type'); 
            $table->text('message');      
            $table->text('trace')->nullable();
            $table->string('url')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exceptions');
    }
}
