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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('specs');
            $table->text('notes');
            $table->string('city');
            $table->string('address');
            $table->string('cost')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->dateTime('expect_delivery_date')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('added_by')->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('last_updates_by')->nullable();
            $table->foreign('last_updates_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('status_id');
            $table->dropForeign('added_by');
            $table->dropForeign('last_updated_by');
        });

        Schema::dropIfExists('orders');
    }
};
