<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des annonces') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has("success"))
            <div class="alert">
                {{session()->get("success")}}
            </div>
            @endif
            @foreach($add as $ad)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{$ad->photographie}}
                <h3 style="font-size:26px">{{$ad->titre}}</h3>
                <h2 style="font-weight:bold">{{$ad->prix}} EU</h2>
                <h5>{{$ad->description}}</h5>
                <p style="font-size:10px">{{$ad->created_at}}</p>
            </div>
            <br>
            @endforeach
            {{$add->links()}}
        </div>
    </div>
</x-app-layout>