<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->boolean('need')->default(false);
            $table->boolean('has')->default(false);
            $table->boolean('continuing_education')->default(false);
            $table->boolean('government_contracting')->default(false);
            $table->boolean('importing_exporting')->default(false);
            $table->boolean('starting_business')->default(false);
            $table->boolean('strategic_planning')->default(false);
            $table->boolean('building_business_plan')->default(false);
            $table->boolean('hiring')->default(false);
            $table->boolean('insurance')->default(false);
            $table->boolean('site_selection')->default(false);
            $table->boolean('marketing')->default(false);
            $table->boolean('social_media')->default(false);
            $table->boolean('technology')->default(false);
            $table->boolean('connectivity')->default(false);
            $table->boolean('cybersecurity')->default(false);
            $table->boolean('financial_assistance')->default(false);
            $table->boolean('financial_planning')->default(false);
            $table->boolean('legal_aid')->default(false);
            $table->boolean('trademark')->default(false);
            $table->boolean('permitting')->default(false);
            $table->boolean('succession_planning')->default(false);
            $table->boolean('other')->default(false);
            $table->string('other_info')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_metas');
    }
}
