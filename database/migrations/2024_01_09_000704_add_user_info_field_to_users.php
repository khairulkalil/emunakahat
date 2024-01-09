<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('icNumber')->nullable()->after('email');
            $table->string('maritalStatus')->nullable()->after('email');
            $table->string('race')->nullable()->after('email');
            $table->string('nationality')->nullable()->after('email');
            $table->string('education')->nullable()->after('email');
            $table->string('currentAddress')->nullable()->after('email');
            $table->string('job')->nullable()->after('email');
            $table->string('jobAddress')->nullable()->after('email');
            $table->string('jobPhone')->nullable()->after('email');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('phone');
            $table->dropColumn('maritalStatus');
            $table->dropColumn('race');
            $table->dropColumn('nationality');
            $table->dropColumn('education');
            $table->dropColumn('currentAddress');
            $table->dropColumn('job');
            $table->dropColumn('jobAddress');
            $table->dropColumn('jobPhone');
        });
    }
};
