<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class FlashMessage extends Component
{

    public $message;

    public function render()
    {
        // dd($this->message);
        return view('livewire.flash-message');
    }


    #[On('show-message')]
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
