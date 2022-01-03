<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}

    <title>Crud Query Builder</title>
</head>
<body>
    
<div class="container mt-5">
    <h1>LARAVEL CRUD SYSTEM</h1>
    @if (session()->has('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('status')}}</strong>  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif
    @if (session()->has('delete'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{session('delete')}}</strong>  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif
    <form action="" method="post">
        @csrf
      
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="" placeholder="Hassan" required>
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="" placeholder="lahore" required>
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Marks</label>
            <input type="text" name="marks" class="form-control" id="" placeholder="500" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container mt-5">

    <table class="table table-striped table-hover table-dark" id="myTable">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">City</th>
              <th scope="col">Marks</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
@foreach ($students as $stu)
<tbody>
    <tr>
      <th scope="row">{{$stu->id}}</th>
      <td>{{$stu->name}}</td>
      <td>{{$stu->city}}</td>
      <td>{{$stu->marks}}</td>
      <td>
      
          <a href="{{url('/delete', $stu->id)}}"><button class="btn btn-danger btn-sm">DELETE</button></a>
          <a href="{{url('/edit', $stu->id)}}"><button class="btn btn-primary btn-sm">EDIT</button></a>


      </td>
    </tr>
  </tbody>
@endforeach
         
      </table>

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> --}}
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
{{-- <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
}); --}}
</script>
</body>
</html>