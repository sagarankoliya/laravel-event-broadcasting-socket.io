<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
		<div id='app'></div>
		<div class="flex-center position-ref full-height">
			<div class="content">
				<div class="title m-b-md">
					Laravel Event Broadcasting with Redis and Laravel Echo
				</div>
				<div class="links">
					<button onclick="callEvent()" class="btn btn-primary">Call event</button>
				</div>
			</div>
		</div>
    </body>
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    <script>
		
		Echo.channel('channel1')
		  .listen('NewComment', (msg) => {
				alert(msg.chatMessage);
		  })
		
		function callEvent(){
			axios.get('/call-event')
				.then((response) => {
					
				})
				.catch(function (error) {
					console.log(error);
				});
		}  
    </script>
</html>
