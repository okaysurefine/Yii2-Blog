<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m180306_204542_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
        ]);

        //create index for column  'user_id'
        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );

        //add foreign key for table 'user'
        $this->addForeignKey (
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        //create index for column  'article_id'
        $this->createIndex(
           'idx-article_id',
           'comment',
           'user_id'
        );

        //add foreign key for table 'article'
        $this->addForeignKey (
           'fk-article_id',
           'comment',
           'user_id',
           'user',
           'id',
           'CASCADE'
       );
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('comment');
    }
}
