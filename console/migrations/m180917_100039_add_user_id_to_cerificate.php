<?php

use yii\db\Migration;

/**
 * Class m180917_100039_add_user_id_to_cerificate
 */
class m180917_100039_add_user_id_to_cerificate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('certificate','user_id',$this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180917_100039_add_user_id_to_cerificate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180917_100039_add_user_id_to_cerificate cannot be reverted.\n";

        return false;
    }
    */
}
