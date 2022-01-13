<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geographies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
        });

        Schema::create('geography_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('geography_id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('locale')->index();
            $table->unique(['geography_id', 'locale']);
            $table->foreign('geography_id')->references('id')
                    ->on('geographies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geography_translations');
        Schema::dropIfExists('geographies');
    }
}
