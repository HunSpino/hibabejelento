<?php

use App\Models\Terem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terems', function (Blueprint $table) {
            $table->id();
            $table->string('epulet');
            $table->integer('emelet');
            $table->integer('terem');
            $table->string('gep');
            $table->timestamps();
        });

        Schema::table('hibas', function (Blueprint $table) {
            $table->foreignIdFor(Terem::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hibas', function (Blueprint $table) {
            $table->dropForeign('hibas_terem_id_foreign');
        });
        Schema::dropIfExists('terems');
    }
};
