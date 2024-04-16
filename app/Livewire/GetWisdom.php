<?php

namespace App\Livewire;

use Exception;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GetWisdom extends Component
{
    public $wisdom;
    public $loading;


    public function render()
    {
        return view('livewire.get-wisdom');
    }

    public function getWisdom()
    {
        $this->loading = true;
        try {

            $response = Http::get('https://zenquotes.io/api/random/');
            if ($response->ok()) {
                $this->wisdom = $response->json()[0]['h'];
                $this->author = $response->json()[0]['a'];
                $this->dispatch('wisdom-gained', wisdom: $this->wisdom);
                $this->dispatch('show-message', message: 'Wisdom Gained')->to(FlashMessage::class);
                $this->loading = false;
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
