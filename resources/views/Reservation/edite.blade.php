<x-master>
    <div style="width: 70%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This line specifies that the form should use the PUT method -->

            <div class="mb-3 row">
                <div class="col">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" name="titre" id="titre" class="form-control" value="{{ $reservation->titre }}" placeholder="Entrer le titre">
                    @error('titre')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="date_debut_sejour" class="form-label">Date début séjour</label>
                    <input type="date" name="date_debut_sejour" id="date_debut_sejour" class="form-control" value="{{ $reservation->date_debut_sejour }}" placeholder="Entrer la date de début du séjour">
                    @error('date_debut_sejour')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="date_fin_sejour" class="form-label">Date fin séjour</label>
                    <input type="date" name="date_fin_sejour" id="date_fin_sejour" class="form-control" value="{{ $reservation->date_fin_sejour }}" placeholder="Entrer la date de fin du séjour">
                    @error('date_fin_sejour')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="internaute" class="form-label">Internaute</label>
                    <select name="internaute" id="internaute" class="form-control">
                        @foreach ($internautes as $internaute)
                            <option value="{{ $internaute->id }}" @if($reservation->internaute_id == $internaute->id) selected @endif>{{ $internaute->prenom }}</option>
                        @endforeach
                    </select>
                    @error('internaute')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="chambre_id" class="form-label">Chambre</label>
                    <select name="chambre_id" id="chambre_id" class="form-control">
                        @foreach ($chambres as $chambre)
                            <option value="{{ $chambre->id }}" @if($reservation->chambres->contains($chambre->id)) selected @endif>{{ $chambre->nom }}</option>
                        @endforeach
                    </select>
                    @error('chambre_id')
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
