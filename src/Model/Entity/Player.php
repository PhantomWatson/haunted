<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Player
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'sex' => true,
        'gpa' => true
    ];
}