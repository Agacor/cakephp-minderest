<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosClientesFixture
 */
class ProductosClientesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'producto_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cliente_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nombre' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => 'Podría usarse CURRENT_TIMESTAMP como valor predeterminado, en este caso lo delegaremos en el código'],
        'modified' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'FK_productos_clientes_productos' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'created' => ['type' => 'index', 'columns' => ['created'], 'length' => []],
            'modified' => ['type' => 'index', 'columns' => ['modified'], 'length' => []],
            'nombre' => ['type' => 'index', 'columns' => ['nombre'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cliente_id_nombre' => ['type' => 'unique', 'columns' => ['cliente_id', 'nombre'], 'length' => []],
            'FK_productos_clientes_clientes' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['clientes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_productos_clientes_productos' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['productos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'producto_id' => 1,
                'cliente_id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'created' => 1625411183,
                'modified' => 1625411183,
            ],
        ];
        parent::init();
    }
}
