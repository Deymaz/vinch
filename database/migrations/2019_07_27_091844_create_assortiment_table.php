<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssortimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assortiment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
            $table->string("name", 200)->nullable();
            $table->integer("fao")->nullable();
            $table->string("type", 200)->nullable();
            $table->string("usage", 200)->nullable();
            $table->string("crop_potential", 200)->nullable();
            $table->string("drought_tolerance", 200)->nullable();
            $table->string("sufficient_moisture", 200)->nullable();
            $table->string("insufficient_moisture", 200)->nullable();
            $table->string("optimal_moisture", 200)->nullable(); //
            $table->string("processing", 200)->nullable();
            $table->string("ripeness_group", 200)->nullable();//група стиглості
            $table->string("sow_time", 200)->nullable();
            $table->string("details", 400)->nullable();
            $table->integer("vegetation_period_days")->nullable();
            $table->string("intensity", 200)->nullable();
            $table->string("herbicides_tolerance", 200)->nullable();
            $table->string("oleic_acid_content", 200)->nullable();
            $table->string("variety", 200)->nullable(); //
            $table->string("disinfectant", 150)->nullable(); //Протруйник
            $table->string("origin", 200)->nullable(); //Походження
            $table->string("protein_content", 150)->nullable();
            $table->string("group", 100)->nullable();
            $table->string("active_substance", 150)->nullable();
            $table->string("cost_rate_hectare", 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assortiment');
    }
}
