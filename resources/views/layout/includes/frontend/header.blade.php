<header class="header bg-white">
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
       
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <a  href="index.html"><img class="logo" src="{{asset('assets/img/logo.png')}}"/></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
          <ul  class="navbar-nav ml-auto flex-1">
           
        

          
            <li class="nav-item">
              <!-- Link--><a class="nav-link active" href="{{url('/')}}">الرئيسية</a>
            </li>
           
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="detail.html">ماهو الكيتو ؟</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="detail.html"> أنواع الكيتو</a>
            </li>

            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="detail.html"> منتجات الكيتو</a>
            </li>

            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="detail.html"> تواصل معنا</a>
            </li>
         
          </ul>
          <ul class="navbar-nav mr-auto">               
      <div> @livewire('cart')</div>
            {{-- <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li> --}}
            <li class="nav-item"><a class="nav-link" href="#"> دخول <i class="fas fa-user-alt mr-1 text-gray"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>