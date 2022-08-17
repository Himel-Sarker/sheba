<x-backend.layouts.master>


    @push('css')
    <style>
        body {
            font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff;

        }
    </style>
    @endpush


    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Test List</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pathology & Imaging</li>
                            <li class="breadcrumb-item active" aria-current="page">Test List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <br>
        <a href="{{ route ('pricelist.pdf') }}" class="btn btn-success" style="margin-right: 300px;">PDF</a>
        <br><br>


        @if(session('message'))
        <p class="alert alert-secondary">{{ session('message') }}</p>
        @endif

        <section class="section">
            <div class="card">
                <div class="card-header">
                </div>


                <!-- Search Button of Date -->

                <div class="card-body">
                    <table class="table table-striped table-sm table-hover table-light" id="table1">


                        <div class="hero__search__form">


                            <form action="{{route('search')}}" method="get">

                        </div>
                        <input name="product" type="text" placeholder="What do yo u need?">
                        <button type="submit" class="site-btn">my search</button>
                        </form>
                </div>

                <thead class="text-center">
                    <tr>
                        <th>SL</th>
                        <th>Test Department</th>
                        <th> Test Name</th>
                        <th> Price</th>
                        <th> Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody class="text-center">
                    @foreach($testlist as $test)
                    <tr>
                        <td>{{$loop->iteration}} </td>
                        <td>{{$test->test_category->test_department}}</td>
                        <td>{{$test->service_name}}</td>
                        <td>{{$test->price}}</td>
                        <td>{{ $test->created_at->format('d M Y') }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="">Edit</a>

                            <form action="" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning btn-sm">Delete</button>

                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>

                {{$testlist->links()}}

            </div>
    </div>

    </section>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "dom": '<"top"i>rt<"bottom"><"clear">'
            });

            $('#mySearchButton').on('keyup click', function() {
                table.search($('#mySearchText').val()).draw();
            });
        });
    </script>


</x-backend.layouts.master>