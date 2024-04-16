<?php

namespace App\Livewire;

use App\Models\Wisdom;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ListWisdom extends Component
{
    use WithPagination;

    #[On('wisdom-saved')]
    #[On('wisdom-deleted')]
    public function render()
    {
        return view('livewire.list-wisdom', [
            'wisdoms' => Wisdom::latest()->paginate(3)
        ]);
    }
}
