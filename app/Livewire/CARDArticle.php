<?php

namespace App\Livewire;

use Livewire\Component;

class CARDArticle extends Component
{
    public $article;
    
    public function render()
    {
        return view('livewire.c-a-r-d-article');
    }
}
