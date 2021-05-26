<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->bigInteger('projects_finished');
            $table->bigInteger('awards');
            $table->bigInteger('satisfied_customers');
            $table->bigInteger('employees');
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
        Schema::dropIfExists('our_experiences');
    }
}
