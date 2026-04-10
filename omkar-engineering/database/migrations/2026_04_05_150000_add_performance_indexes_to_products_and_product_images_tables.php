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
        Schema::table('products', function (Blueprint $table) {
            $table->index('deleted_at');
            $table->index('updated_at');
        });

        Schema::table('product_images', function (Blueprint $table) {
            $table->index('product_id');
            $table->index('deleted_at');
            $table->index('updated_at');
            $table->index(['product_id', 'deleted_at', 'id'], 'product_images_product_deleted_id_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_images', function (Blueprint $table) {
            $table->dropIndex('product_images_product_deleted_id_index');
            $table->dropIndex(['product_id']);
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['updated_at']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['updated_at']);
        });
    }
};
