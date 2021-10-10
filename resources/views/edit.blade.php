<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier son annonce') }}
        </h2>
    </x-slot>

    @foreach($posts as $post)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:30px">
                <form method="POST" action="{{ route('edit-save') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" name="titre" value="{{$post->titre}}">
                    <br> <br> <label for="description">Description</label>
                    <input type="text" name="description" id="description" value="{{$post->description}}"></input>
                    <br> <br> <label for="prix">Prix</label>
                    <input type="text" class="form-control" name="prix" value="{{$post->prix}}">
                    <br> <br> <label for="title">Photos</label>
                    <input type="file" name="image" id="" value="{{$post->photographie}}">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Modifier mon annonce</button>
            </div>
            </form>
        </div>
    </div>
    @endforeach
</x-app-layout>