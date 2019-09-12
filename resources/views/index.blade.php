<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div>
        <ul>       
            @foreach ($results as $result)                
                @foreach ($result as  $events)
                    <li>
                        event: {{ $events->event }}
                        timestamp: {{  $events->timestamp }}
                    </li>
                        <ul>
                            @foreach ($events->custom_data as  $data)
                                <li> {{ $data->key }} - {{ $data->value }}</li>
                            @endforeach
                        </ul>
                @endforeach           
            @endforeach
        </ul>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>