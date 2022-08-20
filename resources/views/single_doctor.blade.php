<x-frontend.layouts.master>


    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Doctor Personal Details Details</span>
                        <h1 class="text-capitalize mb-5 text-lg">{{$doctor->first_name.' '.$doctor->last_name}}</h1>


                        @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        @endif
                        <!--        	<ul class="list-inline breadcumb-nav">-->
                        <!--            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>-->
                        <!--            <li class="list-inline-item"><span class="text-white">/</span></li>-->
                        <!--            <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>-->
                        <!--          </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section doctor-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="{{asset($doctor->profile->image ?? '/image/avatar.jpg')}}" alt="" class="img-fluid w-100">

                        <div class="info-block mt-4">
                            <h4 class="mb-0">{{$doctor->first_name.' '.$doctor->last_name}}</h4>
                            <p>Specialities: {{$doctor->department->name}}</p>

                            <ul class="list-inline mt-4 doctor-social-links">
                                <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-skype"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Doctor Personal Information : </h2>
                        <div class="divider my-4"></div>
                        <div class="card border-0">
                            <div class="card-body">

                                <table class="table table-striped">
                                    <tr>
                                        <th>User Name : </th>
                                        <td>{{$doctor->first_name.' '.$doctor->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email : </th>
                                        <td>{{$doctor->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone : </th>
                                        <td>{{ optional($doctor->profile)->phone}} </td>
                                    </tr>
                                    <tr>
                                        <th>Date Of Birth : </th>
                                        <td>{{ optional($doctor->profile)->dob}}</td>
                                    </tr>
                                    <tr>
                                        <th>Joined At : </th>
                                        <td>{{ optional($doctor->profile)->join_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>City : </th>
                                        <td>{{ optional($doctor->profile)->city}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address : </th>
                                        <td>{{ optional($doctor->profile)->address}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section doctor-qualification gray-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3>Doctor Bio Information</h3>
                        <div class="divider my-4"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3>Make An Appointment</h3>
                        <div class="divider my-4"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem dicta fuga laborum optio sed ullam velit. Aliquid dolorum labore perferendis ratione tenetur voluptatibus. Ab aliquam commodi delectus dolore, dolorem doloribus ea eum, eveniet, expedita explicabo fugit hic impedit in ipsam laborum officia placeat quos recusandae tenetur voluptatibus. Accusamus alias aspernatur consequuntur ducimus illo labore, modi quaerat quia quis quo sed sint veritatis vero? A aliquam fugit natus officia praesentium qui quos totam veniam voluptatum. Architecto at aut culpa dignissimos distinctio dolore dolorem dolores ducimus eum exercitationem facere, natus nemo quae, quaerat quas quibusdam quisquam vel velit. Ad cumque eaque fugiat in odit quasi quidem reprehenderit, temporibus vitae voluptatibus. Ab ad alias architecto aspernatur commodi cum cupiditate debitis deleniti dicta dolores eaque enim eos fuga incidunt ipsum iste iure minus nesciunt nulla odit officia optio perspiciatis possimus quaerat quibusdam, quidem quod, reiciendis repellat repellendus reprehenderit soluta sunt ullam voluptate voluptates.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="edu-block">
                        <form action="{{ route('make_appoint') }}" id="main_apoind_form">
                            @csrf


                            <div class="form-group">
                                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}" />
                                <input type="text" name="name" class="form-control mb-2 @error('name') is-invalid @enderror" placeholder="Enter Your Full Name">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror mb-2" placeholder="Enter Your Phone Number">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror  mb-2" placeholder="Enter Your Email">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <textarea name="details" class="form-control @error('details') is-invalid @enderror mb-2" placeholder="Describe Your Problem" rows="5"></textarea>
                            </div>


                            <table class="table">
                                @foreach(json_decode($doctor->profile->time_table) as $key => $value)
                                <tr>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="{{ $key.'radio' }}" class="btn d-block btn-secondary rounded-0" style="min-width: 250px">
                                                    <input name="date" value="{{ $key }}" id="{{ $key.'radio' }}" type="radio" />
                                                    {{ $key }}
                                                </label>
                                            </div>
                                            {{--{{ json_decode($value->times[0]) }}--}}


                                            <select class="btn btn-outline-dark rounded-0 form-control select{{ $key }}" id="{{ $key }}" disabled name="date[{{ $key }}]time">
                                                <option selected disabled>Select Appoint Time</option>
                                                @foreach(json_decode($value->times[0]) as $val)
                                                <option value="{{ $val->value }}">{{ $val->value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                        </form>
                    </div>

                </div>
                <button id="submitButton" class="btn btn-main-2 btn-round-full mt-3 bg-info py-3 text-white">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></button>
            </div>

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        document.querySelector("#submitButton").addEventListener('click', function() {

            document.querySelector("#main_apoind_form").submit()
        })


        $('input:radio[name="date"]').change(function() {

            let val = $(this).val()

            let id = "select" + val

            var inputs = document.getElementsByTagName("select");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].id === val) {
                    $("." + id).removeAttr('disabled');
                } else {
                    $("#" + inputs[i].id).attr('disabled', true);
                }
            }






            //     $('#discountselection').attr('disabled',true);

            // if ($(this).val()=='Yes') {
            // } else
            //     $('#discountselection').removeAttr('disabled');
        });
    </script>

</x-frontend.layouts.master>