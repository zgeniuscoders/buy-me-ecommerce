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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\Conversation::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId("sender_id")
                ->constrained('users')
                ->onDelete('cascade');

            $table->text("message")->default("");
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
        Schema::dropIfExists('messages');
    }
};
