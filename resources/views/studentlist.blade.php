
    <table class="table table-striped">
        <thead class="bg-secondary">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">CNO</th>
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- {{dd($students)}} --}}
         @foreach ($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->regNo }}</td>
            <td>{{ $student->firstName }}</td>
            <td>{{ $student->secondName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->speciality }}</td>
            {{-- <td><a class="btn btn-sm btn-info" href="{{url('show/'.$student->id)}}">Show</a> </td> --}}
            <td><a class="btn btn-sm btn-warning" href="{{url('edit/'.$student->id)}}">Edit</a></td>
            <td><a class="btn btn-sm btn-danger" href="{{url('delete/'.$student->id)}}">Delete </a></td>
          </tr>
          @endforeach
        </tbody>
      </table>