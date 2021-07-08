<?php
declare(strict_types=1);

namespace App\Controller;

class ProductosController extends AppController
{
    
    public function initialize(): void
    {
        parent::initialize();

        $this->set('pageHeader', __('Productos'));
        $this->set('sidebarMenu', 'Productos');
    }

    // Index
    public function index()
    {
        $this->loadModel('Productos');
        $productos = $this->Productos->find();

        $this->set(compact('productos'));
    }


    /*********************************
     * ENTITY ACTIONS
     ********************************/
    
    // Delete
    public function delete($producto_id) 
    {
        $this->loadModel('Productos');
        $entity = $this->Productos->get($producto_id);
        if ($this->Productos->delete($entity)){
            $this->Flash->success(__('Producto Eliminado.'));
        } else {
            $this->Flash->entityErrors($entity, ['params' => [
                'fallback' => __('No se pudo ELIMINAR el Producto. Inténtelo de nuevo.'),
            ]]);
        }

        return $this->redirect($this->referer());
    }


    /****************************
     * VISTAS MODALES
     ****************************/

    // Modal Add
    public function modalAdd($cliente_id = null)
    {
        $this->viewBuilder()->setLayout('modal_form');

        if ($this->request->is('post')) {
            
            $this->loadModel('Productos');
            $entity = $this->Productos->newEntity($this->request->getData());

            if ($this->Productos->save($entity)) {
                $this->Flash->success(__('Producto creado.'));
            } else {
                $this->Flash->entityErrors($entity, ['params' => [
                    'fallback' => __('No se pudo crear el Producto. Inténtelo de nuevo.'),
                ]]);
            }
            return $this->redirect($this->referer());
        }
        
        $this->loadModel('Clientes');
        $clientes = $this->Clientes->find('list');
        
        $this->set(compact('clientes'));
    }

    // Modal Edit
    public function modalEdit($producto_id)
    {        
        $this->viewBuilder()->setLayout('modal_form');     
        
        $this->loadModel('Productos');
        $producto = $this->Productos->get($producto_id);
        
        if ($this->request->is('post')) {
            $entity = $this->Productos->patchEntity($producto, $this->request->getData());
            if ($this->Productos->save($entity)) {
                $this->Flash->success(__('Producto Actualizado.'));
            } else {
                $this->Flash->entityErrors($entity, ['params' => [
                    'fallback' => __('No se pudo Editar el Producto. Inténtelo de nuevo.'),
                ]]);
            }
            return $this->redirect($this->referer());
        }
        
        $this->loadModel('Clientes');
        $clientes = $this->Clientes->find('list');
        
        $this->set(compact('producto', 'clientes'));
    }

    // Modal View
    public function modalView($producto_id)
    {        
        $this->viewBuilder()->setLayout('modal_tabs');     
        
        $this->loadModel('Productos');
        $producto = $this->Productos->get($producto_id, [
            'contain' => [
                'ProductosClientes',
                'ProductosClientes.Cliente',
            ],
        ]);
        
        $this->set(compact('producto'));
    }
    
}
