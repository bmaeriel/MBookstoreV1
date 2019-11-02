<?php
# @Author: maerielbenedicto
# @Date:   2019-11-02T16:37:59+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-02T16:40:09+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->integer('year')->unsigned();
            $table->string('isbn')->unique();
            $table->decimal('price',6,2);
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
        Schema::dropIfExists('books');
    }
}
