<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to drop the 'book_id' column.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Drop the 'book_id' column
            $table->dropColumn('book_id');
        });
    }

    /**
     * Reverse the migrations to restore the 'book_id' column if needed.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Re-add the 'book_id' column in case you rollback
            $table->string('book_id')->nullable();
        });
    }
};