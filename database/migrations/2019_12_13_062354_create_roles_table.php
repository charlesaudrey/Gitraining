<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Role;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('navigation_id')->index();
            $table->string('name');
            $table->boolean('show');
            $table->timestamps();

            $table->foreign('navigation_id')->references('id')->on('navigations')->onDelete('cascade');
        });

        Role::insert([
          [
            'name' => 'superadmin',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'name' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'name' => 'inventory',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'name' => 'accounting',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'name' => 'rooms',
            'created_at' => now(),
            'updated_at' => now(),
          ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
