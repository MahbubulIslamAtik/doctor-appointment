<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home Page</title>
  </head>
  <body>
      <div class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="route('index')">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('departments.index') }}">Department</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
      </div>
        
      <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('index') }}" class="btn btn-outline-primary" style="float: right">All Appointment</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Appointment ID: </label>
                                <input type="text" name="appointment" id="" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="">Appointment Date: </label>
                                <input type="date" name="appointment_date" id="" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="">Doctor Name:</label>
                                <select name="doctor_id" id="" class="form-control">
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="">Patient Name: </label>
                                <input type="text" name="patient_name" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Patient Phone: </label>
                                <input type="text" name="patient_phone" id="" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="">Total Fee: </label>
                                <input type="text" name="total_fee" id="" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="">Paid Amount: </label>
                                <input type="text" name="paid_amount" id="" class="form-control">
                            </div>
    
                            <div class="form-group my-2">
                                <input type="submit" id="" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>




































