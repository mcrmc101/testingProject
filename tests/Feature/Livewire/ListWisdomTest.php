<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ListWisdom;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ListWisdomTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(ListWisdom::class)
            ->assertStatus(200);
    }


    /** @test */
    public function can_list_wisdoms(): void
    {
        Livewire::test(ListWisdom::class)
            ->assertStatus(200)
            ->assertViewHas('wisdoms');
    }
}
