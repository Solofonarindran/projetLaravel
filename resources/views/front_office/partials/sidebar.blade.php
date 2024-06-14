 <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item p-3" style="">
        <center class="">
            <a class="" href="">
                <div class="aside-profile-online" 
                     style="
                     display:flex;align-items:center;justify-content:center;
                     background-image:url('/assets/img/maison-isolee-terrain.jpg'); background-size:cover;">
                       
                          
                 

                </div>
                <div class="profile-name">
                    <span class="badge badge-number online">Connecté</span>

                </div>
            </a>
        </center>
    </li>
    <!-- End Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard')}}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('accueil')}}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Actualités</span>
        </a>
    </li>
    <!-- End Profile Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('lodge')}}">
            <i class="bi bi-info-circle"></i>
            <span>Logements</span>
        </a>
    </li>

   
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('agence')}}">
            <i class="bi bi-person"></i>
            <span>Agences</span>
        </a>
    </li>
    <!-- End Nav -->
    <hr>
    <li class="nav-heading">A propos Lodge Vendue</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('listecredit')}}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>A crédit</span>
        </a>
    </li>

    <!-- End Contact Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('listepaye')}}">
            <i class="bi bi-envelope"></i>
            <span>Au comptant</span>
        </a>
    </li>
    <!-- End Contact Page Nav -->

</ul>

</aside>
<!-- End Sidebar-->