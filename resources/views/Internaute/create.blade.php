<x-master>
    <div style="width: 70%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h3 style="padding: 20px 0">Ajouter un internautes</h3>

        <form action="{{ route('internautes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <div class="col">
                    <label for="nom" class="form-label">nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" placeholder="Entrer le nom" aria-describedby="nameHelp">
                    @error('nom')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="prenom" class="form-label">prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom') }}" placeholder="Entrer le prenom" aria-describedby="prenomHelp">
                    @error('prenom')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="password" class="form-label">adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse') }}" placeholder="Enter l'adresse" aria-describedby="adresse">
                    @error('adresse')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="Cin" class="form-label">Cin</label>
                    <input type="text" name="cin" id="Cin" class="form-control"value="{{ old('cin') }}" placeholder="Enter le Cin" >
                    @error('cin')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="date_naissance" class="form-label">date naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" class="form-control">
                    @error('date_naissance')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
    
            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
            </div>
        </form>
    </div>
    
</x-master>
