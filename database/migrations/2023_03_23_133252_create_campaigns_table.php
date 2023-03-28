<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('campaign_name');
            $table->string('client_name');
            $table->string('setup_domicile');
            $table->string('setup_age_start');
            $table->string('setup_age_end');
            $table->string('setup_gender');
            $table->string('setup_profession');
            $table->string('setup_martial_status');
            $table->string('setup_age_married');
            $table->integer('setup_total_respondent');
            $table->string('setup_respondent_blacklist');
            $table->text('message');
            $table->integer('status');
            $table->integer('total_blasting');
            $table->dateTime('blasting_endtime');
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
        Schema::dropIfExists('campaigns');
    }
}
