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
                'mpn' => 'G513IH-HN008',
                'nombre' => 'Asus Rog Strix G513IH HN008 AMD Ryzen 7 4800H 16GB 512GB SSD GTX 1650 156',
                'descripcion' => 'Eleva tu experiencia gaming con la potencia de fuego del ROG Strix . Con la potente CPU AMD Ryzen™ 7 4800H y la GPU GeForce GTX 1650 todo va más rápido, desde los juegos a la multitarea avanzada. Compite a toda velocidad en títulos de eSports .',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '2',
                'mpn' => '3E3C9EA',
                'nombre' => 'HP Pavilion Gaming 15-EC2015NS AMD Ryzen 7 5800H/16GB/512GB SSD/GTX 1650/15.6"',
                'descripcion' => 'HP Pavilion Gaming es un portátil para multijugadores y multitareas. No sacrifiques nada con el fino y potente portátil gaming HP Pavilion. Experimenta gráficos de alta calidad, potencia de procesamiento para juegos y realización de múltiples tareas, además de una refrigeración térmica mejorada para un rendimiento y estabilidad generales. Sumérgete en el juego gracias a una pantalla con bisel fino y audio optimizado. El equilibrio perfecto entre trabajar y jugar, para que puedas hacerlo todo.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '3',
                'mpn' => 'LH98QMNEBGC',
                'nombre' => 'Samsung LH98QMNEBGC Pantalla de Señalización LED 98" UltraHD 4K',
                'descripcion' => 'La claridad de la información es un elemento básico para el éxito, tanto a la hora de promocionar un nuevo producto en un comercio como al actualizar los horarios en un intercambiador de transporte. La Serie QMN de Samsung ayuda a las empresas a conseguir ese objetivo. Sus argumentos: una convincente calidad de imagen UHD, amplias opciones de conectividad y funcionamiento continuo 24 horas al día 7 días a la semana.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '4',
                'mpn' => '90LJ00E5-B00070',
                'nombre' => 'Asus ZenBeam Latte L1 Proyector LED Portátil 300 Lúmenes con Altavoz Bluetooth 10W',
                'descripcion' => 'Disfrute de experiencias envolventes de video y audio en la comodidad de su hogar con ASUS ZenBeam Latte L1. Con audio Harman Kardon, este exclusivo proyector portátil con forma de taza de café es el primero del mundo en presentar una estética de tela texturizada que se adapta a cualquier decoración del hogar. También ha recibido múltiples premios de diseño.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '5',
                'mpn' => '941-000112',
                'nombre' => 'Logitech G29 Driving Force Para PS5 PS4 PS3 PC',
                'descripcion' => 'Flípalo con tus juegos de conducción con el volante Logitech G29, un volante  compatible con PS4 y PS3 de magnífica construcción ¡Tira millas!',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '6',
                'mpn' => '9S6-3EA01H-007',
                'nombre' => 'MSI Optix G241VC 23.6" LED FullHD FreeSync Curva',
                'descripcion' => 'Optix G241VC utiliza el panel curvo Samsung de alta calidad con muchas características especiales para los jugadores, lo que les ayudará a disfrutar del maravilloso mundo del juego.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '7',
                'mpn' => '9S6-3BA9CH-001',
                'nombre' => 'MSI Pro MP241 23.8" LED IPS FullHD',
                'descripcion' => 'Te presentamos el monitor MSI Pro MP241 con pantalla FullHD y 23.8".',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '8',
                'mpn' => '2VN99AA#ABE',
                'nombre' => 'HP OMEN Sequencer Teclado Mecánico Gaming RGB Switch Blue',
                'descripcion' => 'Pásate al funcionamiento óptico. Sé más rápido. Maniobra a la velocidad de luz y saca ventaja a tus rivales gracias a la tecnología de conmutador óptico-mecánico líder en el sector del teclado mecánico HP OMEN Sequencer. Concebido para auténticos gamers, dando especial importancia a la personalización sin perder de vista la durabilidad.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '9',
                'mpn' => '1AS85A',
                'nombre' => 'HP Sprocket New Edition Impresora Fotográfica Bluetooth Perla',
                'descripcion' => 'Comparte el momento presente con fotos instantáneas de 5 x 7,6 cm (2 x 3 pulg.) desde tu móvil. Conecta fácilmente móviles a tu impresora HP Sprocket New Edition para que todos puedan imprimir y ver las fotos que compartes de tu evento. Revive cada uno de tus momentos de diversión con una aplicación increíble.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
            [
                'id' => '10',
                'mpn' => '2010200',
                'nombre' => 'Bresser Rex II Impresora 3D',
                'descripcion' => 'Impresora 3D Bresser Rex II de diseño compacto, con sistema de control de temperatura y pantalla táctil.',
                'created' => '2021-07-07 16:17:03',
                'modified' => '2021-07-07 16:17:03',
            ],
        ];

        $table = $this->table('productos');
        $table->insert($data)->save();
    }
}
