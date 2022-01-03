<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit</title>
</head>
<body>
    
<div class="container mt-5">
    <h1>LARAVEL CRUD SYSTEM</h1>
    @if (session()->has('status'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('status')}}</strong>  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif
    <form action="" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="" placeholder="Hassan" value="{{$students->name}}">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="" placeholder="lahore" value="{{$students->city}}">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Marks</label>
            <input type="text" name="marks" class="form-control" id="" placeholder="500" value="{{$students->marks}}">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>