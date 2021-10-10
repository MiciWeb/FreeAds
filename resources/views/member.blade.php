<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Envoyer un message') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:10px">
                @foreach($users as $user)
                @if(auth()->user()->id != $user->id)
                <h3 style="font-size:15px">{{$user->name}}</h3>
                <form action="{{ route('send') }}" method="post">
                    @csrf
                    <input type="hidden" name="receveur" value="{{$user->id}}">
                    <input type="text" name="contenu" id="">
                    <button type="submit" class="btn-primary">Envoyer</button>
                </form>
                @endif
                @endforeach
            </div>
            <br>
        </div>
    </div>
</x-app-layout>