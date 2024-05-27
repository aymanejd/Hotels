<x-master>
    <div style="width: 90%; margin: 0 auto;padding:20px ; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      <div style="display:flex;justify-content: space-between;padding:20px 0">        <h3>internautes Listes</h3>
        <div>            <a href="{{route("internautes.create")}}" class="btn btn-success">Nouvelle internaute</a>
        </div>
    </div>
    @if(session()->has('success'))
    <x-alert type='success'>{{session('success')}}</x-alert>
    @elseif(session()->has('warning'))
    <x-alert type='warning'>{{session('warning')}}</x-alert>
   
@endif
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Cin</th>
                <th scope="col">Action</th>


              </tr>
            </thead>
            <tbody>
              @foreach ($internautes as $internaute)
                  <tr>
                    <td>{{$internaute->nom}}</td>
                    <td>{{$internaute->prenom}}</td>
                    <td>{{ Str::limit($internaute->adresse,40)}}</td>
                    <td>{{$internaute->cin}}</td>

                    <td style="display: flex;gap: 4px;">
                        <a href="{{route('internautes.edit',$internaute->id)}}" class="btn btn-primary">Modifier</a>
                        <form action="{{route('internautes.destroy',$internaute->id)}}" method="post">
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
