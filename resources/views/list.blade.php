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
                <form action="{{route('delete',['id'=>$ad->id])}}" method="GET">
                    @csrf
                    <button type="submit" style="float:right;margin:8px 10px"><i class="fa fa-trash"></i></button>
                </form>
                <form action="{{route('edit',['id'=>$ad->id])}}" method="GET">
                    @csrf
                    <button type="submit" style="float:right;margin:8px 5px"><i class="fa fa-edit"></i></button>
                </form>
                <img style="width:100px;height:100px;float:left" src="images/{{$ad->photographie}}" alt="">
                <div style="transform:translateX(10px);width:100px">
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