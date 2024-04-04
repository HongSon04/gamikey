<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_account_stores', function (Blueprint $table) {
            //
            $table->string('used_by_email')->nullable();
            $table->string('used_by_user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_account_stores', function (Blueprint $table) {
            //
            $table->dropColumn('used_by_email');
            $table->dropColumn('used_by_user_id');
        });
    }
};
