<x-master>
    <div style="width: 90%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div style="display:flex;justify-content: space-between;padding:20px 0">
            <h3>Reservation Listes</h3>
            <div> <a href="{{ route('reservations.create') }}" class="btn btn-success">Nouvelle Reservation</a>
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
                    <th scope="col">internaute Prenom</th>
                    <th scope="col">Reservation titre</th>
                    <th scope="col">Prix Total</th>

                    <th scope="col">Reservation date debut</th>
                    <th scope="col">Reservation date fin</th>
                    <th scope="col">chambre Nom</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($internautes as $internaute)
                    @foreach ($internaute->reservations as $reservation)
                        @foreach ($reservation->chambres as $chambre)
                            <tr>
                                <td>{{ $internaute['prenom'] }}</td>
                                <td>{{ $reservation['titre'] }}</td>
                                <td>{{ $reservation['prixtotal'] }}</td>

                                <td>{{ $reservation['date_debut_sejour'] }}</td>
                                <td>{{ $reservation['date_fin_sejour'] }}</td>
                                <td>{{ $chambre['nom'] }}</td>
                                <td style="display: flex;gap: 4px;">
                                    <a href="{{ route('reservations.edit', $reservation->id) }}"
                                        class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>

    </div>

</x-master>
