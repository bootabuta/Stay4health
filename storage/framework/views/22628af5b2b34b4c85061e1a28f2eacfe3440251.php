<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="reneurship." />
    <meta name="keywords" content="Everything" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/slick.js')); ?>"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    
    


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Indie+Flower" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134647704-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-134647704-1');
        </script>
        <script>
            $(document).ready(function(){
                var shrinkHeader = 96;
                $(window).scroll(function() {
                    var scroll = getCurrentScroll();
                    if (scroll >= shrinkHeader) {
                        $('#header_bottom').addClass('shrink');
                    } else {
                        $('#header_bottom').removeClass('shrink');
                    }
                });
        
                function getCurrentScroll() {
                    return window.pageYOffset;
                }
            });
        </script>    

</head>
<body>
    
             <nav id="header_bottom" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="https://www.bootasingh.com/">
                        <img src="images/logo1.png" alt="Bady And Mind" class="img-fluid" width="200" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                           
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="images/w1.png" alt="Bady And Mind" class="" width="70" />
                                </a>
                            </li>   
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="images/pph.png" alt="Bady And Mind" class="rounded-circle" width="50" /> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="">Setting</a>

                                    <a class="dropdown-item" href="">Privacy</a>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>


                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>

        </section>

         





        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>


         <div onclick="topFunction()" class="scroll-to-top scroll-to-target" data-target="html" style="display: block;"><span class="fa fa-long-arrow-up"></span></div>
        <footer id="footer" class="p-4 text-center">
            <h6>&copy; stay4health Pvt Ltd.</h6>
        </footer>
        <script>
            $(document).ready(function($){
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 50) {
                        $('.scroll-to-top').fadeIn('slow');
                    } else {
                        $('.scroll-to-top').fadeOut('slow');
                    }
                });
                $('.scroll-to-top').click(function(){
                    $("html, body").scrollTop(0);
                    return false;
                });
            });
        </script>



        
</body>
</html>
<?php /**PATH F:\Projects\htdocs\Stay4Health\resources\views/layouts/userApp.blade.php ENDPATH**/ ?>