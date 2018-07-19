<?php

use yii\db\Migration;

/**
 * Handles the creation of table `certificate`.
 */
class m180719_140146_create_certificate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('certificate', [
            'id' => $this->primaryKey(),
            'sds' => $this->string()->notNull(),
            'certificate_num' => $this->string()->notNull(),
            'active_from' => $this->string()->notNull(),
            'active_to' => $this->string()->notNull(),
            'certification_body_information' => $this->text()->notNull(),
            'service_information' => $this->text()->notNull(),
            'manufacturer_information' => $this->text()->notNull(),
            'applicant_information' => $this->text()->notNull(),
            'meets_requirements' => $this->string(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('certificate');
    }
}
