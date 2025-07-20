
<base href="/public">
@include('home.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
<body class="main-layout">
    <!-- loader -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header inner -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Book a Room</h2>
                        <p>Experience comfort and luxury with our exquisite accommodations.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="room">
                        <div class="room_img">
                            <img style="width: auto; height: 300px;" src='room/{{$room->image}}' alt="#">
                        </div>
                        <div class="bed_room">
                            <h2>{{$room->room_title}}</h2>
                            <p>{{$room->description}}</p>
                            
                            <h4>Room Type: {{$room->room_type}}</h4>
                            <h4>Price: {{$room->price}}$ per day</h4>
                            <h4>Wifi: {{$room->wifi}}</h4>
                            <a class="btn btn-primary" href="{{url('room_details',$room->id)}}">Room Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Reservation Form</h2>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert">X</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    @if($errors)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif
                    <form action="{{url('add_booking',$room->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{Auth::id() ? Auth::user()->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="{{Auth::id() ? Auth::user()->email : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{Auth::id() ? Auth::user()->phone : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="startDate">Start Date</label>
                            <input type="date" name="startDate" id="startDate">
                        </div>
                        <div class="form-group">
                            <label for="endDate">End Date</label>
                            <input type="date" name="endDate" id="endDate">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Book Room">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('home.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

<style>
    label {
        display: inline-block;
        width: 120px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="date"] {
        width: calc(100% - 130px);
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .btn-primary {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        background-color: #007bff;
        border: none;
        cursor: pointer;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .alert {
        margin-top: 10px;
    }
</style>