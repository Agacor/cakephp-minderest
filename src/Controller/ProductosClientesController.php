<?php
declare(strict_types=1);

namespace App\Controller;

class ProductosClientesController extends AppController
{
    
    public function initialize(): void
    {
        parent::initialize();

        $this->set('pageHeader', __('Productos Clientes'));
        $this->set('sidebarMenu', 'ProductosClientes');
    }

    // Index
    public function index()
    {
        $this->loadModel('ProductosClientes');
        $productosClientes = $this->ProductosClientes
            ->find('searchWords', [
                'search' => $this->request->getQuery('search'),
                'columns' => ['nombre', 'Producto.mpn', 'Cliente.nif', 'Cliente.nombre'],
            ])
            ->contain([
                'Cliente', 'Producto',
            ])
            ->order([
                'Cliente.nombre', 'ProductosClientes.nombre'
            ]);

        $this->set(compact('productosClientes'));
    }


    /*********************************
     * ENTITY ACTIONS
     ********************************/
    
    // Delete
    public function delete($producto_cliente_id) 
    {
        $this->loadModel('ProductosClientes');
        $entity = $this->ProductosClientes->get($producto_cliente_id);
        if ($this->ProductosClientes->delete($entity)){
            $this->Flash->success(__('Producto Cliente Eliminado.'));
        } else {
            $this->Flash->entityErrors($entity, ['params' => [
                'fallback' => __('No se pudo ELIMINAR el Producto de Cliente. Inténtelo de nuevo.'),
            ]]);
        }

        return $this->redirect($this->referer());
    }

}
