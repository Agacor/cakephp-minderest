<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nif
 * @property string $nombre
 * @property string|null $observaciones
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Producto[] $productos
 */
class Cliente extends Entity
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
        'nif' => true,
        'nombre' => true,
        'observaciones' => true,
        'created' => true,
        'modified' => true,
        'productos' => true,
    ];

    protected $_virtual = ['display', 'productosPropiosIds'];
    
    // Virtual Fields
    protected function _getDisplay()
    {
        if (isset($this->nombre)) {
            return (!empty($this->nif)) ? "[".$this->nif."] ".$this->nombre : $this->nombre;    
        }
        return NULL;
    }
    protected function _getProductosPropiosIds()
    {
        if (isset($this->ProductosPropios)) {
            return array_column($this->ProductosPropios, 'producto_id');
        }
        return NULL;
    }
    
}
