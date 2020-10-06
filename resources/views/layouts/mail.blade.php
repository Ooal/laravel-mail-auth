<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style media="screen">
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: 'Nunito', sans-serif;
   }
   body {
     background: #5926a1;
     color: #fff;
   }
   a{
     color: #fff;
   }
   .container {
     display: flex;
     flex-direction: column;
       margin: auto;
   }
    </style>
  </head>
  <body>
    <div class="container">
   @yield('content')
    </div>
  </body>
</html>
