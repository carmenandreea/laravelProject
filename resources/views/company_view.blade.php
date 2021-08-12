<html>
   
   <head>
      <title>View Company Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($companies as $company)
         <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->name }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>
