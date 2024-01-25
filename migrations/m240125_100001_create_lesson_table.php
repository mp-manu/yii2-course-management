<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lesson}}`.
 */
class m240125100001_create_lesson_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lesson}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->null(),
            'video' => $this->string(255)->notNull(),
            'learned' => $this->integer(2)->defaultValue(0),
            'created_at' => $this->dateTime(),
            'created_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lesson}}');
    }
}
