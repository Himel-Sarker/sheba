<x-backend.layouts.master>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Adding New Department</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General Departments</li>
                            <li class="breadcrumb-item active" aria-current="page">Add Department</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <form action="{{route('departments.store')}}" method="post">
            @csrf
            <div class="row mt-5">
                <div class="col-6 align-items-center">
                <input class="form-control" placeholder="Enter Department Name" name="department_name">

                </div>
                <div class="col">
                 <button type="submit" class="btn btn-info ">Add Department</button>
                </div>
         


            </div>
           
        </form>
    </div>
</x-backend.layouts.master>