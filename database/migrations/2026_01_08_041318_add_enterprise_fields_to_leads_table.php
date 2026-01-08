<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('job_title')->nullable()->after('company');
            $table->string('industry')->nullable()->after('job_title');
            $table->string('inquiry_type')->default('general')->after('industry');
        });
    }

    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn(['job_title', 'industry', 'inquiry_type']);
        });
    }
};
