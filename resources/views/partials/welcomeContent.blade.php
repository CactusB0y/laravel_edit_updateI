<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Espece</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
                <tr>
                    <th scope="row">{{$pet->id}}</th>
                    <td>{{$pet->espece}}</td>
                    <td><a class="btn btn-primary" href="/pet-show/{{$pet->id}}">SHOW</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>