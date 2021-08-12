<html>
   
   <head>
      <title>Company Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $companies[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'company_name' 
                     value = '<?php echo$companies[0]->name; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update company" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>
