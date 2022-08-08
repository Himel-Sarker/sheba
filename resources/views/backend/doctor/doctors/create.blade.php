@push('css')
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@push('js')
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>

    <script>
        let i;
        for (i = 1; i<=7 ; i ++){
            new Tagify(document.querySelector('.time'+i))
        }
    </script>
@endpush
<x-backend.layouts.master>


<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Doctor</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form  action="{{route('doctors.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(Session::has('success'))

            <div class="w-25 alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success - </strong>  {{Session::get('success')}}
            </div>
        @endif
        <div class="row" style="margin-top:10px; margin-bottom: 10px;">
            <div class="col">
                <label for="">Rols: </label>
                <select name="role_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Rols</option>
                    @foreach($rols as $key => $value)
                        <option value="{{$value->id}}">{{$value->role_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="">Department: </label>
                <select name="department_id" class="form-select" aria-label="Default select example">
                    <option selected>Select department</option>
                    @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" style="margin-top:10px; margin-bottom: 10px;" >
            <div class="col">
                <label>First Name: *</label>
                <input type="text" name="first_name" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <label> Last Name: *</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for=""> Username:*</label>
                <input type="text" class="form-control" name="user_name" placeholder="Username" aria-label="User Name">
            </div>
            <div class="col">
                <label>Password: *</label>
                <input type="password" class="form-control" aria-label="password" name="password">
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="">Email: *</label>
                <input name="email" type="email" class="form-control" aria-label="First name">
            </div>
            <div class="col">
                <label for="phone">Phone:</label>
                <input name="phone" type="number" class="form-control" placeholder="(+880)" aria-label="Last name">
            </div>
        </div>

        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="gender">Gender:*</label>
                <select name="gender" class="form-select" aria-label="Default select example" id="gender">
                    <option selected>Select your Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>

                </select>
            </div>
        </div>

        <div class="row" style="margin-bottom:10px">

            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NID</label>
                    <input name="nid" type="number" class="form-control" id="exampleInputPassword1">
                </div>

            </div>
            <div class="col mt-2">
                <label for="joindate">Date Of Birth:*</label>
                <div class="row">
                    <input type="date" name="dob" class="form-control">
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="degree">Degree:*</label>
                <input name="degree" type="text" class="form-control" placeholder="Enter Degree" aria-label="degree">
            </div>
            <div class="col">
                <label for="joindate">Joining Date:*</label>
                <div class="row">
                    <input type="date" name="join_date" class="form-control">
                </div>

            </div>

        </div>

        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="City:*">City:*</label>
                <select name="city" class="form-select" aria-label="Default select example" id="gender">
                    <option selected>Select City</option>
                    <option value="1">Dhaka</option>
                    <option value="2">Barishal</option>
                    <option value="2">Khulna</option>
                    <option value="2">Sylet</option>
                    <option value="2">Chitagong</option>
                    <option value="2">Rajshahi</option>

                </select>
            </div>
            <div class="col">
                <label for="state">State:*</label>
                <input name="state" type="text" class="form-control" placeholder="Enter Doctor State" aria-label="state">
            </div>

        </div>


        <div class="row" style="margin-bottom: 10px;">

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea  name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
            <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Photo</label>
            <input name="image" class="form-control" type="file" id="formFile">
        </div>
        
        
        <div class="row">
            <div class="col-md-12">

                <div class="row ">
                    <div class="col-md-6">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="saturday" name="day[]" value="saturday">
                            <label class="form-check-label" for="saturday">Satarday</label>
                            <input class="form-control mb-2 time1" multiple name="tags['saturday'][]" type="text">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sunday" name="day[]" value="sunday">
                            <label class="form-check-label" for="sunday">Sunday</label>
                            <input class="form-control mb-2 time2" multiple name="tags['sunday'][]" type="text">

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="monday" name="day[]" value="monday">
                            <label class="form-check-label" for="monday">Monday</label>
                            <input class="form-control mb-2 time3" multiple name="tags['monday'][]" type="text">

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="tuesday" type="checkbox" name="day[]" value="tuesday">
                            <label class="form-check-label" for="tuesday">Tuesday</label>
                            <input class="form-control mb-2 time4" multiple name="tags['tuesday'][]" type="text">

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="wednesday" type="checkbox"  name="day[]" value="wednesday">
                            <label class="form-check-label" for="wednesday">Wednesday</label>
                            <input class="form-control mb-2 time5" multiple name="tags['wednesday'][]" type="text">

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="thursday" type="checkbox" name="day[]" value="thursday">
                            <label class="form-check-label" for="thursday">Thursday</label>
                            <input class="form-control mb-2 time6" multiple name="tags['thursday'][]" type="text">

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="friday" type="checkbox" name="day[]" value="friday">
                            <label class="form-check-label" for="friday">Friday</label>
                            <input class="form-control mb-2 time7" multiple name="tags['friday'][]" type="text">

                        </div>
                    </div>
                </div>


            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary" style="width: 200px; font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-bottom: 50px; margin-top: 20px;">Submit</button>
            </div>
            <br>
        </div>
    </form>
</x-backend.layouts.master>
