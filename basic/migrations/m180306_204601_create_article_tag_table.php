<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m180306_204601_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer()
        ]);

        //create index for column  'article_id'
        $this->createIndex(
            'tag_article_article_id',
            'article_tag',
            'article_id'
        );

        //add foreign key for table 'article'
        $this->addForeignKey (
            'tag_article_article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        //create index for column  'tag_id'
        $this->createIndex(
           'idx_tag_id',
           'article_tag',
           'tag_id'
        );

        //add foreign key for table 'tag'
        $this->addForeignKey (
           'fk-tag_id',
           'article_tag',
           'tag_id',
           'tag',
           'id',
           'CASCADE'
       );
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('article_tag');
    }
}
