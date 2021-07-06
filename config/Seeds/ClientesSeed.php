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
                'nif' => '11111111A',
                'nombre' => 'Cliente 1',
                'observaciones' => NULL,
                'created' => '2021-07-06 19:57:48',
                'modified' => '2021-07-06 19:57:50',
            ],
            [
                'id' => '2',
                'nif' => '22222222B',
                'nombre' => 'Cliente 2',
                'observaciones' => NULL,
                'created' => '2021-07-06 19:57:48',
                'modified' => '2021-07-06 19:57:50',
            ],
            [
                'id' => '3',
                'nif' => '33333333C',
                'nombre' => 'Cliente 3',
                'observaciones' => NULL,
                'created' => '2021-07-06 19:57:48',
                'modified' => '2021-07-06 19:57:50',
            ],
            [
                'id' => '4',
                'nif' => '44444444D',
                'nombre' => 'Cliente 4',
                'observaciones' => NULL,
                'created' => '2021-07-06 20:01:52',
                'modified' => '2021-07-06 20:05:05',
            ],
            [
                'id' => '5',
                'nif' => '55555555E',
                'nombre' => 'Cliente 5',
                'observaciones' => 'Observaciones',
                'created' => '2021-07-06 20:01:52',
                'modified' => '2021-07-06 20:05:06',
            ],
            [
                'id' => '6',
                'nif' => '66666666F',
                'nombre' => 'Cliente 6',
                'observaciones' => NULL,
                'created' => '2021-07-06 20:01:52',
                'modified' => '2021-07-06 20:05:07',
            ],
            [
                'id' => '7',
                'nif' => '77777777G',
                'nombre' => 'Cliente 7',
                'observaciones' => NULL,
                'created' => '2021-07-06 20:03:40',
                'modified' => '2021-07-06 20:05:07',
            ],
            [
                'id' => '8',
                'nif' => '88888888H',
                'nombre' => 'Cliente 8',
                'observaciones' => NULL,
                'created' => '2021-07-06 20:03:40',
                'modified' => '2021-07-06 20:05:08',
            ],
            [
                'id' => '9',
                'nif' => '99999999I',
                'nombre' => 'Cliente 9',
                'observaciones' => NULL,
                'created' => '2021-07-06 20:03:40',
                'modified' => '2021-07-06 20:05:08',
            ],
            [
                'id' => '10',
                'nif' => '211111111J',
                'nombre' => 'Cliente 10',
                'observaciones' => NULL,
                'created' => '2021-07-06 20:05:03',
                'modified' => '2021-07-06 20:05:09',
            ],
        ];

        $table = $this->table('clientes');
        $table->insert($data)->save();
    }
}
