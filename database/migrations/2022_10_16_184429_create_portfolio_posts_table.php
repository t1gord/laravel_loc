<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned()->index();
            $table->string('image');
            $table->text('description');
            $table->integer('client_id')->unsigned()->index();
            $table->string('alias');
            $table->boolean('is_published');
            $table->dateTime('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('id');

            $table->foreign('category_id')->references('id')->on('portfolio_categories');
            $table->foreign('client_id')->references('id')->on('portfolio_clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_posts');
    }
}
