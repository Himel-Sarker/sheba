<x-backend.layouts.master>

<div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Adding Test Department</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Test & Pathology Departments</li>
                            <li class="breadcrumb-item active" aria-current="page">Add Test Department</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <form action="{{route('test.store')}}" method="post">
            @csrf
            <div class="row mt-5">
                <div class="col-6 align-items-center">
                <input class="form-control" placeholder="Enter Test Department Name" name="test_department">

                </div>
                <div class="col">
                 <button type="submit" class="btn btn-info ">Add Test Department</button>
                </div>
         


            </div>
           
        </form>
    </div>

</x-backend.layouts.master>