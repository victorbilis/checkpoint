<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS Portal With Twilio</title>
    <!-- Bootstrap styles CDN -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Verification Code
                        </div>
                        <div class="card-body">
                            <form action="{{route('verificar')}}" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="phone_number" value="{{$phonenumber}}"  placeholder="Enter Phone Number">
                                <label>Enter Verification Code</label>
                                <input type="number" class="form-control" name="verification_code"  placeholder="Enter Code">
                                </div>
                                @if ($errors->has('error'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('error') }}</strong>
                                    </span>
                                @endif
                                <button type="submit" class="btn btn-primary">Register User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>