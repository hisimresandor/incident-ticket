<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hibajegyek') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tárgy</th>
                                <th>Tartalom</th>
                                <th>Beküldő neve</th>
                                <th>Beküldő email-címe</th>
                                <th><a href="{{ route('tickets.index', ['orderBy' => 'created_at']) }}">Létrehozva</a></th>
                                <th><a href="{{ route('tickets.index', ['orderBy' => 'due_date']) }}">Esedékesség</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($tickets) == 0)
                                <td colspan="6" class="text-center fw-bold">Nem található hibajegy!</td>
                            @endif
                            @foreach ($tickets as $ticket)
                                <x-ticket-line :ticket="$ticket" />
                            @endforeach
                        </tbody>
                    </table>

                    {{ $tickets->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
