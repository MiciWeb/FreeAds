<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une annonce') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:30px">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <label for=" title">Titre</label>
                    <input type="text" class="form-control" name="titre">
                    <br> <br> <label for="description">Description</label>
                    <input type="text" name="description" id="description"></input>
                    <br> <br> <label for="prix">Prix</label>
                    <input type="text" class="form-control" name="prix">
                    <br> <br> <label for="title">Photos</label>
                    <input type="file" name="image" value="iphone.jpg" id="">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Soumettre mon annonce</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>