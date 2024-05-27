<x-master>
    <div style="width: 70%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h3 style="padding: 20px 0">Ajouter une Chambre</h3>

        <form action="{{ route('chambres.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="prix_unitaire" class="form-label">prix unitaire</label>
                    <input type="text" name="prix_unitaire" id="prix_unitaire" class="form-control" value="{{ old('prix_unitaire') }}" placeholder="Enter l'prix_unitaire" aria-describedby="prix_unitaire">
                    @error('prix_unitaire')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for=" type_chambre" class="form-label">Type chambre</label>
                    <select name="type_chambre" required class="form-control" id="" >
                        <option value="selectioner le type"  disabled>selectioner le type</option>
                        <option value="Chambre standard">Chambre standard</option>
                        <option value="Suite">Suite</option>
                        <option value="Chambre exécutive">Chambre exécutive</option>
                        <option value="Chambre familiale">Chambre familiale</option>
                        <option value="Chambre thématique">Chambre thématique</option>
                    </select>
                    @error(' type_chambre')
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
