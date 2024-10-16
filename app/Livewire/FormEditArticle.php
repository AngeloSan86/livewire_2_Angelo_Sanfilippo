<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class FormEditArticle extends Component
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

    public $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
 
    }


    public function updateArticle()
    {
        $this->validate();

        /*Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            
        ]);*/

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        $this->reset();

        session()->flash('message', 'Articolo modificato correttamente.');
    }





    
    public function render()
    {
        return view('livewire.form-edit-article');
    }
}
