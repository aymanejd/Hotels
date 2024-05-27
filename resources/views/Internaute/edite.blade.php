<x-master>
    <div style="width: 70%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <form action="{{ route('internautes.update',$internaute->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3 row">
                <div class="col">
                    <label for="nom" class="form-label">nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom',$internaute->nom) }}" placeholder="Entrer le nom" aria-describedby="nameHelp">
                    @error('nom')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="prenom" class="form-label">prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom',$internaute->prenom) }}" placeholder="Entrer le prenom" aria-describedby="prenomHelp">
                    @error('prenom')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="password" class="form-label">adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse',$internaute->adresse) }}" placeholder="Enter l'adresse" aria-describedby="adresse">
                    @error('adresse')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="Cin" class="form-label">Cin</label>
                    <input type="text" name="cin" id="Cin" class="form-control"value="{{ old('cin',$internaute->cin) }}" placeholder="Enter le Cin" >
                    @error('cin')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="date_naissance" class="form-label">date naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance',$internaute->date_naissance) }}" class="form-control">
                    @error('date_naissance')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
    
            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </div>
        </form>
    </div>
    
</x-master>
