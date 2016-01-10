<?php
namespace App\Model\Table;

use App\Model\Entity\Checkdate;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Checkdates Model
 *
 */
class CheckdatesTable extends Table
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

        $this->table('checkdates');
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
            ->add('check_date', 'valid', ['rule' => 'date'])
            ->requirePresence('check_date', 'create')
            ->notEmpty('check_date');

        $validator
            ->add('has_checked', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('has_checked');

        $validator
            ->requirePresence('check_person', 'create')
            ->notEmpty('check_person');

        $validator
            ->allowEmpty('check_note');

        return $validator;
    }
}
