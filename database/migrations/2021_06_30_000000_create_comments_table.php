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
		Schema::create('comments', function(Blueprint $table) {
			$table->integer('id', true)->comment('系統編號(自動增加)');
			$table->string('post_id', 50)->nullable()->comment('文章編號');
			$table->longText('messages')->nullable()->comment('文章評論');
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
		Schema::drop('comments');
	}

}
