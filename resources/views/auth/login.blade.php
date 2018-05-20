<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin Dashboard | Login</title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
				{!! BootForm::open(['url' => url('/admin/login'), 'method' => 'post']) !!}
                    
				<h1>Login</h1>
			
				{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email', 'afterInput' => '<span>test</span>'] ) !!}
			
				{!! BootForm::password('password', 'Password', ['placeholder' => 'Password']) !!}
				
				<div>
					{!! BootForm::submit('Log in', ['class' => 'btn btn-default submit col-md-9']) !!}
				</div>
                    
				<div class="clearfix"></div>
                    
				{!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>