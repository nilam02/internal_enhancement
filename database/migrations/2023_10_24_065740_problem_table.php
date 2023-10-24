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
        Schema::table('problems', function (Blueprint $table) {
            // $table->text('statement');
            $table->text('input');
            $table->text('output');

            for ($i = 1; $i <= 6; $i++) {
                $table->text('test_case' . $i)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('problems', function (Blueprint $table) {
            $table->dropColumn(['statement', 'input', 'output']);
            
            for ($i = 1; $i <= 6; $i++) {
                $table->dropColumn('test_case' . $i);
            }
        });
    }
};
