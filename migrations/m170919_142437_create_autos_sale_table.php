<?php

use yii\db\Migration;

/**
 * Handles the creation of table `autos_sale`.
 */
class m170919_142437_create_autos_sale_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('autos_sale', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'image' => $this->string(),
            'date' => $this->datetime(),
            'auto_type_id' = > $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('autos_sale');
    }
}
