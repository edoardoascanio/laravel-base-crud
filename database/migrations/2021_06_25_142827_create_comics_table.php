<?php

use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Console\Migrations\TableGuesser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('comics', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->string("title", 50);
            $table->text("description")->nullable();
            $table->integer("price")->nullable();
            $table->string("series", 50)->nullable();
            $table->date("sale_date")->nullable();
            $table->string("type")->nullable();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn("id");
            $table->dropColumn("title");
            $table->dropColumn("description");
            $table->dropColumn("price");
            $table->dropColumn("series");
            $table->dropColumn("sale_date");
            $table->dropColumn("type");  
        });
    }
}
