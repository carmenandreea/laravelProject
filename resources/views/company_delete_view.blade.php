<html>
   
   <head>
      <title>View Company Records</title>
   </head>
   
   <body>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($companies as $company)
         <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->name }}</td>
            <td><a href = 'delete/{{ $company->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>
