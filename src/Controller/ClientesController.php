<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ClientesController extends AppController
{
    
    public function initialize(): void
    {
        $this->set('pageHeader', __('Clientes'));
    }

    public function index()
    {
        $this->loadModel('Clientes');
        $clientes = $this->Clientes->find();

        $this->set(compact('clientes'));
    }
    

}
