<?php
declare(strict_types=1);

namespace App\Controller;

class ClientesController extends AppController
{
    
    public function initialize(): void
    {
        parent::initialize();
        
        $this->set('pageHeader', __('Clientes'));
        $this->set('sidebarMenu', 'Clientes');
    }

    // Index
    public function index()
    {
        $this->loadModel('Clientes');
        $clientes = $this->Clientes->find()
            ->contain([
                'ProductosPropios' => function ($q){
                    $q->select([
                        'ProductosPropios.cliente_id',
                        'total' => $q->func()->count('ProductosPropios.cliente_id')
                    ])
                    ->group([
                        'ProductosPropios.cliente_id', 
                    ]);
                    return $q;
                },
            ]);

        $this->set(compact('clientes'));
    }


    /****************************
     * VISTAS MODALES
     ****************************/
    
    // Modal View
    public function modalView($cliente_id)
    {        
        $this->viewBuilder()->setLayout('modal_tabs');     
        
        $this->loadModel('Clientes');
        $cliente = $this->Clientes->get($cliente_id, [
            'contain' => [
                'ProductosPropios' => ['sort' => 'ProductosPropios.nombre'],
                'ProductosPropios.Producto',
            ],
        ]);

        // Productos Competencia
        $productosCompetencia = [];
        if (!empty($cliente['productosPropiosIds'])) {
            $this->loadModel('ProductosClientes');
            $productosCompetencia = $this->ProductosClientes->find()
                ->contain([
                    'Cliente', 'Producto',
                ])
                ->where([
                    'cliente_id !=' => $cliente_id,
                    'producto_id IN' => $cliente['productosPropiosIds'],    // ATENCIÓN: VirtualField \App\Model\Entity\Cliente
                ])
                ->order(['Cliente.nombre', 'ProductosClientes.nombre']);
        }
       
        $this->set(compact('cliente', 'productosCompetencia'));
    }
    
    // Modal Vincular Productos
    public function modalVincularProductos($cliente_id = null)
    {
        $this->viewBuilder()->setLayout('modal_form');

        $this->loadModel('Clientes');
        $cliente = !empty($cliente_id) ? $this->Clientes->get($cliente_id) : [];

        if ($this->request->is('post')) {
            $this->loadModel('ProductosClientes');
            $entity = $this->ProductosClientes->newEntity($this->request->getData());

            if ($this->ProductosClientes->save($entity)) {
                $this->Flash->success(__('Producto Vinculado a Cliente.'));
            } else {
                $this->Flash->entityErrors($entity, ['params' => [
                    'fallback' => __('No se pudo Vincular el Producto. Inténtelo de nuevo.'),
                ]]);
            }
            return $this->redirect($this->referer());
        }
        
        // Listado Clientes
        $clientes = $this->Clientes->find('list');

        $this->set(compact('clientes', 'cliente'));
    }
    
}
