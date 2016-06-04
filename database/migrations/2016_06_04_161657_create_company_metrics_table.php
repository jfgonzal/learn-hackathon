<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_metrics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->nullable();
            $table->double('growth_percent_over_quarter')->nullable();
            $table->double('revenue')->nullable();
            $table->integer('satisfaction')->nullable();
            $table->integer('employee_count')->nullable();
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
        Schema::drop('company_metrics');
    }
}
