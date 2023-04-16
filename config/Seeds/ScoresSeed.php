<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Scores seed.
 */
class ScoresSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name"=> "test",
                "score" => "100",
                "created"    => "2020-05-02 10:00:00",
                "modified"   => "2020-05-02 10:00:00"
            ],
        
        ];


        $table = $this->table('scores');
        $table->insert($data)->save();
        
    }
}