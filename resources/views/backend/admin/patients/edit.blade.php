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
                <h3>Update Patient</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    @php
                        $dashboard_url = '';
                        if (auth()->user()->role_id == 1) { 
                            $dashboard_url = route('admin.dashboard');
                        }elseif (auth()->user()->role_id == 2) {
                            $dashboard_url = URL::to('/doctor/'.auth()->user()->id);
                        }else{
                            $dashboard_url = route('patient.dashboard');
                        }
                    @endphp
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{$dashboard_url}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('patients.index')}}">Doctor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form  action="{{route('patients.update', ['id'=>$patients->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(Session::has('success'))
            <div class="w-25 alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success - </strong>  {{Session::get('success')}}
            </div>
        @endif
        <div class="row" style="margin-top:10px; margin-bottom: 10px;">
            <!-- <div class="col">
                <label for="">Rols: </label>
                <select name="role_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Rols</option>
                    @foreach($rols as $key => $value)
                        <option value="{{$value->id}}">{{$value->role_name}}</option>
                    @endforeach
                </select>
            </div> -->
            
        </div>


        <div class="row" style="margin-top:10px; margin-bottom: 10px;" >
            <div class="col">
                <label>First Name: *</label>
                <input type="text" name="first_name" class="form-control" placeholder="First name" aria-label="First name" value="{{ $patients->first_name ?? '' }}">
            </div>
            <div class="col">
                <label> Last Name: *</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name" value="{{ $patients->last_name ?? '' }}">
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for=""> Username:*</label>
                <input type="text" class="form-control" name="user_name" placeholder="Username" aria-label="User Name" value="{{ $patients->user_name ?? '' }}">
            </div>
            <div class="col">
                <label>New Password: *</label>
                <input type="password" class="form-control" aria-label="password" name="password">
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="">Email: *</label>
                <input name="email" type="email" class="form-control" aria-label="First name" value="{{ $patients->email ?? '' }}">
            </div>
            <div class="col">
                <label for="phone">Phone:</label>
                <input name="phone" type="number" class="form-control" placeholder="(+880)" aria-label="Phone" value="{{ $patients->patient->phone ?? '' }}">
            </div>
        </div>

        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="gender">Gender:*</label>
                <select name="gender" class="form-select" aria-label="Default select example" id="gender">
                    <option value="1" <?php echo ($patients->patient->gender == "1") ? 'selected' : ''; ?>>Male</option>
                    <option value="2" <?php echo ($patients->patient->gender == "2") ? 'selected' : ''; ?>>Female</option>

                </select>
            </div>
            <div class="col">
                <label for="joindate">Date Of Birth:*</label>
                <div class="row">
                    <input type="date" name="dob" class="form-control" value="{{ $patients->patient->dob ?? '' }}">
                </div>
            </div>
        </div>


        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for="City:*">City:*</label>
                <select name="city" class="form-select" aria-label="Default select example" id="gender">
                    <option>Select City</option>
                    <option value="1" <?php echo ($patients->patient->city == "1") ? 'selected' : ''; ?>>Dhaka</option>
                    <option value="2" <?php echo ($patients->patient->city == "2") ? 'selected' : ''; ?>>Barishal</option>
                    <option value="3" <?php echo ($patients->patient->city == "3") ? 'selected' : ''; ?>>Khulna</option>
                    <option value="4" <?php echo ($patients->patient->city == "4") ? 'selected' : ''; ?>>Sylet</option>
                    <option value="5" <?php echo ($patients->patient->city == "5") ? 'selected' : ''; ?>>Chitagong</option>
                    <option value="6" <?php echo ($patients->patient->city == "6") ? 'selected' : ''; ?>>Rajshahi</option>

                </select>
            </div>
            <div class="col">
                <label for="state">State:*</label>
                <input name="state" type="text" class="form-control" placeholder="Enter State" aria-label="state" value="{{ $patients->patient->state ?? '' }}">
            </div>

        </div>


        <div class="row" style="margin-bottom: 10px;">

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea  name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $patients->patient->address ?? '' }}</textarea>
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
