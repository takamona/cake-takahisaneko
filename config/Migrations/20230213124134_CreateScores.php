<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateScores extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('scores');
        $table
        ->addColumn("name","string",[
            "limit"=>30,
            "null" => false
        ])
        ->addColumn("score","text",[
            "limit"=>3,
        ])

        ->addColumn("created","datetime")
        ->addColumn("modified","datetime")

        ->create();
    }
}
