<div>

    <div class="overflow-auto p-4 mt-6">
        <table class="table table-auto w-full">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wisdoms as $wisdom)
                    <tr wire:key="{{ $wisdom->id }}">
                        <td>
                            {!! $wisdom->wisdom !!}
                        </td>
                        <td>
                            <livewire:delete-wisdom :wisdom_id="$wisdom->id" :key="$wisdom->id" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $wisdoms->onEachSide(1)->links() }}

</div>
