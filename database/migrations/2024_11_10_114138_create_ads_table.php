<?php

use App\Core\Domain\Enums\StatusEnum;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->nullable();
            $table->string('title');
            $table->string("status")->default(StatusEnum::DRAFT->value);
            $table->string('sub_title');
            $table->text('description')->nullable();
            $table->string('image');
            $table->string("url");
            $table->string('button_text');
            $table->date("start_at");
            $table->date("end_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
