<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TASTY CORNER RESTAURANT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
      body {
        /* background-color: #18171c; */
        color: #ffffff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        margin: 0;
      }

      .full-height {
        background-image: url('./pos/img/blur-coffee-cafe-shop-restaurant-with-bokeh-background-xd.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
      }

      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .position-ref {
        position: relative;
      }

      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }

      .content {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1.4rem;
        align-items: center;
        height: 60vh;
        text-align: center;
        backdrop-filter: brightness(0.9);
      }

      .title {
        border-top: solid 3px white;
        border-bottom: solid 3px white;
        color: #ffffff;
        font-weight: 900;
        font-size: 54px;
      }

      .links {
        display: flex;
        gap: 1rem;
      }

      .links > a {
        padding: 1rem ;
        border-radius: 1rem;
        background-color: rgba(222, 165, 51, 0.9);
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.1rem;
        text-decoration: none;
        text-transform: uppercase;
        transition: all .5s ease;
      }
      
      .links > a:hover {
        text-decoration: underline;
        background-color: rgba(202, 148, 40, 0.9);
        transition: all .5s ease;
      }

      .m-b-md {
        margin-bottom: 30px;
      }
    </style>
</head>

<body>
    
    <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="./pos/img/Logo.svg" alt="">
            <div class="title m-b-md">
            TASTY CORNER RESTAURANT 
            </div>

            <div class="links">
                <a href="pos/admin/">Admin Login</a>
                <a href="pos/cashier/">Cashier Login</a>
                <a href="pos/customer">Customer Login</a>
            </div>
        </div>
    </div>
</body>

</html>