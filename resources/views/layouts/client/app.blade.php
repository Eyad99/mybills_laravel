<!DOCTYPE html>
<html lang="ar" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('style')


     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="{{asset('css/question-slide.css')}}">
    <link rel="stylesheet" href="{{asset('css/client/style.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <style>
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

    .md-form label {
    left:0px  
    }
    .md-form.md-outline .prefix{
        position: relative;
        float: left
    }
    .md-form .prefix{
        float: left;
        position: relative;
        top: 10px
    }

  </style>
 
    <!--End Style-->


  @if(app()->getLocale()=='ar')
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    
    @else

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <style>
      .alignleft 
      {
        float: right;
      }
      </style>
   @endif

</head>
<body>


<!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark unique-color lighten-1" >
      <a class="navbar-brand" href="#"><img src="{{asset('image/svg/logo.svg')}}" width="170"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
        aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item ">
            <a class="nav-link" href="{{route('home')}}">@lang('site.home')
              <span class="sr-only">(current)</span>
            </a>
          </li>

          @if(!(Auth::user()->hasRole('admin')||Auth::user()->hasRole('super_admin')))

          <li class="nav-item">
            <a class="nav-link" href="{{route('places.index')}}">@lang('site.place')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link con-notifications" href="{{route('Question.index')}}">@lang('site.question')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link con-notifications" href="{{route('about')}}">@lang('site.about')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link con-notifications" href="{{route('Contactus.index')}}">@lang('site.contactus')</a>
          </li>
          @endif

          @if(Auth::user()->hasRole('admin')||Auth::user()->hasRole('super_admin'))
          <li class="nav-item">
            <a class="nav-link con-notifications" href="{{route('dashboard.admin')}}">@lang('site.controlpanel')</a>
          </li>
          @endif

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

        @if(auth()->user()->verified())

          <li class="nav-item avatar dropdown">

            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><span class="span-Basket one-span-Basket "></span>{{Auth::user()->name}}
              <i class="fas fa-user"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
               <a class="dropdown-item con-span-basket"
                       data-target=".bd-example-modal-lg"
                       data-toggle="modal"
                       href="{{route('home')}}"><i class="fas fa-shopping-basket"></i> @lang('site.Basket')
                        <span class="span-Basket"></span>
                    </a>
                <a class="dropdown-item" href="{{route('Client.edit',auth()->id())}}" >@lang('site.Accountsettingschanged') </a>
                 <a class="dropdown-item" href="#">@lang('site.totalbalance'): {{file_get_contents("http://localhost/bemoBank/public/api/getAccountInformation/".Auth::user()->bank_id)}}</a> 
                <a class="dropdown-item" href="/logout" >@lang('site.logout')</a>
            </div>
          </li>
          @else
          <li class="nav-item avatar dropdown ">

            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><span class="span-Basket one-span-Basket"></span>{{Auth::user()->name}}
              <i class="fas fa-user"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary "
              aria-labelledby="navbarDropdownMenuLink-55">
               <a class="dropdown-item con-span-basket disabled"
                       data-target=".bd-example-modal-lg"
                       data-toggle="modal"
                       href="{{route('home')}}"><i class="fas fa-shopping-basket"></i> @lang('site.Basket')
                        <span class="span-Basket "></span>
                    </a>
                <a class="dropdown-item disabled" href="{{route('Client.edit',auth()->id())}}" >@lang('site.Accountsettingschanged') </a>
                 <a class="dropdown-item disabled" href="#">@lang('site.totalbalance'): {{file_get_contents("http://localhost/bemoBank/public/api/getAccountInformation/".Auth::user()->bank_id)}}</a> 
                <a class="dropdown-item" href="/logout" >@lang('site.logout')</a>
            </div>
          </li>
          @endif


        </ul>
      </div>

    </nav>
<!--/.Navbar -->

      <div class="container">
          <div class="container">

             @if(session()->has('all_msg_results_pay'))
                @foreach(session()->get('all_msg_results_pay') as $s)
                    <div class="alert alert-warning text-center">
                         {{$s}}
                    </div>
                @endforeach()
             @else
                @if(session()->has('msg'))
                <div class="alert alert-warning text-center">
                    {{session()->get('msg')}}
                </div>
                @endif
             @endif

        </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">@lang('site.Basket') <i class="fas fa-trash " aria-hidden="true"></i></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2 form-pay-all" method="POST">
                            @csrf()
                           <table class="table table-bordered table-striped text-center tab-content" id="table-bill">
                             <thead>
                              <tr>
                                  <th class="text-center">@lang('site.number')</th>
                                  <th class="text-center">@lang('site.Course_number')</th>
                                  <th class="text-center">@lang('site.value')</th>
                                  <th class="text-center">@lang('site.action')</th>
                              </tr>
                             </thead>
                             <tbody>

                             </tbody>
                           </table>
                               <div class="modal-footer">
                                     <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">@lang('site.close')</button>
                                     <input type="submit" class="btn btn-outline-success btn-pay-all d-none" value="@lang('site.push')">
                              </div>
                          </form>

                    </div>
                </div>
            </div>



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
    <script src="{{asset('js/main.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    @stack('script')
            
    <!--End Script-->


 

</body>
</html>



