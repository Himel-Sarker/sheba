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


    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Appointment List</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                            <li class="breadcrumb-item active" aria-current="page">Appointment List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if(session('message'))
        <p class="alert alert-secondary">{{ session('message') }}</p>
        @endif
        <section class="section">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-sm table-hover table-light" >
                        <thead class="text-center">
                            <tr>
                                <th>SL</th>
                                <th>Patients Name</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Doctor Name</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">

                            @foreach($appointments as $appointment)
                            <tr>
                                <td>{{$loop->iteration}} </td>
                                <td>{{$appointment->name}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>{{$appointment->day}} / {{$appointment->time}}</td>
                                <td>{{$appointment->user->first_name.' '.$appointment->user->last_name}}</td>
                                <td>
                                    @if($appointment->approval_status == 1)
                                        <span class="badge bg-success">Approved</span>
                                    @else
                                        <span class="badge bg-danger">Pending</span>
                                    @endif
                                </td>
                            
                                <td>
                                    @if(!($appointment->approval_status))
                                    <form action="{{route('update.approval.status',['appointment'=>$appointment->id])}}" method="post" style="display:inline">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-info btn-sm">Approve</button>

                                    </form>
                                    @endif
                                    @if(($appointment->approval_status))
                                      <a class="btn btn-secondary btn-sm disabled">Approved</a>
                                    @endif
                                    <a class="btn btn-primary btn-sm" href="">Modify</a>
                                    <form action="{{route('appointment_delete',$appointment->id)}}" method="post" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning btn-sm">Cancel</button>
                                    </form>

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