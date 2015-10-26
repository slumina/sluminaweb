<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity.
 *
 * @property int $id
 * @property int $category_id
 * @property \App\Model\Entity\Category $category
 * @property string $brand
 * @property string $title
 * @property string $model_name
 * @property string $model_number
 * @property string $color
 * @property float $mrp
 * @property float $selling_price
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Item extends Entity
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
        'id' => false,
    ];
}
