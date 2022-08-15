<x-backend.layouts.master>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Departments List</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">General Departments</li>
                        <li class="breadcrumb-item active" aria-current="page">Departments List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
      
    @if(session('message'))
  <p class="alert alert-secondary">{{ session('message') }}</p>
  @endif

    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm table-hover table-light" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>SL</th>
                            <th> Test Department Name</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody class="text-center">

                    @foreach($test_departments as $test)
                        <tr>
                           <td>{{$loop->iteration}} </td>
                           <td>{{$test->test_department}}</td>
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
            </div>
        </div>

    </section>

</div>

</x-backend.layouts.master>