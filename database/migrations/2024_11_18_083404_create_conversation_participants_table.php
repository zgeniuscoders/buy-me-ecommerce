<?php

use App\Chat\Domain\Enum\ChatUserRoleEnum;
use App\Models\Conversation;
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
        Schema::create('conversation_participants', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Conversation::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->enum('role', array_map(fn($case) => $case->value, ChatUserRoleEnum::cases()))
                ->default(ChatUserRoleEnum::MEMBER->value);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversation_participants');
    }
};
