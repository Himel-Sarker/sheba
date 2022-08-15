<x-backend.layouts.master>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Adding New Test</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pathology & Imaging</li>
                            <li class="breadcrumb-item active" aria-current="page">Add Test</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <form action="{{route('service.store')}}" method="post">
            @csrf
            <div class="row mt-5 justify-content-center mb-2">
                <div class="col-12 align-items-center">

                    <select class="form-select" name="test_categoy">
                        <option selected> Select Test Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->test_department}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <input type="text"  class="form-control" placeholder="Enter Test Name" name="service_name">
                </div>
                <div class="col-6">
                    <input  type="number" class="form-control" placeholder="Enter Test Price" name="price">
                </div>
            </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-3">
            <button type="submit" class="btn btn-secondary ">Add Test</button>
        </div>

    </div>

    </form>
    </div>

</x-backend.layouts.master>