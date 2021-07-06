<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProductosController extends AppController
{
    
    public function initialize(): void
    {
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


    // Modal Add
    public function modalAdd()
    {
        $this->viewBuilder()->setLayout('modal_form');



    }
    
}
