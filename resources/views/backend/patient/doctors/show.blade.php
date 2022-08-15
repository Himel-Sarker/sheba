<x-backend.layouts.master>
  <a href="{{route('doctors.index')}}" class="btn btn-primary btn-bg mb-3">Doctor List</a>

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


<h5 class="card-title"><b>Doctor name: </b>{{$doctor->first_name.' '.$doctor->last_name}}</h5>
    <p> <b class="card-text">Department: </b>{{$doctor->department->name}}</p>
    <p> <b class="card-text">Degree: </b>{{optional($doctor->profile)->degree}}</p>
    <p> <b class="card-text">Email: </b>{{$doctor->email}}</p>
    <p> <b class="card-text">Phone Number: </b>{{optional($doctor->profile)->phone}}</p>
    <p> <b class="card-text">Joining Date: </b>{{optional($doctor->profile)->join_date}}</p>
    <p> <b class="card-text">Address: </b>{{optional($doctor->profile)->address}}</p>
    <p> <b class="card-text">Gender: </b>
    
        @if(optional($doctor->profile)->gender==2)
            Femail
        @else
            Mail
        @endif


    </p>
    <a href="#" class="btn btn-info">Call Doctor</a>
</div>

<div class="col">
<div class="card justify-self-center mt-3" style="width: 18rem;" >
  <img src="{{asset($doctor->profile->image ?? '/image/avatar.jpg')}}" class="card-img-top" alt="...">
 
</div>

</div>


</div>
</x-backend.layouts.master>