<div class="container mt-5">
    <form action="/pet-store" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Espece</label>
          <input type="text" name="espece" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>