<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border="1">
         <thead>
          <th>SL</th>
          <th>Patients Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Date</th>
         </thead>
         <tbody>
             @foreach($list as $item)
           <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$item->patients_name}}</td>
           <td>{{$item->phone}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->created_at}}</td>
           </tr>
           @endforeach
         </tbody>

     </table>
</body>
</html>