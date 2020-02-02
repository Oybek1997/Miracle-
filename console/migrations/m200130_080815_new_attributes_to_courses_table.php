<?php

use yii\db\Migration;

/**
 * Class m200130_080815_new_attributes_to_courses_table
 */
class m200130_080815_new_attributes_to_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200130_080815_new_attributes_to_courses_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200130_080815_new_attributes_to_courses_table cannot be reverted.\n";

        return false;
    }
    */
}
