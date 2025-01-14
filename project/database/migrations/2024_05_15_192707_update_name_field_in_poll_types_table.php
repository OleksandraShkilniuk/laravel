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
        Schema::table('poll_types', function (Blueprint $table) {
            $table->string('name', 255)->change();
            $table->text('description')->nullable()->after('name')->change(docker);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('poll_types', function (Blueprint $table) {
            $table->string('name', 150)->change();
            $table->dropColumn('description');

        });
    }
};
