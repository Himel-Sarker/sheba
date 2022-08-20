<x-backend.layouts.master>
  <a href="{{route('patients.index')}}" class="btn btn-primary btn-bg mb-3">Patient List</a>

<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">           
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<div class="row ">

<div class="col text-center ">


<h5 class="card-title"><b>Patient name: </b>{{$doctor->first_name.' '.$doctor->last_name}}</h5>
    <p> <b class="card-text">Email: </b>{{$doctor->email}}</p>
    <p> <b class="card-text">Phone Number: </b>{{optional($doctor->patient)->phone}}</p>
    <p> <b class="card-text">Address: </b>{{optional($doctor->patient)->address}}</p>
    <p> <b class="card-text">Gender: </b>
        @if(optional($doctor->patient)->gender==2)
            Female
        @else
            Male
        @endif
    </p>
</div>

</div>


</div>
</x-backend.layouts.master>