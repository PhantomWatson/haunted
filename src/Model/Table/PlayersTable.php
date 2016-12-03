<?php
namespace App\Model\Table;

use App\Model\Entity\Player;
use Cake\Network\Exception\InternalErrorException;
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
    public function getTitle($quests, $sex)
    {
        $titleComponents = [];
        if (strstr($quests, 'c') ) {
            $titleComponents[] = $this->getTitleComponent('c');
        }
        if (strstr($quests, '2') || strstr($quests, 'd') ) {
            $titleComponents[] = $this->getTitleComponent('2');
        }
        if (strstr($quests, '7') ) {
            $titleComponents[] = $this->getTitleComponent('7');
        }
        if (strstr($quests, '0') ) {
            $titleComponents[] = $this->getTitleComponent('0');
        }
        if (strstr($quests, '6') ) {
            $titleComponents[] = $this->getTitleComponent('6');
        }
        if (strstr($quests, '5')) {
            $titleComponents[] = $this->getTitleComponent('5', $sex);
        }

        if ($titleComponents) {
            return 'The '.implode(' ', $titleComponents);
        }
        return '';
    }

    /**
     * Returns the part of the player's title associated with quest $q
     *
     * @param string $quest Quest identifier
     * @param null|string $sex
     * @return string
     * @throws InternalErrorException
     */
    public function getTitleComponent($quest, $sex = null)
    {
        switch ($quest) {
            case 'c':
                return 'Shameful';
            case '2':
            case 'd':
                return 'Heroic';
            case '7':
                return 'Patriot';
            case '0':
                return 'Savior';
            case '6':
                return 'Pirate';
            case '5':
                return ($sex == 'f') ? 'Empress' : 'Emperor';
        }
        throw new InternalErrorException('Cannot get title component for quest ' . $quest);
    }
}
