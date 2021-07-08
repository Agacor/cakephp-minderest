<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Clientes seed.
 */
class ClientesSeed extends AbstractSeed
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
                'nif' => 'B73347494',
                'nombre' => 'PcComponentes S.L. ',
                'observaciones' => NULL,
                'created' => '2021-07-06 17:57:48',
                'modified' => '2021-07-06 17:57:50',
            ],
            [
                'id' => '2',
                'nif' => 'A62348107',
                'nombre' => 'Media Markt',
                'observaciones' => NULL,
                'created' => '2021-07-06 17:57:48',
                'modified' => '2021-07-06 17:57:50',
            ],
            [
                'id' => '3',
                'nif' => 'B01917335 ',
                'nombre' => 'Dynos',
                'observaciones' => NULL,
                'created' => '2021-07-06 17:57:48',
                'modified' => '2021-07-06 17:57:50',
            ],
            [
                'id' => '4',
                'nif' => 'A30114532',
                'nombre' => 'CD-ROM',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:01:52',
                'modified' => '2021-07-06 18:05:05',
            ],
            [
                'id' => '5',
                'nif' => 'B53166419',
                'nombre' => 'PcBox',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:01:52',
                'modified' => '2021-07-06 18:05:06',
            ],
            [
                'id' => '6',
                'nif' => 'B73332496',
                'nombre' => 'TiendaTR',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:01:52',
                'modified' => '2021-07-06 18:05:07',
            ],
            [
                'id' => '7',
                'nif' => 'B73105231 ',
                'nombre' => 'App Informática',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:03:40',
                'modified' => '2021-07-06 18:05:07',
            ],
            [
                'id' => '8',
                'nif' => 'B21372982',
                'nombre' => 'Pc Ocasión',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:03:40',
                'modified' => '2021-07-06 18:05:08',
            ],
            [
                'id' => '9',
                'nif' => 'B30526362',
                'nombre' => 'El Navegante',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:03:40',
                'modified' => '2021-07-06 18:05:08',
            ],
            [
                'id' => '10',
                'nif' => 'B30701924',
                'nombre' => 'Depau Sistemas S.L.',
                'observaciones' => NULL,
                'created' => '2021-07-06 18:05:03',
                'modified' => '2021-07-06 18:05:09',
            ],
        ];

        $table = $this->table('clientes');
        $table->insert($data)->save();
    }
}
