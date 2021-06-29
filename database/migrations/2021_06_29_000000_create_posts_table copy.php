<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {
			$table->integer('id', true)->comment('系統編號(自動增加)');
			$table->string('title')->nullable()->comment('文章標題');
			$table->longText('content')->nullable()->comment('文章內容');
			$table->bigInteger('create_time')->nullable()->comment('創立時間');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
