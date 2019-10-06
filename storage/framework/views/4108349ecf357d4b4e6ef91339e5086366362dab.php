<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>stay4health - its the way to live life through body and mind | fitnees Guru</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="stay4health.com : its way to liv life through body and mind. It has Expert doctors, yogi, expert's information, everything about body and mind. fitness is the key for us." />
    <meta name="keywords" content="Everything" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="images/favicon.ico"/>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6754955755683111",
              enable_page_level_ads: true
         });
    </script>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ttmenu.js')); ?>"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    
    


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Indie+Flower" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/menu.css')); ?>" rel="stylesheet">
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
    
    <?php if(auth()->guard()->guest()): ?>
        <section id="menu_header">
            <div id="header_top" class="py-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <p><i class="fa fa-envelope"></i> <a class="disable" href="">boota@bootasingh.com</a></p>
                        </div>
                        <div class="col-lg-2 col-md-2 text-right">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="<?php echo e(route('login')); ?>">Login</a></p>
                        </div>
                        <div class="col-lg-2 col-md-2 text-right">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="<?php echo e(route('register')); ?>">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="header_bottom" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand logo" href="<?php echo e(route('welcome')); ?>">
                        <img src="images/logo1.png" alt="Bady And Mind" class="img-fluid" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo e(route('welcome')); ?>">Home
                                <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Start <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width:100%;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="bg-success">top field 1</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <hr>
                                            <h5 class="bg-success">tp field 2s</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                        </div> <div class="col-sm-3">
                                            <h5 class="bg-success">top field 1</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <hr>
                                            <h5 class="bg-success">tp field 2s</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                        </div> <div class="col-sm-3">
                                            <h5 class="bg-success">top field 1</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <hr>
                                            <h5 class="bg-success">tp field 2s</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                        </div> <div class="col-sm-3">
                                            <h5 class="bg-success">top field 1</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <hr>
                                            <h5 class="bg-success">tp field 2s</h5>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                            <a class="dropdown-item" href="">Setting</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="https://tools.stay4health.com/">Tools</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="https://video.stay4health.com/">videos</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo e(route('allExperts')); ?>">Our Expert</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo e(route('yoga')); ?>">Yoga</a>
                            </li>
                            <!--
                            <li class="nav-item ">
                                <a class="nav-link" href="https://www.badabusiness.com/quotes">Quotes</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="https://www.badabusiness.com/articles">Articles</a>
                            </li>
                            -->
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo e(route('about')); ?>">About Us</a>
                            </li>

                            <?php else: ?>
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </nav>



        </section>

         





        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

<section class="copyright py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <span class="px-1 py-2">
                    <img src="https://www.badabusiness.com/images/mastercard_logo_footer.gif" alt="Master Card">
                </span>
                <span class="px-1 py-2">
                    <img src="https://www.badabusiness.com/images/visa_logo_footer.gif" alt="Visa Card">
                </span>
                <span class="px-1 py-2">
                    <img src="https://www.badabusiness.com/images/rupay_logo_footer.gif" alt="Rupay Card">
                </span>
                <span class="px-1 py-2" id="siteseal">
                    <span id="siteseal"><script async="" type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=gSlcCjcvKG3u8PkXLzfN3Fw0NMej8FGKH2fOmSMdHiK7ySpIdleDhnZvYg60"></script></span>
                </span>         
            </div>
            <div class="col-md-6 text-right">
                <ul class="list-inline m-0">
                    <li class="list-inline-item pr-2">
                        <a href="">
                            
                        </a>
                    </li>
                    <!--
                    <li class="list-inline-item pr-2">
                        <a href="">Refunds</a>
                    </li>
                    -->
                    <li class="list-inline-item pr-2">
                        <a href="https://www.badabusiness.com/customer/terms_conditions">Term and Conditions</a>
                    </li>
                    <li class="list-inline-item pr-2">
                        <a href="https://www.badabusiness.com/customer/privacy_policy">Privacy and Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- unit1 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6754955755683111"
             data-ad-slot="5216685041"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

        <div onclick="topFunction()" class="scroll-to-top scroll-to-target" data-target="html" style="display: block;"><span class="fa fa-long-arrow-up"></span></div>
        <footer id="footer" class="p-4 text-center">
            <h6>&copy; Stay4health Pvt Ltd.</h6>
        </footer>


</body>
</html>
<?php /**PATH /home/u890894661/domains/stay4health.com/resources/views/layouts/app.blade.php ENDPATH**/ ?>