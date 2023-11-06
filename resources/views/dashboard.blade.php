<style>
    .fundo-laranja {
        background-color: #FF8C00;
    }
    .suporte_helpdesk{
        text-align: center;
        color: white;
        font-size: 100px;
        padding: 50px 0 50px 0;
    }
    
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagina Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="fundo-laranja overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h6 class="suporte_helpdesk">Suporte Helpdesk</h6>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
