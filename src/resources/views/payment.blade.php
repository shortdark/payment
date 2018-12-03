<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Client Test Payment Button</title>

        <link rel="preload" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" as="style" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></noscript>

        <style>
            html,body {
                height: 100%;
            }
            .hidden{
                display:none!important
            }
        </style>

    </head>
    <body class="bg-dark">

        <div class="container col-lg-3 col-md-10 col-sm-12 d-block mx-auto" style="margin-top: 120px;">
            <div class="bg-light w-100 border border-dark text-center rounded">

                <img src="/images/4735.jpg" class="rounded-circle d-block mx-auto bg-dark" style="width:200px; height:200px; margin-top: -100px; z-index: 2;" />

                <h1>Product Name</h1>

                <span class="badge badge-pill badge-success" style="width: 90px; height: 30px; padding-top: 9px;">On Sale</span>

                <p class="text-center px-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                    {{ Session::get('error') }}
                </div>

                <div id="charge-success" class="alert alert-success {{ !Session::has('success') ? 'hidden' : ''  }}">
                    {{ Session::get('success') }}
                </div>

                <form action="/post-payment" method="POST">
                    {{ csrf_field() }}
                    {!! $button !!}
                </form>

                <h6 class="pt-2">Share this product</h6>

                <div class="row mx-auto d-block pb-5">
                    <span>
                        <img src="/images/socialmedia-fb.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-instagram.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-twitter.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-pinterest.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-skype.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-linkedin.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-snapchat.png" style="width: 50px; height: 50px;" />
                    </span>
                    <span>
                        <img src="/images/socialmedia-tumblr.png" style="width: 50px; height: 50px;" />
                    </span>
                </div>



            </div>




        </div>





    </body>
</html>
