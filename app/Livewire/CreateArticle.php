<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required', message: 'Devi inserire un titolo.')]
    #[Validate('min:3', message: 'Il titolo deve essere lungo minimo 3 caratteri.')] 
    public $title;

    #[Validate('required', message: 'Devi inserire un sottotitolotitolo.')]
    #[Validate('min:3', message: 'Il sottotitolo deve essere lungo minimo 3 caratteri.')]
    public $subtitle;

    #[Validate('required', message: 'Devi inserire un testo.')]
    #[Validate('min:3', message: 'Il testo deve essere lungo minimo 3 caratteri.')]
    public $body;

    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            
        ]);

        $this->reset();

        session()->flash('message', 'Articolo creato!');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
