<x-frontend.layouts.master>

    <div class="container mt-5 mb-5 ">
        <div class=" col page-title">
            <div class="row just">
                <div class="col-md-6 order-md-2 order-first">
                    <h5>Test & Service Charge List</h5>

                </div>
                <div class="col-md-6 order-md-1 order-last ">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Test & Service Charge List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <form action="{{route('pricelist.filter')}}" method="post">

            @csrf
            <div class="row justify-end">
                <div class="col-4">
                    <select class="form-select" name="filter_by">
                        <option selected>Select Filter Category</option>
                        <option value="all">All Test</option>
                        @foreach($test_category as $category)
                        <option value="{{$category->id}}">{{$category->test_department}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4 ">
                    <button type="submit" class="btn btn-info px-4">Filter</button>
                </div>
            </div>

        </form>

      
        <section class="section">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm table-hover table-light" id="table1">
                        <thead class="text-center">
                            <tr>
                                <th>SL</th>
                                <th>Test Department</th>
                                <th> Test Name</th>
                                <th> Price</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">

                            @foreach($test_list as $test)
                            <tr>
                                <td>{{$loop->iteration}} </td>
                                <td>{{$test->test_category->test_department}}</td>
                                <td>{{$test->service_name}}</td>
                                <td>{{$test->price}}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @if($test_list instanceof \Illuminate\Pagination\LengthAwarePaginator )

                    {{$test_list->links()}}

                    @endif
                    
                </div>
            </div>

        </section>
       
    
    </div>
</x-frontend.layouts.master>