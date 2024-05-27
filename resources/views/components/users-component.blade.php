@props(['users'])
<div>
    <table class="table table-striped" >
        <h3 style="color: aqua">ALL employers</h3>
        <thead class="thead-dark"><tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col"> Job</th>
        </tr></thead>
        
        @foreach ($users as $emp)
            <tr>
                <td>{{$emp['id']}}</td>
                <td>{{$emp['name']}}</td>
                <td>{{$emp['job']}}</td>
    
            </tr>
        @endforeach
    </table>
</div>