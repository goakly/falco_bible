<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property \Cake\I18n\Time $time
 * @property string $description
 * @property string $picture
 *
 * @property \App\Model\Entity\Player[] $players
 * @property \App\Model\Entity\Sponsor[] $sponsors
 * @property \App\Model\Entity\Team[] $teams
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
