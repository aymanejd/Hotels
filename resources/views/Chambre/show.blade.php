<x-master>
    <div style="width: 90%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

        <div style="display:flex;justify-content: space-between;padding:20px 0">
            <h3>Chambres Listes</h3>
            <div> <a href="{{ route('chambres.create') }}" class="btn btn-success">Nouvelle Chambres</a>
            </div>
        </div>
        @if (session()->has('success'))
            <x-alert type='success'>{{ session('success') }}</x-alert>
        @elseif(session()->has('warning'))
            <x-alert type='warning'>{{ session('warning') }}</x-alert>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type chambre</th>
                    <th scope="col">Prix unitaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->nom }}</td>
                        <td>{{ $chambre->type_chambre }}</td>
                        <td>{{ $chambre->prix_unitaire }}</td>

                        <td style="display: flex;gap: 4px;">
                            <a href="{{ route('chambres.edit', $chambre->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('chambres.destroy', $chambre->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-master>
