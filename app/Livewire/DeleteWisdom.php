<?php

namespace App\Livewire;

use App\Models\Wisdom;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteWisdom extends Component
{
    public $wisdom_id;


    public function render()
    {
        return view('livewire.delete-wisdom');
    }

    public function deleteWisdom()
    {
        $wisdom = Wisdom::find($this->wisdom_id);
        $wisdom->delete();
        $this->dispatch('wisdom-deleted');
        $this->dispatch('show-message', message: 'Wisdom Deleted')->to(FlashMessage::class);
    }
}
