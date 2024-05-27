<x-master>
    <div style="width: 70%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <form action="{{ route('chambres.update',$chambre->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3 row">
                <div class="col">
                    <label for="nom" class="form-label">nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $chambre->nom) }}" placeholder="Entrer le nom" aria-describedby="nameHelp">
                    @error('nom')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
               
                <div class="col">
                    <label for="prix_unitaire" class="form-label">prix unitaire</label>
                    <input type="text" name="prix_unitaire" id="prix_unitaire" class="form-control" value="{{ old('prix_unitaire',$chambre->prix_unitaire) }}" placeholder="Enter l'prix_unitaire" aria-describedby="prix_unitaire">
                    @error('prix_unitaire')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for=" type_chambre" class="form-label">Type chambre</label>
                    <select name="type_chambre" required class="form-control" id="" >
                        <option value="selectioner le type" selected disabled>selectioner le type</option>
                        <option {{$chambre->type_chambre=='Chambre standard'?:'selected'}}  value="Chambre standard">Chambre standard</option>
                        <option {{$chambre->type_chambre=='Suite'?:'selected'}}  value="Suite">Suite</option>
                        <option  {{$chambre->type_chambre=="Chambre exécutive"?:'selected'}} value="Chambre exécutive">Chambre exécutive</option>
                        <option {{$chambre->type_chambre=="Chambre familiale"?:'selected'}} value="Chambre familiale">Chambre familiale</option>
                        <option {{$chambre->type_chambre=="Chambre thématique"?:'selected'}} value="Chambre thématique">Chambre thématique</option>
                    </select>
                    @error(' type_chambre')
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
