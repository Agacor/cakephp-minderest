<?php
namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;

class MyHtmlHelper extends HtmlHelper
{
    
    public function modalLink($title, $url, $options = [])
    {
        $options['data-modal'] = $this->Url->build($url);
        return $this->link($title, '#', $options);
        return $this->tag('a', $title, $options);
    }
    
}