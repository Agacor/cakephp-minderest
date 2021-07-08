<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $mpn
 * @property string $nombre
 * @property string|null $descripcion
 * @property string|null $ean13
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Cliente[] $clientes
 */
class Producto extends Entity
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
        'mpn' => true,
        'nombre' => true,
        'descripcion' => true,
        'ean13' => true,
        'created' => true,
        'modified' => true,
        'clientes' => true,
    ];

    protected $_virtual = ['display'];
    
    // Virtual Fields
    protected function _getDisplay()
    {
        if (isset($this->nombre)) {
            return (!empty($this->mpn)) ? "[".$this->mpn."] ".$this->nombre : $this->nombre;    
        }
        return NULL;
    }

}
