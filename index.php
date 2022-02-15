<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no"" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="main.css" />
    <script
      src="https://kit.fontawesome.com/52e9b973f0.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>Artworks</title>
  </head>

  <body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
      <div class="container">
        <a href="#" class="navbar-brand">Just JPEGs<i class="fa fa-child" aria-hidden="true"></i></a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#service-sec" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#products" class="nav-link">Product</a>
            </li>
            <li class="nav-item">
              <a href="#about-sec" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart fa-2x"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--End of Nav Bar-->
    <!--Slider-->
    <section id="main">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item carousel-image-1 active">
            <div class="container">
              <div class="carousel-caption d-none d-sm-block text-right mb-5">
                <h1 class="display-3 title-color">Just JPEGs</h1>
                <p class="lead">
                  We Provide Beatiful Exquisite Artworks as good old JPEGs
                </p>
                <a href="#products" class="btn btn-color slide-btn btn-lg">
                  Get your's Now!
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-image-2">
            <div class="container">
              <div class="carousel-caption d-none d-sm-block mb-5">
                <h1 class="display-3 title-color">Not NFTS</h1>
                <p class="lead">
                  A vintage alternative to NFTs
                </p>
                <a href="#about-sec" class="btn btn-color slide-btn btn-lg">
                  Learn More
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-image-3">
            <div class="container">
              <div class="carousel-caption d-none d-sm-block mb-5">
                <h1 class="display-3 title-color">Handmade</h1>
                <p class="lead">
                  and sent to your email
                </p>
                <a href="#products" class="btn btn-color slide-btn btn-lg">
                  See Catalog
                </a>
              </div>
            </div>
          </div>
          <a href="#carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </section>
    <!--end of slider-->
    <!--Services-->
    <section id="service-sec" class="services py-5 text-center">
      <div class="container">
        <div class="row">
          <!--Single service-->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fa fa-envelope-o fa-2x" ></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">Off the blockchain</h5>
            <p class="text-capitalize">
              JPEGs are sent exclusively through secure email to prevent someone from stealing it from you.
            </p>
          </div>
          <!--End of single service-->
          <!--Single service-->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fa fa-copyright fa-2x"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">JPEG Recovery</h5>
            <p class="text-capitalize">
              We offer free recovery of stolen or lost JPEGs for our customers.
            </p>
          </div>
          <!--End of single service-->
          <!--Single service-->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fa fa-eye fa-2x"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">Eyes</h5>
            <p class="text-capitalize">
              If you can draw eyes contact us for a position
            </p>
          </div>
          <!--End of single service-->
        </div>
      </div>
    </section>
    <!--end of Services-->
    <!--Featured products-->
    <section id="products" class="products py-5">
      <div class="container">
        <!--Section Title-->
        <div class="row">
          <div class="col-10 mx-auto col-sm-6 text-center">
            <h1 class="text-capitalize products-title">
              Featured Products
            </h1>
          </div>
        </div>
        <!--End of section title-->
        <!--Product Items-->
        <div class="row product-items" id="product-items">
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F90%2F63%2F43%2F9063438123f283733991db7aedbc2e88.jpg&f=1&nofb=1" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">2 cowboys</h5>
                  <span><i class="fab fa-ethereum"></i>0.5</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fe4p7c9i3.stackpathcdn.com%2Fwp-content%2Fuploads%2F2020%2F10%2F53402120_1742916632582527_5044222375187652629_n-990x987.jpg%3Fiv%3D164&f=1&nofb=1" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">1 cowboys</h5>
                  <span><i class="fab fa-ethereum"></i>0.33</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://images.squarespace-cdn.com/content/v1/5d7144b99b503d0001bd2912/1619123606529-BWL5ZI6CDU7ZSC2NWW3G/image-asset.jpeg?format=750w" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">pink trees</h5>
                  <span><i class="fab fa-ethereum"></i>2</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://images.squarespace-cdn.com/content/v1/5d7144b99b503d0001bd2912/1607122226184-RQZFCMK5MH3H2EQBZ45I/image-asset.jpeg?format=750w" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">chief</h5>
                  <span><i class="fab fa-ethereum"></i>0.75</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://images.squarespace-cdn.com/content/v1/5d7144b99b503d0001bd2912/1615976810295-GRMI6TIVV3L6A615PHRG/image.jpg?format=750w" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">the band</h5>
                  <span><i class="fab fa-ethereum"></i>1.5</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://images.squarespace-cdn.com/content/v1/5d7144b99b503d0001bd2912/1567706616377-7DAK3U4C2STU1I8I0U1M/Electric-Desert-35x40.jpg?format=750w" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">pulling the reigns</h5>
                  <span><i class="fab fa-ethereum"></i>1</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi1.wp.com%2Friveridgeproduce.com%2Fwp-content%2Fuploads%2F2017%2F05%2FRome2-e1542813988957.jpg%3Ffit%3D1985%252C1905%26ssl%3D1&f=1&nofb=1" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">the apple</h5>
                  <span><i class="fab fa-ethereum"></i>350</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://images.squarespace-cdn.com/content/v1/5d7144b99b503d0001bd2912/1567705455289-NLXF3F01R7YTTB17NCNA/Boys-Of-The-Landcopy.jpg?format=750w" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">be careful</h5>
                  <span><i class="fab fa-ethereum"></i>0.69</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
          <!--Single Item-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flavieboheme.ch%2Fwp-content%2Fuploads%2F2017%2F01%2F15800297_10155105202684384_3569082903241686260_o-1024x925.jpg&f=1&nofb=1" alt="card 1" class="card-img-top product-img">
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">night</h5>
                  <span><i class="fab fa-ethereum"></i>3.33</span>
                </div>
              </div>
            </div>
          </div>
          <!--End of Single Item-->
        </div>
        <!--End of Product items-->
      </div>
    </section>
    <!--End of Featured Products-->
<!--About Section-->
<section id="about-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 text-center">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flavieboheme.ch%2Fwp-content%2Fuploads%2F2017%2F01%2F14067889_10154666823014384_428083439618259135_o.jpg&f=1&nofb=1" alt="mark" width="450" height="150" class="img-fluid watch-img">
      </div>
      <div class="col-lg-7 text-lg-right text-center text-color about-text">
        <h1>About Mark</h1>
        <p class="text">He can only make western art</p>
      </div>
    </div>
  </div>
</section>

<!--End of About Section-->



    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
