<?php
namespace Bootstrap4\View;

use App\View\AppView as BaseAppView;

class AppView extends BaseAppView
{

    public function initialize(): void
    {
        parent::initialize();
        
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