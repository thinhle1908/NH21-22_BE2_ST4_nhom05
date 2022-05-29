<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function (Blueprint $table) {
            $table->id("comment_id");
            $table->string("comment",255);
            $table->integer("comment_product_id");
            
            $table->string("comment_name");
            $table->string("comment_date");
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('comments');
    }
}
