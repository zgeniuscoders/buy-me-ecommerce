<?php

use App\Ecommerce\Products\Domain\Models\Product;
use App\Models\User;
use App\Profile\Domain\Enums\OrderStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->integer("quantity")->default(1);
            $table->enum("status", array_column(OrderStatusEnum::cases(), 'value'))->default('panding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
