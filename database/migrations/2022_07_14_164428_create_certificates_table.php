<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->morphs('certificatable');
            $table->foreignId("user_id")->constrained();
            $table->string("name");
            $table->string("issuing_organization");
            $table->integer("issue_month")->nullable();
            $table->integer("issue_year")->nullable();
            $table->integer("expiration_month")->nullable();
            $table->integer("expiration_year")->nullable();
            $table->boolean("doesnt_expire")->default(1);
            $table->string("credential_id")->nullable();
            $table->string("credential_url")->nullable();
            $table->integer("order");
            $table->boolean("status")->default(1);
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
        Schema::dropIfExists('certificates');
    }
}
