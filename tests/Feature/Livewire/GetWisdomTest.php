<?php

namespace Tests\Feature\Livewire;

use App\Livewire\GetWisdom;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class GetWisdomTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(GetWisdom::class)
            ->assertStatus(200);
    }


    /** @test */
    public function can_get_wisdom(): void
    {
        Livewire::test(GetWisdom::class)
            ->assertStatus(200)
            ->assertViewHas('wisdom');
    }

    /** @test */
    public function it_dispatches_wisdom_gained_event(): void
    {
        Livewire::test(GetWisdom::class)
            ->call('getWisdom')
            ->assertDispatched('wisdom-gained');
    }
}
