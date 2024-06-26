<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxas', function (Blueprint $table) {
            $table->id();
            $table->string('authority')->nullable();
            $table->string('year_first_report')->nullable();
            $table->text('reference')->nullable();
            $table->string('identification');
            $table->string('asisk_score')->nullable();
            $table->string('asisk_result')->nullable();
            $table->unsignedBigInteger('report_id');
            $table->unsignedBigInteger('taxa_level_id')->nullable();
            $table->unsignedBigInteger('taxa_species_status_id')->nullable();
            $table->unsignedBigInteger('taxa_population_status_id')->nullable();
            $table->unsignedBigInteger('taxa_abundance_id')->nullable();
            $table->unsignedBigInteger('taxa_viability_id')->nullable();
            $table->timestamps();

            $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
            $table->foreign('taxa_level_id')->references('id')->on('taxa_levels')->onDelete('set null');
            $table->foreign('taxa_species_status_id')->references('id')->on('taxa_species_statuses')->onDelete('set null');
            $table->foreign('taxa_population_status_id')->references('id')->on('taxa_population_statuses')->onDelete('set null');
            $table->foreign('taxa_abundance_id')->references('id')->on('taxa_abundances')->onDelete('cascade');
            $table->foreign('taxa_viability_id')->references('id')->on('taxa_viabilities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxas');
    }
}
