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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('products')->cascadeOnDelete();
            $table->string('erp_id');
            $table->string('ar_name');
            $table->string('en_name');
            $table->string('ar_different');
            $table->string('en_different');
            $table->string('is_show');
            $table->string('is_service');
            $table->string('sellable');
            $table->string('rating');
            $table->string('price');
            $table->string('tax_percent');
            $table->string('ar_description');
            $table->string('en_description');
            $table->string('ar_keywords');
            $table->string('en_keywords');
            $table->string('ar_meta_description');
            $table->string('en_meta_description');
            $table->string('ar_img_description');
            $table->string('en_img_description');
            $table->string('ar_url');
            $table->string('en_url');
            $table->string('special_sign');
            $table->string('quantity');
            $table->string('cl_created_by');
            $table->string('cl_date_created');
            $table->string('cl_updated_by');
            $table->string('deleg_user');
            $table->string('cl_date_updated');
            $table->string('cl_organization_id');
            $table->string('group_id');
            $table->string('page_id');
            $table->string('visible');
            $table->string('serial_id');
            $table->string('auto_notes');
            $table->string('is_enable');
            $table->string('max_serial_id');
            $table->string('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
