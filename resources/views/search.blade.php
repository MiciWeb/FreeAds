<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher une annonce') }}
        </h2>
        <div class="filter" style="display:flex">
            <select name="filters" id="filter" value="ok" form="form" style="transform: translateY(25px);margin-right: 10PX;padding-left: -8px;line-height: 5p;height: 43px;">
                <option value="">trier par</option>
                <option value="DESC">plus récents</option>
                <option value="ASC">plus anciens</option>
                <option value="2DESC">prix decroissant</option>
                <option value="2ASC">prix croissant</option>
            </select>
            <form action="{{ route('search') }}" method="post" id="form">
                @csrf
                <br><input type="search" name="search" id="" autocomplete="off">
                <button class="btn-primary" type="submit">Rechercher</button>
            </form>
        </div>
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
                <img style="width:100px;height:100px;float:left" src="images/{{$ad->photographie}}" alt="">
                <div style="transform:translateX(10px)">
                    <h3 style="font-size:26px">{{$ad->titre}}</h3>
                    <h2 style="font-weight:bold">{{$ad->prix}} EU</h2>
                    <h5>{{$ad->description}}</h5>
                    <p style="font-size:10px">{{$ad->created_at}}</p>
                </div>
            </div>
            <br>
            @endforeach
            {{$add->links()}}
        </div>
    </div>
</x-app-layout>