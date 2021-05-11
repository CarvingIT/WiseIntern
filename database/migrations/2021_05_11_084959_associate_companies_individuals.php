<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssociateCompaniesIndividuals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associate_companies_individuals', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 100);
            $table->enum('type', ['company', 'individual']);
            $table->string('phone');
            //$table->binary('logo');
            $table->text('description');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE associate_companies_individuals ADD logo MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associate_companies_individuals');
    }
}
