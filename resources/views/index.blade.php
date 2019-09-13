<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <ul>
            @foreach ($results as $result)
                @foreach ($result as  $events)
                    <div class="timeline">
                        <div class="container left">
                            <div class="content">
                                <li>
                                    event: {{ $events->event }}
                                </li>
                                <li>
                                    timestamp: {{  $events->timestamp }}
                                </li>
                            <ul>
                                @foreach ($events->custom_data as  $data)
                                    <li> {{ $data->key }} - {{ $data->value }}</li>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </ul>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
