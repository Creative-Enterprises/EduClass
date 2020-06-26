<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('logincss/iofrm-theme2.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{url('login/images/logo-light.svg')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Classroom.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="User ID" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input type="checkbox" id="chk1"><label for="chk1">Remmeber me</label>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('login/js/jquery.min.js')}}"></script>
<script src="{{asset('login/js/popper.min.js')}}"></script>
<script src="{{asset('login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('login/js/main.js')}}"></script>
</body>
</html>
