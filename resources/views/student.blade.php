<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Student System!</title>
  </head>
  <body>
     @include('navbar')

    @if ($layout =='index')
      <div class="container-fluid mt-4">
          <div class="row">
            <section class="col">
              @include('studentlist')
            </section>
            <section class="col">
            </section>
          </div>
      </div>
        
    @elseif($layout =='create')
        <div class="container-fluid mt-4">
          <div class="row">
            <section class="col">
              @include('studentlist')
            </section>
            <section class="col">
              <div class="card-header">
               ENTER STUDENTS DETAILS
              </div>
            <form action="{{url('store')}}" method="post">
               @csrf
                <div class="form-group">
                  <label>Registration Number</label>
                  <input type="text" class="form-control" name="regNo" placeholder="Enter Registration Number" required>
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                  <label>Second Name</label>
                  <input type="text" class="form-control" name="secondname" placeholder="Enter Second Name" required>
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="number" class="form-control" name="age" placeholder="Enter Age" required>
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input type="text" class="form-control" name="speciality" placeholder="Enter Speciality" required>
                </div>
                <button type="submit" class="btn btn-sm btn-success">submit</button>
                <button type="reset" class="btn btn-sm btn-warning">reset</button>
              </form>
            </section>
          </div>
       </div>
    @elseif($layout =='show')
        <div class="container-fluid mt-4">
          <div class="row">
            <section class="col">
              @include('studentlist')
            </section>
            <section class="col">

            </section>
          </div>
       </div>
    @elseif($layout =='edit')
        <div class="container-fluid mt-4">
          <div class="row">
            <section class="col">
              @include('studentlist')
            </section>
            <section class="col">
              <form action="{{url('update/'.$student->id)}}" method="post">
                @csrf
                 <div class="form-group">
                   <label>CNE</label>
                 <input type="text" value="{{ $student->regNo }}" class="form-control" name="regNo" placeholder="Enter Registration Number">
                 </div>
                 <div class="form-group">
                   <label>First Name</label>
                   <input type="text" value="{{ $student->firstName }}" class="form-control" name="firstname" placeholder="Enter First Name ">
                 </div>
                 <div class="form-group">
                   <label>Second Name</label>
                   <input type="text" value="{{ $student->secondName }}" class="form-control" name="secondname" placeholder="Enter Second Name ">
                 </div>
                 <div class="form-group">
                   <label>Age</label>
                   <input type="age" value="{{ $student->age }}" class="form-control" name="age" placeholder="Enter Age ">
                 </div>
                 <div class="form-group">
                   <label>Speciality</label>
                   <input type="text" value="{{ $student->speciality }}" class="form-control" name="speciality" placeholder="Enter Speciality ">
                 </div>
                 <button type="submit" class="btn btn-sm btn-info">update</button>
                 <button type="reset" class="btn btn-sm btn-warning">reset</button>
               </form>
            </section>
          </div>
       </div>  
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>