<?php

use App\Core\Domain\Enums\StatusEnum;
use App\Core\Domain\Models\Category;
use App\Ecommerce\Shop\Domain\Models\Store;
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
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Store::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->nullOnDelete();
            $table->string("name");
            $table->string("slug");
            $table->string("image");
            $table->string("images");
            $table->text("description");
            $table->integer("price");
            $table->integer("discount")->default(0);
            $table->string("status")->default(StatusEnum::DRAFT->value);
            $table->integer("qty");
            $table->boolean("has_delivered")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};
