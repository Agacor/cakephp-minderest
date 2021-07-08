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
        $clientes = $this->Clientes->find();

        $this->set(compact('clientes'));
    }


    // Modal Add
    public function modalAdd()
    {
        $this->viewBuilder()->setLayout('modal_form');
    }

    // Modal Vincular Productos
    public function modalVincularProductos($cliente_id = null)
    {
        $this->viewBuilder()->setLayout('modal_form');

        $this->loadModel('Clientes');
        $clientes = $this->Clientes->find('list');

        $this->set(compact('clientes'));
    }
    
}
