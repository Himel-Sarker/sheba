<x-frontend.layouts.master>
    <div class="container-fluid mt-5 mb-5 ">
        <div class=" col page-title">
            <div class="row just">
                <div class="col-md-6 order-md-2 order-first">
                    <h5>Find Doctor</h5>
                </div>
                <div class="col-md-6 order-md-1 order-last ">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Find Doctors</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section>

            <form action="#" method="post">
                @csrf
                <div class="row justify-content-center mx-4">

                    <div class="col-md-4">
                     <input name="doctor_name" type="text" class="form-control" placeholder="Search By Name">
                    </div>
                    <div class="col-md-4">
                    <select class="form-select" name="speciality">
                   <option selected>Search By Speciality</option>
                    <option value="all">All Speciality</option>
                      @foreach($departments as $department)
                      <option value="{{$department->id}}">{{$department->name}}</option>
                      @endforeach
                    </select>
                    </div>
                    <div class="col-md-4 ">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>

                    </div>


                </div>


            </form>
        </section>

        @if(isset($doctor))
        <p>Search Result:</p>
        <div class="row  justify-content-center">
            @foreach($doctor as $doctor)
            <div class="card mx-2 mb-4" style="width: 18rem;">
                <img src="{{asset($doctor->profile->image ?? '/image/avatar.jpg')}}" class="card-img-top" alt="..." height="200px">
                <div class="card-body">
                    <h5 class="card-title text-info text-center">{{$doctor->first_name.' '.$doctor->last_name}}</h5>
                    <h5 class="card-title text-primary "> Specialities: {{$doctor->department->name}}</h5>
                    <h5 class="card-title "> Branch: {{$doctor->profile->state}}</h5>
                    <h5 class="card-title "> Practice Days: </h5>
                    <p class="card-text text-success ">Saturday, Sunday, Monday, Tuestday, Wednesday, Thursday, Friday</p>
                   
                </div>
                <div class="text-center mb-2">
                <a href="#appointment" class="btn btn-primary btn-sm">Get Appointment</a>
                </div>
            </div>
            @endforeach
        </div>



        @endif
       

    </div>
</x-frontend.layouts.master>