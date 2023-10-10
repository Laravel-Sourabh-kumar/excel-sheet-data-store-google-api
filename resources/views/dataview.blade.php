<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Sheet Api Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-striped">
        <thead class="">
            <tr>
              <th>#</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Date</th>
              
            </tr>
          </thead>
          <tbody>
            @if($data != "[]")
                @foreach($data as $key=>$r)
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{$r->full_name}}</td>
                    <td>{{$r->email}}</td>
                    <td> {{$r->date}}</td>
                </tr>
                @endforeach
            @endif
            
          </tbody>
    </table>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
      
      
