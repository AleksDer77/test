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
        Schema::table('product_property_value', function (Blueprint $table) {
            $table->index('product_id');
        });

        Schema::table('property_values', function (Blueprint $table) {
            $table->index('value');
        });

        Schema::table('properties', function (Blueprint $table) {
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::table('product_property_value', function (Blueprint $table) {
//            $table->dropIndex(['product_id']);
//        });
//
//        Schema::table('property_values', function (Blueprint $table) {
//            $table->dropIndex(['value']);
//        });
//
//        Schema::table('properties', function (Blueprint $table) {
//            $table->dropIndex(['name']);
//        });
    }
};
