<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SaveWisdom;
use App\Models\Wisdom;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class SaveWisdomTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(SaveWisdom::class)
            ->assertStatus(200);
    }


    /** @test */
    public function can_save_wisdom(): void
    {
        $text = fake()->text();
        Livewire::test(SaveWisdom::class)
            ->set('wisdom', $text)
            ->call('saveWisdom');
        $this->assertDatabaseHas('wisdoms', [
            'wisdom' => $text,
        ]);
    }

    /** @test */
    public function can_dispatch_wisdom_saved_event(): void
    {
        Livewire::test(SaveWisdom::class)
            ->set('wisdom', 'Wrinkly fingers? Try this one weird trick')
            ->call('saveWisdom')
            ->assertDispatched('wisdom-saved');
    }
}
