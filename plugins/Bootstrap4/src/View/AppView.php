<?php
namespace Bootstrap4\View;

use Cake\View\View;

class AppView extends View
{

    public function initialize(): void
    {
        // Form
        $this->Form->setTemplates([
            'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
            'label' => '<label class="control-label"{{attrs}}>{{text}}</label>',
        ]);
        // Paginator
        $this->Paginator->setTemplates([
            'ellipsis' => '<li class="ellipsis"><span>...</span></li>'
        ]);
        
    }
    
}