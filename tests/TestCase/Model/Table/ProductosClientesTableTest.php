<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductosClientesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductosClientesTable Test Case
 */
class ProductosClientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductosClientesTable
     */
    protected $ProductosClientes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductosClientes',
        'app.Productos',
        'app.Clientes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductosClientes') ? [] : ['className' => ProductosClientesTable::class];
        $this->ProductosClientes = $this->getTableLocator()->get('ProductosClientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductosClientes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
