<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    protected function addForeignKey($thisTable, $thisColumn, $foreignTable, $foreignColumn = 'id')
    {
        Schema::table($thisTable, function (Blueprint $table)
            use ($thisTable, $thisColumn, $foreignTable, $foreignColumn) {
            $table->index($thisColumn);
            $table->foreign($thisColumn)
                ->references($foreignColumn)
                ->on($foreignTable);
        });
    }

    protected function dropForeignKey($table, $column)
    {
        Schema::table($table, function (Blueprint $table)
            use ($column) {
            $table->dropIndex([$column]);
            $table->dropForeign([$column]);
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->addForeignKey('entity_type_variables', 'entity_type_id', 'entity_types');
        $this->addForeignKey('entity_type_relationships', 'left_entity_type_id', 'entity_types');
        $this->addForeignKey('entity_type_relationships', 'right_entity_type_id', 'entity_types');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropForeignKey('entity_type_variables', 'entity_type_id');
        $this->dropForeignKey('entity_type_relationships', 'left_entity_type_id');
        $this->dropForeignKey('entity_type_relationships', 'right_entity_type_id');
    }
}
