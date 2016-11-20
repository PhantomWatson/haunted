<?php
namespace App\Model\Table;

use App\Model\Entity\Player;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PlayersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table(false);
        $this->displayField('name');
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
            ->notEmpty('name');
        $validator
            ->notEmpty('sex');
        return $validator;
    }
}
