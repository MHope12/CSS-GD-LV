<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //City
        Schema::table('city', function(Blueprint $table)
		{
            $table->foreign('department_id')
            ->references('codDeprt')
            ->on('department')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        
        //Edoc
        Schema::table('edoc', function(Blueprint $table)
		{

            $table->foreign('mail_id')
            ->references('idMail')
            ->on('mailE')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        //Folder
        Schema::table('folder', function(Blueprint $table)
		{
            $table->foreign('client_id')
            ->references('idClient')
            ->on('clients')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        //Folder User
        Schema::table('folder_user', function(Blueprint $table)
		{
            $table->foreign('folder_id')
            ->references('idFolder')
            ->on('folder')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('user_id')
            ->references('idUser')
            ->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        //Mail Dependency
        Schema::table('dependency_mail', function(Blueprint $table)
		{
            $table->foreign('mail_id')
            ->references('idMail')
            ->on('mailE')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('dependency_id')
            ->references('idDependency')
            ->on('dependency')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        //Mail
        Schema::table('mailE', function(Blueprint $table)
		{
            $table->foreign('storagew_id')
            ->references('idStorageWay')
            ->on('storageway')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('folder_id')
            ->references('idFolder')
            ->on('folder')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('city_id')
            ->references('idCity')
            ->on('city')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        //Permission Roles
        Schema::table('permission_role', function(Blueprint $table)
		{
            $table->foreign('permission_id')
            ->references('idPermission')
            ->on('permission')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('role_id')
            ->references('idRole')
            ->on('role')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        //Role User
        Schema::table('role_user', function(Blueprint $table)
		{
            $table->foreign('role_id')
            ->references('idRole')
            ->on('role')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('user_id')
            ->references('idUser')
            ->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
        
        //User
        Schema::table('users', function(Blueprint $table)
		{
            $table->foreign('typePerson_id')
            ->references('idTypePerson')
            ->on('typeperson')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('dependency_id')
            ->references('idDependency')
            ->on('dependency')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
