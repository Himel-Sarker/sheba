<x-backend.layouts.master>
    @push('css')
        <style>
            .dt-buttons{
                float: left;
                margin-bottom: 15px;
            }
            .dataTables_filter{
                float:right;
            }
            .dt-button{
                border: none;
                padding: 3px 14px;
                border-radius: 10px;
                background: #002eb1;
                color: white;
                font-size: 13px;
            }
        </style>
    @endpush

    @php
        $role = Auth::user()->role_id;
        $user_id = Auth::user()->id;
        $dashboard_url = '';
        if ($role == 1) { 
            $dashboard_url = route('admin.dashboard');
        }elseif ($role == 2) {
            $dashboard_url = URL::to('/doctor/'.$user_id);
        }else{
            $dashboard_url = route('patient.dashboard');
        }
    @endphp
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Patients List</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{$dashboard_url}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Patients</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if(session('message'))
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif
        <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-sm table-hover table-light" id="table1">
                        <thead class="text-center">
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Patient Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">

                        @foreach($patients as $patient)
                            @if ($role == 3)
                                @php
                                    if ($user_id != $patient->id) {
                                        continue;
                                    }
                                @endphp
                            @endif
                            <tr>
                                <td>{{$loop->iteration}} </td>
                                <td>{{$patient->first_name.' '.$patient->last_name}}</td>
                                <td>{{$patient->email}}</td>
                                <td>{{ optional($patient->profile)->phone}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('patients.show',['id'=>$patient->id])}}">Show</a>
                                    <a class="btn btn-success btn-sm" href="{{route('patients.pescription_list',['id'=>$patient->id])}}">Pescription</a>
                                    {{-- @if ($role == 1 || $role == 2) --}}
                                    <a class="btn btn-primary btn-sm" href="{{route('patients.edit',['id'=>$patient->id])}}">Edit</a>
                                    <form action="{{route('patients.destroy',$patient->id)}}" method="post"
                                          style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning btn-sm">Delete</button>
                                    </form>
                                    {{-- @endif --}}

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>









    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {

                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>

</x-backend.layouts.master>