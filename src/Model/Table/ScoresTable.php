<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scores Model
 *
 * @method \App\Model\Entity\Score newEmptyEntity()
 * @method \App\Model\Entity\Score newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Score[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Score get($primaryKey, $options = [])
 * @method \App\Model\Entity\Score findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Score patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Score[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Score|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Score saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Score[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Score[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Score[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Score[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ScoresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('scores');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 30)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        // $validator
        //     ->scalar('score')
        //     ->requirePresence('score', 'create')
        //     ->notEmptyString('score');

        //     return $validator;

         $validator
            ->scalar('score')
            ->requirePresence('score', 'create')
            ->notEmptyString('score', 'required score');
        //     ->add('score', 'custom', [
        //     'rule' => [$this,'score_check'],
        //     'message' => 'invalid score'
        //     ////////////////////////////
            
        // ]);
        return $validator;

    }
}
