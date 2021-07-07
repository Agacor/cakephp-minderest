<?php
declare(strict_types=1);

namespace App\Controller;

class AjaxController extends AppController
{
    
    // BeforeRender
    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        $this->RequestHandler->renderAs($this, 'json');
    }

    // Autocomplete Clientes
    public function autocompleteClientes()
    {
        $this->loadModel('Clientes');
        $clientes = $this->Clientes
            ->find('autocomplete', [
                'search'=>$this->request->getQuery('search', '')
            ]);

        $this->set(compact('clientes'));
        $this->viewBuilder()->setOption('serialize', 'clientes');
    }

    // Autocomplete Productos
    public function autocompleteProductos($cliente_id = null)
    {
        $conditions = !empty($cliente_id) ? ['cliente_id' => $cliente_id] : [];

        $this->loadModel('Productos');
        $productos = $this->Productos
            ->find('autocomplete', [
                'search'=>$this->request->getQuery('search', '')
            ])
            ->where($conditions);

        $this->set(compact('productos'));
        $this->viewBuilder()->setOption('serialize', 'productos');
    }

    // Search Related Products
    public function searchRelatedProducts($producto_cliente_id)
    {
        $this->loadModel('ProductosClientes');
        $productoCliente = $this->ProductosClientes->get($producto_cliente_id);

        $relatedProducts = $this->ProductosClientes->find()->where([
            'ProductosClientes.cliente_id !=' => $productoCliente['cliente_id'],
            'ProductosClientes.producto_id' => $productoCliente['producto_id'],
        ]);

        $this->set(compact('relatedProducts'));
        $this->viewBuilder()->setOption('serialize', 'relatedProducts');
    }
    
}
