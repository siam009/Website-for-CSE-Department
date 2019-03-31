<nav class="p-0  navbar navbar-expand-lg navbar-dark sticky-top">
<!-- Logo
<a class="navbar-brand" href="index.html"><img src="logo.jpg"></a>
-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <div class="pt-2 pb-2 container bg-success">
    <ul class="navbar-nav ml-5 bg-success">
           <li class="nav-item mr-4">
             <a class=" nav-link text-whit-whitee" href="{{ route('homepage') }}">Home</a>
           </li>
           <li class="nav-item mr-4">
             <a class="nav-link text-white" href="https://admission.sec.ac.bd/">Admission</a>
           </li>
           <li class="nav-item dropdown mr-4">
             <a class="nav-link text-white dropdown-toggle" id="cseDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">News</a>
             <div class="dropdown-menu bg-success" aria-labelledby="cseDropdown1">
                 <a class="dropdown-item text-white" href="{{ route('researchNews') }}">Research News</a>
                 <a class="dropdown-item text-white" href="{{route('notice')}}">Notice</a>
                 <a class="dropdown-item text-white" href="{{route('others')}}">Others</a>
             </div>
           </li>

           <li class="nav-item dropdown mr-4">
             <a class="nav-link text-white dropdown-toggle" id="cseDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="#">Faculty Member</a>
             <div class="dropdown-menu bg-success" aria-labelledby="cseDropdown2">
                 <a class="dropdown-item text-white" href="{{route('teachers')}}">Teachers</a>
                 <a class="dropdown-item text-white" href="{{route('staff')}}">Office & Staff</a>
             </div>
           </li>
           <li class="nav-item dropdown mr-4">
             <a class="nav-link text-white dropdown-toggle" id="cseDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Academic</a>
             <div class="dropdown-menu bg-success" aria-labelledby="cseDropdown3">
                 <a class="dropdown-item text-white" href="{{route('syllabus')}}">Syllabus</a>
                 <a class="dropdown-item text-white" href="{{route('login')}}">Result</a>
             </div>
           </li>
           <li class="nav-item mr-4">
             <a class="nav-link text-white" href="https://sec.ac.bd/campusradio/">Campus Radio</a>
           </li>
           <li class="nav-item dropdown mr-4">
             <a class="nav-link text-white dropdown-toggle" id="cseDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Clubs & Organisation</a>
             <div class="dropdown-menu bg-success" aria-labelledby="cseDropdown4">
                 <a class="dropdown-item text-white" href="{{route('society')}}">CSE Society</a>
                 <a class="dropdown-item text-white" href="{{route('programming')}}">Sports Programming Club</a>
             </div>
           </li>
           <li class="nav-item mr-4">
             <a class="nav-link text-white" href="{{route('contact')}}">Contact</a>
           </li>

    </ul>
  </div>

  </div>

</nav>