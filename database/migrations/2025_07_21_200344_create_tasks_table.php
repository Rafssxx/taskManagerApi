<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('description');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreign('id_status')->references('id')->on('status_task');
        });
    }
     */
//    public function down(): void
  //  {
    //    Schema::dropIfExists('tasks');
   // }
    //
};

