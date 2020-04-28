<head>
  <title>D'ANDRÉ PHILLIPS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/67464226ff.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>

</head>

<body onload="splash(1000)" data-spy="scroll" data-target="#home" data-offset="0">

    <div id="splashscreen">
        <h1>D'André Phillips</h1>
    </div>
    <script>
        function splash(param) {
            var time = param;
            setTimeout(function () {
                $('#splashscreen').slideUp();
            }, time);
        }
    </script>

    <nav class="navbar navbar-expand-lg" id="home">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo-section">
                    <h1>D'André Phillips</h1>
                </div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-grip-lines"></i></span>
            </button>
        </div>

        <div class="nav-desktop collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bio">Bio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#websites">Websites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    
