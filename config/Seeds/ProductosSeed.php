<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Productos seed.
 */
class ProductosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'mpn' => 'MPN1',
                'nombre' => 'Producto 1',
                'descripcion' => 'Descripcion Producto 1',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '2',
                'mpn' => 'MPN2',
                'nombre' => 'Producto 2',
                'descripcion' => 'Descripcion Producto 2',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '3',
                'mpn' => 'MPN3',
                'nombre' => 'Producto 3',
                'descripcion' => 'Descripcion Producto 3',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '4',
                'mpn' => 'MPN4',
                'nombre' => 'Producto 4',
                'descripcion' => 'Descripcion Producto 4',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '5',
                'mpn' => 'MPN5',
                'nombre' => 'Producto 5',
                'descripcion' => 'Descripcion Producto 5',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '6',
                'mpn' => 'MPN6',
                'nombre' => 'Producto 6',
                'descripcion' => 'Descripcion Producto 6',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '7',
                'mpn' => 'MPN7',
                'nombre' => 'Producto 7',
                'descripcion' => 'Descripcion Producto 7',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '8',
                'mpn' => 'MPN8',
                'nombre' => 'Producto 8',
                'descripcion' => 'Descripcion Producto 8',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '9',
                'mpn' => 'MPN9',
                'nombre' => 'Producto 9',
                'descripcion' => 'Descripcion Producto 9',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
            [
                'id' => '10',
                'mpn' => 'MPN10',
                'nombre' => 'Producto 10',
                'descripcion' => 'Descripcion Producto 10',
                'ean13' => NULL,
                'created' => '2021-07-07 18:17:03',
                'modified' => '2021-07-07 18:17:03',
            ],
        ];

        $table = $this->table('productos');
        $table->insert($data)->save();
    }
}
