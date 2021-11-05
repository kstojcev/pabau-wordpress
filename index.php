<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citify</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <div class="hero-section d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-uppercase text-white fw-bold">Explore the most famous destinations of the world</h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="main-section container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center where-to">
                    <div>
                        <input type="text" placeholder="Where to?">
                        <button class="arrow-right"><i class="fas fa-arrow-right fa-2x text-white"></i></button>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3">
                    <h3 class="fw-bold">Guidance</h3>
                    <p>Expert insight & travel knowledge</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-bold">Value</h3>
                    <p>Irresistible rates, offers & benefits</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-bold">Peace of Mind</h3>
                    <p>Reassurance to book with confidence</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-bold">Service</h3>
                    <p>Beside you every step of the way</p>
                </div>
            </div>

            <div class="row mt-5 latest-updates">
                <div class="col-md-12 text-center mt-5 mb-4">
                    <h3 class="fw-bold">Our Latest Updates</h3>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card text-white">
                        <img src="https://wallpaperaccess.com/full/41211.jpg" class="card-img hover" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Prague added on our map</h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card text-white">
                        <img src="https://wallup.net/wp-content/uploads/2016/01/192153-landscape-Bora_Bora.jpg" class="card-img hover" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Bora Bora unlocked on the travel destinations</h5>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 offset-3 py-5">
                    <h4>Reservations</h4>
                    <form action="">
                        <input id="first_name" type="text" class="form-control mb-3" placeholder="First Name">
                        <input id="last_name" type="text" class="form-control mb-3" placeholder="Last Name">
                        <input id="email" type="email" class="form-control mb-3" placeholder="Email">
                        <input id="phone" type="text" class="form-control mb-3" placeholder="First Name">
                        <select name="destination" id="destination" class="form-control mb-3">
                            <option value="" selected disabled hidden>Choose your destination</option>
                            <option value="">Prague</option>
                            <option value="">Bora Bora</option>
                            <option value="">Other options from API</option>
                        </select>
                        <button id="submit_btn" class="form-control btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center text-white py-2 fixed-bottom">
        <div class="container d-flex justify-content-around">
            <span>
                +54 2902 489 880
            </span>
            <span>
                © 2021 Citify
            </span>
            <span>
                Send us an email
            </span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>
</html>