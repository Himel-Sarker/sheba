@php
    use App\Models\User;
    use App\Models\Patient;
    use App\Models\Profile;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pdf_table{
            width: 100% !important;
            border: 1px solid black;
            border-collapse: collapse;
        }
        .pdf_table>tbody>tr>td{
            width: 100% !important;
            border: 1px solid black;
            border-collapse: collapse;
        }
        .w-20{width: 20% !important;}
        .w-80{width: 80% !important;}
        .w-100{width: 100% !important;}
        .text-left{text-align: left !important}
        .text-center{text-align: center !important}
        .vt{vertical-align: top !important}
    </style>
</head>
<body>
    @php
        $role = Auth::user()->role_id;
        $user_id = Auth::user()->id;
    @endphp
     <div class="" style="width: 100%">
        <h2 class="text-center">SHEBA MED PRESCRIPTION</h1>
        <table border="1" class="pdf_table" style="width: 100% !important">
            <tbody>
               @php
                   $patient = User::select('first_name', 'last_name')->find($pescription->patient_id);
                   $doctor = User::select('first_name', 'last_name')->find($pescription->doctor_id);

                   $patient_info = Patient::select('phone')->where('user_id', $pescription->patient_id)->first();
                    $doctor_info = Profile::select('phone')->where('user_id', $pescription->doctor_id)->first();
               @endphp
                
                @if ($role != 2)
                   <tr>
                       <th class="text-left w-20">Doctor </th>
                       <td class="w-80">{{$doctor->first_name.' '.$doctor->last_name}} <br>{{$doctor_info->phone ?? ''}}</td>
                    </tr>
                @endif
                @if ($role != 3)
                   <tr>
                    <th class="text-left w-20">Patient </th>
                   <td class="w-80">Patient{{$patient->first_name.' '.$patient->last_name}} <br>{{$patient_info->phone ?? ''}}</td>
                   </tr>
               @endif
               <tr>
                <th class="text-left w-20">Date </th>
                <td>{{date('d M, Y h:i A', strtotime($pescription->created_at))}}</td>
               </tr>
   
                <tr>
                   <th class="text-left w-20">Disease</th>
                   <td class="w-80">{{$pescription->disease}}</td>
               </tr>
               <tr>
                   <th class="text-left w-20">Symptoms</th>
                   <td class="w-80">{{$pescription->symptoms}}</td>
               </tr>
               <tr>
                   <th class="text-left w-100" colspan="2">Procedure:</th>
               </tr>
               <tr>
                   <td colspan="2" class="w-100 text-left vt" style="height: 500px !important">{{$pescription->procedure}}</td>
               </tr>
                </tr>
            </tbody>
        </table>
     </div>
</body>
</html>