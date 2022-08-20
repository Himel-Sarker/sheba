@php
    use App\Models\Profile;
@endphp
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
          <th>Doctors Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Date</th>
         </thead>
         <tbody>
             @foreach($doctors as $item)
             @php
                 $profile = Profile::where('user_id', $item->id)->first();
             @endphp
           <tr>
           <td>{{$loop->iteration ?? ''}}</td>
           <td>{{$item->first_name.' '.$item->last_name}}</td>
           <td>{{$profile->phone ?? ''}}</td>
           <td>{{$item->email ?? ''}}</td>
           <td>{{date('d M, Y', strtotime($item->created_at))}}</td>
           </tr>
           @endforeach
         </tbody>

     </table>
</body>
</html>