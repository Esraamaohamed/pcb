<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/homestyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>PCB Store</title>
</head>
<body>
    <header> <!----------------------HEADER------------------------>

        <a href="/" class="logo_admin">PCB Store</a>
        <div class="cust_data">
    @if(Auth::check())
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method = "POST" >
          @csrf
      </form>
@else
<a href="/login">login / register</a>

@endif
        </div>
    </header><!---------------------------------------------------->


    <section><!---------------------THE SLIDES------------------------------->
        <div class="">
            <img src="image/home/1.jpg" alt="">
        </div>

    <div class="navigation">
        <button class="btn">
          @if(Auth::check())
            <a  href="/order" class="order-btn">order now</a>
          @else
          <a  href="{{route('login')}}" class="order-btn">order now</a>
          @endif
        </button>

    </div>
    </div>
    <script type="text/javascript">
    var counter = 1 ;
    setInterval(function(){
      document.getElementById('r'+ counter).checked=true;
      counter++;
      if(counter>4){
        counter = 1;
      }
    },4000);
    </script>
    </section><!---------------------------------------------------->
  <div class="contentx">
  <h1>PCB Service</h1>
  </div>
    <section class="sec-2">
        <div class="d-one">
        <div class="d-insides">
            <div class="d-image">
                <img src="image/home/PCB-mani.png" alt="">
            </div>
            <div class="content">
            <h1>********</h1>
            <p>------------------------
                -------------------------
                -----------------------</p>
            </div>
        </div>
        </div>
        <div class="d-two">
        <div class="d-insides">
            <div class="d-image">
                <img src="image/home/PCB-supp.png" alt="">
            </div>
            <div class="content">
            <h1>*********</h1>
            <p>----------------------------------------------------</p>
            </div>
        </div>
        </div>

    </section>


    <footer><!---------------------footer------------------------->
        <div class="footer-top-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                            <h4><span>about us</span></h4>
                            <p>----------------------------------------------
                                ------------------------------------
                                -----------------------.</p>

                        </div>
                    </div>
                    <h4 class="footer-wid-title">Help Center</h4>
                    <ul>
                        <li>Mobile Phone : 01000000000 </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>

</body>
</html>
