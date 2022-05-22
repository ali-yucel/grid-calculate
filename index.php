<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Grid Calculate · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/album/album.css" rel="stylesheet">
  </head>
  <body>
    <header>      
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="/">Home</a>
          <a class="p-2 text-dark" href="#">Enterprise</a>
          <a class="p-2 text-dark" href="#">Support</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Donate!</a>
      </div>
    </header>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Grid Calculate!</h1>
          <p class="lead text-muted">Select optionally the common devices page dimension or choose your own one.</p>
          <!-- <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>-->
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          
          <form id="page-content">
   
            <div class="form-row">
              <div class="form-group col-md-12">
                <div id="result-content" class="alert alert-success d-none"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="min-container">Min. Grid Container</label>
                <input type="text" class="form-control " name="minwidth" placeholder="Min Container" value="1200">
              </div>
              <div class="form-group col-md-6">
                <label for="max-container">Max. Grid Container</label>
                <input type="text" class="form-control" name="maxwidth" placeholder="Max Container" value="1250">
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-6">
                <label for="min-container">Colons</label>
                  <div class="custom-checkboxs">
                    <?php for($i=2;$i<=12;$i++){ ?>
                      <div class="form-group custom-checkbox">
                        <input type="checkbox" class="custom-control-input checked-colons" value="<?php echo $i; ?>" id="customCheck<?php echo $i; ?>" <?php if($i == 4 || $i == 12){ ?> checked <?php } ?>>
                        <label class="" for="customCheck<?php echo $i; ?>"><?php echo $i; ?></label>
                      </div>
                    <?php } ?>
                  </div>
              </div>
              <div class="form-group col-md-6">
                <label for="max-container">Gutter</label>
                <input type="text" class="form-control" name="gutter" placeholder="Gutter Değeri" value="24">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                  <a id="submit-btn" class="btn btn-primary text-white">Calculate!</a> 
              </div>
            </div>
          </form>

        </div>
      </div>
    </main>
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>&copy; Bootstrap, but please download and customize it for yourself!</p>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
      window.jQuery || document.write(' < script src = "/docs/4.3/assets/js/vendor/jquery-slim.min.js" > < \/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="script.js" crossorigin="anonymous"></script>
  </body>
</html>