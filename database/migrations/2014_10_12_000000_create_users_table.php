<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('username')->unique();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->integer('identification');
                $table->integer('type_id');
                $table->string('name');
                $table->string('last_name');
                $table->rememberToken();
                $table->timestamps();
                $table->boolean('is_active')->default(true);
            });
            DB::table('users')
            ->insert([
                'username' => 'JRobles',
                'email' => 'jrobles4@udi.edu.co',
                'password' => bcrypt('KBztBuPbuH7Vu@w'),
                'identification' => '1005245777',
                'type_id' => 1,
                'name' => 'Juan',
                'last_name' => 'Robles',
                'created_at' => '2020-10-23 00:09:20',
                'updated_at' => '2020-10-23 00:09:20',
                'is_active' => true,
            ]);
        }
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
