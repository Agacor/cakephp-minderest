<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public $autoId = false;

    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up()
    {
        $this->table('clientes')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('nif', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('observaciones', 'text', [
                'comment' => 'El campo de observaciones viene a representar simplemente una columna más del total de columnas que podria tener un cliente.',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'comment' => 'Podría usarse CURRENT_TIMESTAMP como valor predeterminado, en este caso lo delegaremos en el código',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'nif',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'nombre',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('productos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('mpn', 'string', [
                'comment' => 'Manufacturer Part Number',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('descripcion', 'text', [
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'comment' => 'Podría usarse CURRENT_TIMESTAMP como valor predeterminado, en este caso lo delegaremos en el código',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'mpn',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'nombre',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->addIndex(
                [
                    'nombre',
                    'descripcion',
                ],
                ['type' => 'fulltext']
            )
            ->create();

        $this->table('productos_clientes')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('producto_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('cliente_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'comment' => 'Podría usarse CURRENT_TIMESTAMP como valor predeterminado, en este caso lo delegaremos en el código',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'cliente_id',
                    'nombre',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'producto_id',
                    'cliente_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'cliente_id',
                ]
            )
            ->addIndex(
                [
                    'producto_id',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->addIndex(
                [
                    'nombre',
                ]
            )
            ->create();

        $this->table('productos_clientes')
            ->addForeignKey(
                'cliente_id',
                'clientes',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'producto_id',
                'productos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down()
    {
        $this->table('productos_clientes')
            ->dropForeignKey(
                'cliente_id'
            )
            ->dropForeignKey(
                'producto_id'
            )->save();

        $this->table('clientes')->drop()->save();
        $this->table('productos')->drop()->save();
        $this->table('productos_clientes')->drop()->save();
    }
}
