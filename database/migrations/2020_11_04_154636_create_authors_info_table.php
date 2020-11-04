<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
            $table->foreignId("author_id")->constrained();
            $table->string("nationality", 40)->nullable();
            $table->text("bio")->nullable();
            $table->string("image")->default("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRoruJdHvd85-z3_6W1OdTG9Kfl9ruAZBJNNw&usqp=CAU");
            $table->boolean("alive", 40)->default(0);
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
        Schema::dropIfExists('authors_info');
    }
}
