<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('genre')->nullable();
            $table->string('nom',250);
            $table->string('prenom',250);
            $table->string('email',250)->unique();
            $table->string('password');
            $table->date('date_naissance');
            $table->text('adresse');
            $table->string('code_postal',20);
            $table->string('ville',250);
            $table->string('telephone',20);
            $table->timestamp('date_update');
            

            $table->integer('statut')->default(1);
            $table->string('url_avatar',250)->nullable();
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
        Schema::dropIfExists('users');
    }
}
