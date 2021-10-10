<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages reçus') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has("success"))
            <div class="alert">
                {{session()->get("success")}}
            </div>
            @endif
            @foreach($messages as $message)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="transform:translateX(10px)">
                    <u>
                        <h3 style="font-size:20px">
                            @if(auth()->user()->id == $message->envoyeur)
                            Vous
                            @else
                            membre n°{{$message->envoyeur}}:
                            @endif
                        </h3>
                    </u>
                    <h2 style="font-weight:bold">{{$message->contenu}}</h2>
                </div>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</x-app-layout>