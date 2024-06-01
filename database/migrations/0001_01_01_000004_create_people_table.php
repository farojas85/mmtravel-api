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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identity_document_type_id')->nullable()
                ->constrained('identity_document_types', 'id')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->string('document_number', 20);
            $table->string('first_name');
            $table->string('paternal_surname')->nullable();
            $table->string('maternal_surname')->nullable();
            $table->foreignId('gender_id')->nullable()->constrained('genders', 'id')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->string('number_phone')->nullable();
            $table->string('address', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
