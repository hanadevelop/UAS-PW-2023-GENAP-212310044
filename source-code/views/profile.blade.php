<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SituGede</title>
	<link rel="icon" type="image/png" href="/Assets/LogoSituGede.png">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body {
            background: #f9f9f9;
            
        }

        .shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
        }

        .profile-tab-nav {
            min-width: 250px;
        }

        .tab-content {
            flex: 1;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .nav-pills a.nav-link {
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
            border-radius: 0;
            color: #333;
        }
        .nav-pills a.nav-link i {
            width: 20px;
        }

        .img-circle img {
            height: 100px;
            width: 100px;
            border-radius: 100%;
            border: 5px solid #fff;
        }
    </style>
</head>
<body>
    <section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="/Assets/kanoo.png" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">{{auth()->user()->name}}</h4>
					</div>
					
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
                        
                        <a class="nav-link" id="back-tab" data-toggle="pill" href="#back" role="tab" aria-controls="back" aria-selected="false">
							<i class="fa fa-arrow-left text-center mr-1"></i> 
							Back
						</a>
					</div>
				</div>

				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nama Depan</label>
								  	<input type="text" class="form-control" value="{{ old('nama') }}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nama Belakang</label>
								  	<input type="text" class="form-control" value="{{ old('nama') }}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="{{ old('nama') }}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nomer Telephone</label>
								  	<input type="text" class="form-control" value="{{ old('nama') }}">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					
					
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>


                    <div class="tab-pane fade" id="back" role="tabpanel" aria-labelledby="back-tab">
						<h3 class="mb-4">Back To Dashboard? </h3>
                        <div>
							<a href="/dashboard" class="btn btn btn-primary me-1">Yes</a>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>