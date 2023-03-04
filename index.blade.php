<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

    <form action="login" method="post">
        @csrf
        <div class="form-group">
          email:
          <input type="email" name="email">
          <span>@error ('email') {{$message}} @enderror</span>
          
        </div>
        <div class="form-group">
          password:
          <input type="password" name="password">
         <span> @error ('password') {{$message}} @enderror</span>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


      <table class="table table-hover">
       <thead>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th>Actions</th>
       </thead>
       <tbody>
        @foreach ($list as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->password}}</td>
          <td>
            <div class="btn btn-danger"><a href={{url('delete/'.$item->id)}}>delete</a></div>
            <div class="btn btn-info"><a href={{url('edit/'.$item->id)}}>update</a></div>
          </td>
        </tr>
        @endforeach
        
       </tbody>
      </table>


     
   </body>
</html>
