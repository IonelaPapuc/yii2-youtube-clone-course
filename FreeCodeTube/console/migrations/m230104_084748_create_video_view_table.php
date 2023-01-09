<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video_view}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m230104_084748_create_video_view_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video_view}}', [
            'id' => $this->primaryKey(),
            'video_id' => $this->string(16)->notNull(),
            'user_id' => $this->integer(11),
            'created_at' => $this->integer(11),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-video_view-video_id}}',
            '{{%video_view}}',
            'video_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-video_view-video_id}}',
            '{{%video_view}}',
            'video_id',
            '{{%video}}',
            'video_id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-video_view-user_id}}',
            '{{%video_view}}',
            'user_id'
        );

        $this->addForeignKey(
            '{{%fk-video_view-user_id}}',
            '{{%video_view}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video_view}}');
    }
}
