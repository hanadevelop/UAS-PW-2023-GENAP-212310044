<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SITUGEDE</title>

    <link rel="stylesheet" href="loginstyle.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
</head>
<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">    
                        <h1>Welcome Back</h1>
                        <p>Welcome Back! Please enter your details.</p>
                    </div>
                    

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if (session()->has('loginerror'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginerror')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="/login" method="POST">
                    @csrf
                    
                        <div class="login-form">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" autofocus required value="{{ old ('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
        
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        <a href="#" class="text-decoration-none">Forgot Password</a> 
            
                        
                        
                    </form>
                        
                        <button class="signin">Sign In</button>
                        <p class="text-decoration-none text-center">Or</p>
                        
                        <button class="signin-google">
                            <img src="/Assets/google.png" alt="">
                            Sign Up With Google 
                        </button>
                        
                    
                        <div class="text-center">
                            <span class="d-inline">Don't have an account? <a href="/regis" class="signup d-inline text-decoration-none">Sign up for free</a></span>
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