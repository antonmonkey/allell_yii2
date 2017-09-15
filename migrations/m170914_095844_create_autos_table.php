<?php

use yii\db\Migration;

/**
 * Handles the creation of table `autos`.
 */
class m170914_095844_create_autos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('autos', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('autos');
    }
}
