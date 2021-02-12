<div class="container mt-5">
    <form action="/pet-update/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Espece</label>
          <input type="text" name="espece" value="{{$edit->espece}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" name="age" value="{{$edit->age}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>