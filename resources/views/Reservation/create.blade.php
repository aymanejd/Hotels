<x-master>
    <div style="width: 70%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h3 style="padding: 20px 0">Ajouter une reservation</h3>
        <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <div class="col">
                    <label for="titre" class="form-label">titre</label>
                    <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" placeholder="Entrer le titre" aria-describedby="nameHelp">
                    @error('titre')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="date_debut_sejour" class="form-label">Date debur sejour</label>
                    <input type="date" name="date_debut_sejour" id="date_debut_sejour" class="form-control" value="{{ old('date_debut_sejour') }}" placeholder="Entrer le prénom" aria-describedby="date_debut_sejourHelp">
                    @error('date_debut_sejour')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="date_fin_sejour" class="form-label">Date fin sejour</label>
                    <input type="date" name="date_fin_sejour" id="date_fin_sejour" class="form-control" value="{{ old('date_fin_sejour') }}" placeholder="Entrer l'date_fin_sejour" aria-describedby="date_fin_sejour">
                    @error('date_fin_sejour')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="internaute" class="form-label">internaute</label>
                    <select name="internaute" id="internaute" class="form-control" value="{{ old('internaute') }}" placeholder="Entrer le internaute" >
                        @foreach ($internautes as $internaute)
                            <option value="{{$internaute->id}}">{{$internaute->prenom}}</option>
                        @endforeach
                    </select>
                    @error('internaute')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
    
            <div class="mb-3 row">
                
                <div class="col">
                    <label for="chambre_id" class="form-label">Chambres</label>
                    <select name="chambre_id" id="chambre_id" class="form-control"  >
                        @foreach ($chambres as $chambre)
                            <option value="{{$chambre->id}}">{{$chambre->nom}}</option>
                        @endforeach
                    </select>
                    @error('chambre')
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
