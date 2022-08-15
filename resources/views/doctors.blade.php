<x-frontend.layouts.master>
    <div class="container mt-5 mb-5">

        <div class="row">
            @foreach($doctorslist as $doctor)
                <div class="col-md-3">
                    <div class="card" style="margin:5px 0;">
                        <img src="{{$doctor->profile->image}}" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title text-info">{{$doctor->first_name.' '.$doctor->last_name}}</h5>
                            <h5 class="card-title text-primary "> Specialities: {{$doctor->department->name}}</h5>
                            <h5 class="card-title "> Branch: {{$doctor->profile->state}}</h5>
                            <h5 class="card-title "> Practice Days: </h5>
                            <p class="card-text text-success ">Saturday, Sunday, Monday, Tuestday, Wednesday, Thursday, Friday</p>

                        </div>
                        <div class="card-footer text-center mb-2">
                            <a href="{{ route('view_doctor', $doctor->id) }}" class="btn btn-primary btn-block btn-sm ">Get Appointment</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col">
                <ul class="navbar-nav">
                    <li class="nav-item">{{$doctorslist->links()}}</li>
                </ul>
            </div>
        </div>
    </div>

   
   
</x-frontend.layouts.master>