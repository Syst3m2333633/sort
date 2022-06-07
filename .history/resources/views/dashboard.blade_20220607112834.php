<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('OnSort') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="#" class="text-lg font-medium text-gray-900">
                        <i class="fas fa-plus-circle"></i>
                        <a href="/Sort/public/dashboard" alt="onSort"><img src="css/img/icon.png"/></a>
                        <p>Date du jour : {{ date('d/m/Y') }}, et il est : {{ date('H:i') }}</p>
                        <p>Participant : {{ auth()->user()->name }}</p>
                        <h3>Filtrer les sorties</h3>
                        <label>Campus</label>
                        {{$campuses = App\Models\Campus::all();}}
                        @foreach ($campuses as $campus)
                        <select>
                            <option value="">{{ $campus.name }}</option>
                        </select>
                        @endforeach
                        Créer une sortie
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
