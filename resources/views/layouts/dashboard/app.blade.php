<!DOCTYPE html>
<html lang="ar" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}" >
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <style>
        body, h1, h2, h3, h4, h5
          {
              color:#17A2B8 !important;

          }
       .bg
          {
              background: #e9ecef !important;

          }
      /* width */
      ::-webkit-scrollbar {
        width: 10px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
        background: #e9ecef; 
      }
      
      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #888; 
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #555; 
      }
  
    </style>
    <!--End Style-->



  @if(app()->getLocale()=='ar')

    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-rtl.css') }}">
    
    @else

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

   @endif

</head>
<body>


<!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark unique-color lighten-1">
      <a class="navbar-brand" href="#"><img src="{{asset('image/svg/logo.svg')}}" width="170"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
        aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('dashboard.admin')}}">@lang('site.home')
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.user.index')}}">@lang('site.user')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.place.index')}}">@lang('site.place')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link con-notifications" href="{{route('dashboard.question.index')}}">@lang('site.question')</a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto nav-flex-icons">

        <li class="nav-item avatar dropdown">
           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-globe-asia"></i></a>
             <ul class="dropdown-menu">
                 <li>
                     <ul class="menu">
                         @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                             <li class="d-inline">
                                 <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                     {{ $properties['native'] }}
                                 </a>
                             </li>
                         @endforeach
                     </ul>
                 </li>
             </ul>
        </li>

         <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle con-span-noti-count" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell"></i>
                <span class="span-noti-count {{ count(auth()->user()->unreadNotifications)!=0?'':'d-none' }}">
                  {{count(auth()->user()->unreadNotifications)}}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary con-noti"
              aria-labelledby="navbarDropdownMenuLink-55"
              style="width: 400px;height: 318px;overflow-y: scroll;word-break: break-word;">
               <ul class="list-unstyled ">
                  @foreach(auth()->user()->Notifications as $noti)
                    <li class="li-noti {{$noti->read_at==null?'bg':''}}">
                        {!!$noti->data['data']['text_question']!!}
                        {{ $noti->markAsRead() }}
                        <hr/>
                    </li>ّ
                  @endforeach()
                </ul>
            </div>
          </li>

          <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
              <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
              <a class="dropdown-item" href="{{route('home')}}">@lang('site.push_now')</a>
              <a class="dropdown-item" href="logout" > @lang('site.logout')</a>
            </div>
          </li>

        </ul>
      </div>

    </nav>
<!--/.Navbar -->

      <div class="container">

            @yield('content')

      </div>


      <!-- Footer -->
      <footer class="page-footer font-small unique-color-dark">

        <!-- Footer Links -->
        <div class="container text-center py-2 text-md-left mt-5">

          <!-- Grid row -->

          <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">@lang('site.TEAM')</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>@lang('site.team description')</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">@lang('site.PROJECT FUNCTION')</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="#!">@lang('site.PHONE')</a>
              </p>
              <p>
                <a href="#!">@lang('site.ELECTRICITY')</a>
              </p>
              <p>
                <a href="#!">@lang('site.WATER')</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">@lang('site.ANDROID APPLICATION')</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>Android</p>
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">@lang('site.CONTACT')</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                @lang('site.conect description')
                <i class="fas fa-home mr-3"></i>
              </p>
              <p>
                 mybills@gmail.com
                 <i class="fas fa-envelope mr-3"></i>
              </p>
              <p>
                0999999999
                <i class="fas fa-phone mr-3"></i>
              </p>
              <p>
                  0988888888
                  <i class="fas fa-phone mr-3"></i>
                </p>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
          @lang('site.copyright')
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->



    <!-- Scripts -->


    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="{{ asset('js/dashboard/question.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard/main.js') }}"></script>



    <!--End Script-->

    @stack('script')




</body>
</html>
