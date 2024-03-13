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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 100);
            $table->enum('type', ['company', 'individual']);
            $table->string('phone');
            $table->text('description');
            $table->timestamps();
        });

        // Adding the logo column as BLOB after table creation
        Schema::table('associate_companies_individuals', function (Blueprint $table) {
            $table->binary('logo')->after('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Dropping the table if it exists
        Schema::dropIfExists('associate_companies_individuals');
    }
}
