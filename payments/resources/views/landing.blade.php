<!DOCTYPE html>
<html>
<head>
  <title>
    RoadPayments - easiest way to pay for your every day trips
  </title>
  <!-- <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap-theme.css"> -->
  <meta rel="icon" href="{{ asset('img/global-trip-icon-23816027.jpg') }}">
  <!-- <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <meta charset="utf-8">
</head>

<body>
<!-- NAVBAR
================================================== -->
    <div class="navbar-wrapper">
      <div class="container-fluide">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
                
              <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-road"></i><i class="glyphicon glyphicon-plane"></i>&nbsp;RoadPayments</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right nav-text-color">
              @if (Auth::guest())
				<li><a href="{{ url('/auth/login') }}">Sign In</a></li>
				<li><a href="{{ url('/auth/register') }}">Sign Up</a></li>
				@else
				<li><a href="#">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
				<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
				@endif
              </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <h1>Причина создания нашего сервиса</h1>
              <p> Миллионы людей ежедневно пользуются общественным транспортом, при этом отстаивая большие очереди, для покупки билета, ищя деньги, собирая мелочь, что приносит массу неудобств. Один наш сервис и пластиковая карточка способны решить данную проблему! Вы всегда будете контроллировать свои счет, видеть, когда и где вы воспользовались картой, и какая сумма была потрачена</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Join us today</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Почему им стоит пользоваться?</h1>
              <p>В любое время, с любого устройства, вы сможете пополнить свой виртуальный счет, тем самым обеспечив себе спокойную и не тревожную дорогу на работу, домой, к родителям, знакомым. Куда бы вы не ехали, каким бы видом транспорта не пользовались,сколько бы наличных денег у вас не осталось, вы всегда будете уверены, что сможете добраться туду, куда вам нужно</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Что обеспечивает гарантию качетсва?</h1>
              <p>Вы может не переживать, на счет того, что на вашей карте не будет денег, в самый ответственный момент. При поддержке плтежного сервиса Paymentwall счет на карте будет пополняться мгновенно, и переживать за, то - прошла оплата или нет - вы не будуте</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Join us today</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<!--<div class="row btn-cl">
  <div class="col-md-6 col-md-offset-3 text-center">
   <button type="button" class="btn btn-primary btn-lg" href="#">Join us now and start your trip!</button>
  </div>
</div>-->

</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<img  src="" alt="background" id="bg" style="display:none" /> 
<script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
<script>
  
  $.backstretch([
      "payments/public/img/background/the-plane.jpg"
    , "payments/public/img/background/tram_hd_by_ovixphotography-d5ysl24.jpg"
    , "payments/public/img/background/railways.jpg"
  ], {duration: 10000, fade: 700});

</script>


</html>