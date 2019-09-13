<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Autocomplete</title>
        <style>

        </style>
    </head>
	<body>
        <div class="jumbotron text-center">
            <form>
                <h3>Auto complete da Api Coletora</h3>
                <div class="form-group">
                    <label for="event">Event:</label>
                    <input type="text" class="form-control" name="campo-busca" id="campo-busca" placeholder="Buscar">
                </div>
            </form>

            <div id="result" class="result-content"></div>
        </div>

        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/event.js"></script>
	</body>
</html>
