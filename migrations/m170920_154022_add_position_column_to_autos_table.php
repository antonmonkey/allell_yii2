<?php

use yii\db\Migration;

/**
 * Handles adding position to table `autos`.
 */
class m170920_154022_add_position_column_to_autos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('autos', 'slug', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('autos', 'slug');
    }
}
