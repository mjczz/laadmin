<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
			Schema::create('students', function (Blueprint $table) {
					$table->increments('id');
					$table->string ('student_code',50)->default('');
					$table->string ('student_login',50)->default('');
					$table->string ('student_name',50)->default('');
					$table->string ('letter',50)->default('');
					$table->string ('encrypt',50)->default('');
					$table->string ('passwd',50)->default('');
					$table->string ('avatar',50)->default('');
					$table->smallInteger ('gender')->default(0);
					$table->string ('idcard',50)->default('');
					$table->string ('address',50)->default('');
					$table->string ('mobile',50)->default('');
					$table->string ('school',50)->default('');
					$table->string ('parent_name',50)->default('');
					$table->string ('parent_mobile',50)->default('');
					$table->smallInteger ('gradelevel')->default(0);
					$table->smallInteger ('grade')->default(0);
					$table->smallInteger ('city')->default(0);
					$table->smallInteger ('campus')->default(0);
					$table->integer('assistant')->default(0);
					$table->smallInteger ('loginnum')->default(0);
					$table->text('remark')->nullable();
					$table->string ('last_class_time',50)->default('');
					$table->smallInteger ('class_status')->default(0);
					$table->smallInteger ('listorder')->default(0);
					$table->smallInteger ('status')->default(0);
					$table->integer ('cuid')->default(0);
					$table->integer ('muid')->default(0);
					$table->integer ('crm_student_id')->default(0);
					$table->string ('crm_assistant',50)->default('');
					$table->string ('payee',50)->default('');
					$table->string ('bank',50)->default('');
					$table->string ('sub_branch',50)->default('');
					$table->string ('bank_card',50)->default('');
					$table->string ('class_campus',50)->default('');
					$table->string ('class_assistant',50)->default('');
					$table->string ('parent_mobile2',50)->default('');
					$table->string ('parent_name2',50)->default('');
					$table->integer ('first_assistant')->default(0);
					$table->integer ('first_ymd')->default(0);
					$table->string ('lesson_mode',50)->default('');
					$table->string ('first_class_time',50)->default('');
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
				Schema::dropIfExists('students');
		}
}
