<?php

use yii\db\Migration;

/**
 * Handles the creation of table `autos_sale`.
 */
class m170918_154508_create_autos_sale_table extends Migration
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
            'date' => $this->date(),
            'auto_type_id' => $this->integer(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('autos_sale');
    }
}
