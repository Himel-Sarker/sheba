<table class="table table-striped table-sm table-hover table-light" id="table1">
    <thead class="text-center">
        <tr>
            <th>SL</th>
            <th>Test Department</th>
            <th> Test Name</th>
            <th> Price</th>
            <th> Created At</th>
        </tr>
    </thead>
    <tbody class="text-center">

        @foreach($list as $test)
        <tr>
            <td>{{$loop->iteration}} </td>
            <td>{{$test->test_category->test_department}}</td>
            <td>{{$test->service_name}}</td>
            <td>{{$test->price}}</td>
            <td>{{$test->created_at}}</td>
        </tr>
        @endforeach

    </tbody>
</table>