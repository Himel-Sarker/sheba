@php
    use App\Models\User;
@endphp
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
                <h3>Add Pescription</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pescription</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form  action="{{route('pescripton.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(Session::has('success'))
            <div class="w-25 alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success - </strong>  {{Session::get('success')}}
            </div>
        @endif  
        
        <div class="row" style="margin-top:10px; margin-bottom: 10px;" >
            <div class="col">
                <label>Doctor Name: *</label>
                <select name="doctor_id" class="form-select" aria-label="Default select example" id="doctor_id">
                    <option selected>Select Doctor Name</option>
                    @foreach ($doctors as $doctor)
                        @php
                            $doctor_each = User::select('first_name', 'last_name')->find($doctor->user_id);
                        @endphp
                        <option value="{{$doctor->user_id}}">{{$doctor_each->first_name.' '.$doctor_each->last_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label> Patient Name: *</label>
                <select name="patient_id" class="form-select" aria-label="Default select example" id="patient_id">
                    <option selected>Select Patient Name</option>
                    @foreach ($patients as $patient)
                        @php
                            $patient_each = User::select('first_name', 'last_name')->find($patient->user_id);
                        @endphp
                        <option value="{{$patient->user_id}}">{{$patient_each->first_name.' '.$patient_each->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col">
                <label for=""> Disease:*</label>
                <input type="text" class="form-control" name="disease" placeholder="Disease" aria-label="Disease">
            </div>
            <div class="col">
                <label>Symptoms: *</label>
                <input type="text" class="form-control" aria-label="symptoms"  placeholder="Symptoms"  name="symptoms">
            </div>
        </div>
        


        <div class="row" style="margin-bottom: 10px;">

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Procedure</label>
                <textarea  name="procedure" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
