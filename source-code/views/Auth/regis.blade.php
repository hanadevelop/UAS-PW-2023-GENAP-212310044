<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SITUGEDE</title>

    <link rel="stylesheet" href="regisstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
</head>
<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">    
                        <h1>Create Account</h1>
                    </div>
                    
                    <form action="/regis" method="POST">
                        @csrf
                    <div class="login-form">
                        <label for="name" class="form-label">Fullname:</label>
                        <input type="name" class="form-control" id="name" placeholder="Fullname" name="name">
        
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
        
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                         
                        <label for="confirm" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control @error('confirm') is-invalid @enderror" id="confirm" placeholder="Confirm Password" name="confirm">
                        @error('confirm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </form>
                         
        
                        <button class="signin">Sign Up</button>
                        <p class="text-decoration-none text-center">Or</p>
                        <button class="signin-google">
                            <img src="/Assets/google.png" alt="">
                            Sign Up With Google 
                        </button>
                        
                        <div class="text-center">

                            <span class="d-inline">Already have an account! <a href="/login" class="signup d-inline text-decoration-none">Login</a></span>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>

        <div class="login-right">
            <img src="/Assets/situgede.png" width="800px" height="760px" alt="">
            <p><a class="link link-opacity-10-hover link-light" href="/dashboard"><b>Beranda</b></a></p>
        </div>
    </section>
</body>
</html>