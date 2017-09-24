<?php

/**
 * Handles the creation for table `autos_images`.
 * Has foreign keys to the tables:
 *
 * - `autos_sale`
 */

use yii\db\Migration;

class m170924_135908_create_table_autos_images extends Migration
{
    public function Up()
    {
      $this->createTable('autos_sale_images', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
            'autos_sale_id' => $this->integer()->notNull(),
        ], 'ENGINE=InnoDB CHARSET=utf8'); 

      $this->addForeignKey(
        'fk-autos_sale_images-autos_sale_id',
        'autos_sale_images',
        'autos_sale_id',
        'autos_sale',
        'id',
        'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-autos_sale_images-autos_sale_id',
            'autos_sale_images'
        );

        $this->dropTable('autos_sale_images');
    }

}
