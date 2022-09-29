<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('nim', 10)->unique();
            $table->string('nama', 50);
            $table->date('tgl_lahir');
            $table->string('fas_foto', 20);
            $table->string('kelamin', 10);
            $table->string('alamat', 50);
            $table->string('tlp', 14);
            $table->string('email', 40)->unique();
            $table->string('github', 40);
            $table->string('prodi', 20);
            $table->char('angkatan', 4);
            $table->enum('status_agt', ['nonaktif', 'aktif', 'kehormatan'])->default('nonaktif');
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
        Schema::drop('member');
    }
};
