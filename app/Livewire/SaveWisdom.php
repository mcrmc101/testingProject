<?php

namespace App\Livewire;

use App\Models\Wisdom;
use Livewire\Component;
use Livewire\Attributes\On;

class SaveWisdom extends Component
{
    public $wisdom;

    #[On('wisdom-gained')]
    public function render()
    {
        return view('livewire.save-wisdom');
    }

    #[On('wisdom-gained')]
    public function updateWisdom($wisdom)
    {
        $this->wisdom = $wisdom;
    }

    public function saveWisdom()
    {
        Wisdom::create(['wisdom' => $this->wisdom]);
        $this->dispatch('wisdom-saved');
        $this->dispatch('show-message', message: 'Wisdom Saved')->to(FlashMessage::class);
    }
}
