<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_information', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->text('site_description');
            $table->string('site_keyword');
            $table->string('email');
            $table->string('no_telp');
            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->string('twitter_url');
            $table->string('address');
            $table->string('favicon');

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
        Schema::dropIfExists('site_information');
    }
}
