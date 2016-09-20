<div class="sidebar" data-color="green" data-image="/assets/img/sidebar-5.jpg">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text">
                Serre
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ route('dashboard')  }}">
                    <i class="pe-7s-graph"></i>
                    <p>Tableau de bord</p>
                </a>
            </li>
            <li>
                <a href="{{ route('serre.index') }}">
                    <i class="pe-7s-home"></i>
                    <p>Gestion des serres</p>
                </a>
            </li>
            <li>
                <a href="{{ route('climat.index') }}">
                    <i class="pe-7s-cloud"></i>
                    <p>Gestion des climats</p>
                </a>
            </li>
            <li>
                <a href="{{ route('zone.index') }}">
                    <i class="pe-7s-map-2"></i>
                    <p>Gestion des zones</p>
                </a>
            </li>
            <li class="dropdown">
                <a href="#">
                    <i class="pe-7s-map-2"></i>
                    <p>Gestion des traitements</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Ajouter traitement
                        </a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="pe-7s-user"></i>
                    <p>Gestion d'utilisateurs</p>
                </a>
            </li>
        </ul>
    </div>
</div>