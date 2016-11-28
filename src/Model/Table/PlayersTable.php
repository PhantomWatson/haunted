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

    /**
     * Returns the full title string for a player
     *
     * @param string $quests Quests
     * @return string
     */
    public function getTitle($quests)
    {
        $title = '';
        foreach (['c', '2', 'd', '5', '6', '7', '8'] as $quest) {
            if (strstr($quests, $quest)) {
                $title .= 'The';
                break;
            }
        }
        if (strstr($quests, 'c') ) {
            $title .= ' Shameful';
        }
        if (strstr($quests, '2') || strstr($quests, 'd') ) {
            $title .= ' Heroic';
        }
        if (strstr($quests, '7') ) {
            $title .= ' Patriot';
        }
        if (strstr($quests, '0') ) {
            $title .= ' Savior';
        }
        if (strstr($quests, '6') ) {
            $title .= ' Pirate';
        }
        if (strstr($quests, '5')) {
            $title .= ($sex == 'f') ? ' Empress' : ' Emperor';
        }
        foreach (['c', '2', 'd', '5', '6', '7', '8'] as $quest) {
            if (strstr($quests, $quest)) {
                $title .= ', ';
                break;
            }
        }
        return $title;
    }
}
