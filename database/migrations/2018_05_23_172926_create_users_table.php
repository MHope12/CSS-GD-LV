	<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;

	class CreateUsersTable extends Migration {

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('users', function(Blueprint $table)
			{
				$table->integer('idUser', true);
				$table->char('codPerson', 15);
				$table->string('namePerson', 50);
				$table->string('lastnamePerson', 50);
				$table->string('email', 45)->unique('email');
				$table->integer('typePerson_id')->index('per_typ');
				$table->integer('dependency_id')->index('per_dep');
				$table->rememberToken();
				$table->string('password');
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
