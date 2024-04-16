<?php

namespace Tests\Feature\Livewire;

use App\Livewire\FlashMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FlashMessageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(FlashMessage::class)
            ->assertStatus(200);
    }
    /** @test */
    public function it_hears_flash_message_event(): void
    {
        Livewire::test(FlashMessage::class)
            ->dispatch('show-message', message: 'Test Message')
            ->assertSee('Test Message');
    }
}
