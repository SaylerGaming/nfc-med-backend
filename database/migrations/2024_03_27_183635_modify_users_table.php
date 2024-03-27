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
            $table->dropColumn('hospital');
            $table->foreignId('hospital_id')->constrained()->nullable()->onDelete('cascade');
            $table->string('blood_type')->nullable();
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('blood_type');
            $table->dropColumn('slug');
            $table->dropForeign(['hospital_id']);
            $table->dropColumn('hospital_id');
            $table->string('hospital')->nullable();

        });
    }
};
