<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Customers</title>
</head>
<body>
    
<div class="container mt-3">
    <h2>Customers</h2>
    <div class="row">
        <div class="col-6">
            <form role= "form" @if(empty( {{$records->id}})) action = "/customer" @else action = "/customer/{{$records->id}}" @endif method = "POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="exampleInputName" name= "name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputPhone" name= "phone_number">
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>          
    <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Phone number</th>
              <th>Action</th>
            </tr>
          </thead> 
          <tbody>
          @foreach($customers as $custom)
            <tr>
              <td>{{$custom->id}}</td>
              <td>{{$custom->name}}</td>
              <td>{{$custom->phone_number}}</td>
              <td>
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>