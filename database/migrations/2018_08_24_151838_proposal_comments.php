<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProposalComments extends Migration
{
    /**
     * Table name 
     * 
     * @var string
     */
    protected $table = 'proposal_comments';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->index(); // parent comment
            $table->integer('proposal_id')->index();
            $table->text('comment');
            $table->loggers();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
