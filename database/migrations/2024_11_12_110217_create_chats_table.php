<?php

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sender_id");
            $table->foreignId("receiver_id");
            $table->text("message")->nullable();
            $table->string("file")->nullable();
            $table->string("filetype")->nullable();
            $table->date("edited_at")->nullable();
            $table->date("deleted_at")->nullable();
            $table->boolean("is_read")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
