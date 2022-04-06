<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FeatureGroupModulFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_group_modul_feature', function (Blueprint $table) {
            $table->foreignId("feature_group_id")->constrained();
            $table->bigInteger("modul_feature_id");
            $table->integer("type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_group_modul_feature');
    }
}
