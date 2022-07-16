<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ajax Form Laravel</h1>
        <hr>
        <div class="row">
         
            <div class="col-6 offset-3">
               
                <form action="" id="myform" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="">Select State</label>
                        <select name="state_id" id="" class="form-control">
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select State</label>
                        <input type="text" name="city_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" id="submit">Add City</button>
                    </div>     
                </form>
            </div>
            <div>

            </div>
        </div>
        <hr>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(e){
                e.preventDefault();

                $.ajax({
                    url:"{{ url('/addcity') }}",//route of response function in controller
                    type:"post",
                    datatype:'json',
                    data:$('#myform').serialize(),
                    success:function(response){
                        console.log(response);
                    }

                });
            });
        });
    </script>
</body>
</html>