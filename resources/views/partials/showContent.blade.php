<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->id}}</h5>
          <h5 class="card-title">{{$show->espece}}</h5>
          <h5 class="card-title">{{$show->age}}</h5>
          <a href="/pet-edit/{{$show->id}}" class="btn btn-success">EDIT</a>
          <form action="/pet-delete/{{$show->id}}" method="POST">
                @csrf
              <button class="btn btn-danger" type="submit">DELETE</button>
          </form>
        </div>
      </div>
</div>