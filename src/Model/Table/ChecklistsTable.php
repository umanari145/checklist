<?php
namespace App\Model\Table;

use App\Model\Entity\Checklist;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Checklists Model
 *
 */
class ChecklistsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('checklists');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('item', 'create')
            ->notEmpty('item');

        $validator
            ->add('meta_deleted', 'valid', ['rule' => 'boolean'])
            ->requirePresence('meta_deleted', 'create')
            ->notEmpty('meta_deleted');

        return $validator;
    }

    public function getAllCheckList(){
    	$tableBookTitles = TableRegistry::get('BookTitles');
    	$query = $tableBookTitles->find();
    	var_dump($query);
    	exit;
    }
}
