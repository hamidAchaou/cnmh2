@can('index-DossierPatientController')
<li class="nav-item">
    <a href="{{ route('dossier-patients.index') }}"
        class="nav-link {{ Route::is('dossier-patients.index' . '*') ? 'active' : '' }}">
        <i class="fa-solid fa-hospital-user"></i>
        <p>Dossier beneficiers</p>
    </a>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link ">
        <i class="fa-solid fa-gears"></i>
        <p class="pl-2">
            Gestion permissions
        </p>
    </a>
    <ul class="nav nav-treeview" style="">


    @can('index-UserController')
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('users.index' . '*') ? 'active' : '' }}">
        <p>Attribuer Roles</p>
    </a>
</li>
@endcan

@can('index-PermissionController')
<li class="nav-item">
    <a href="{{ route('permissions.index') }}"
        class="nav-link {{ Route::is('permissions.index' . '*') ? 'active' : '' }}">
        <p>Permissions</p>
    </a>
</li>
@endcan

@can('index-RoleController')
<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Route::is('roles.index' . '*') ? 'active' : '' }}">
        <p>Rôles</p>
    </a>
</li>
@endcan

    </ul>
</li>
@endcan
<li class="nav-item ">
    <a href="#" class="nav-link ">
        <i class="fa-solid fa-gears"></i>
        <p class="pl-2">
            Parametres
        </p>
    </a>
    <ul class="nav nav-treeview" style="">

@can('index-ServiceController')
<li class="nav-item">
    <a href="{{ route('services.index') }}" class="nav-link {{ Route::is('services.index' . '*') ? 'active' : '' }}">
        <p>Prestations</p>
    </a>
</li>
@endcan
@can('index-NiveauScolaireController')
<li class="nav-item">
    <a href="{{ route('niveauScolaires.index') }}"
        class="nav-link {{ Route::is('niveauScolaires.index' . '*') ? 'active' : '' }}">
        <p>Niveau Scolaires</p>
    </a>
</li>
@endcan
@can('index-CouvertureMedicalController')
<li class="nav-item">
    <a href="{{ route('couvertureMedicals.index') }}"
        class="nav-link {{ Route::is('couvertureMedicals.index' . '*') ? 'active' : '' }}">
        <p>Couverture Médicale</p>
    </a>
</li>
@endcan
@can('index-TypeHandicapController')
<li class="nav-item">
    <a href="{{ route('typeHandicaps.index') }}"
        class="nav-link {{ Route::is('typeHandicaps.index' . '*') ? 'active' : '' }}">
        <p>Type d'handicaps</p>
    </a>
</li>
@endcan

@can('index-EtatCivilController')
<li class="nav-item">
    <a href="{{ route('etatCivils.index') }}"
        class="nav-link {{ Route::is('etatCivils.index' . '*') ? 'active' : '' }}">
        <p>Etat Civil</p>
    </a>
</li>
@endcan
@can('index-EmployeController')
<li class="nav-item">
    <a href="{{ route('employes.index') }}" class="nav-link {{ Route::is('employes.index' . '*') ? 'active' : '' }}">
        <p>Employés</p>
    </a>
</li>
@endcan
    </ul>
</li>


{{--
@foreach (app_menu() as $group => $items)
@if (strlen($group) < 1) @foreach ($items as $item) <li class="nav-item">
    <a href="{{ Route::has($item->url) ? route($item->url) : $item->url }}"
        class="nav-link {{ Route::is($item->url . '*') ? 'active' : '' }}">
        {!! $item->icon !!}
        <p> {{ $item->nom }} </p>
    </a>
    </li>
    @endforeach
    @else
    @php
    $isActive = $items->filter(fn($item, $key) => Route::is($item->url . '*'))->isNotEmpty();
    @endphp
    <li class="nav-item {{ $isActive ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ $isActive ? 'active' : '' }}">
            {!! $items->first()->menu_group?->icon !!}
            <p class="pl-2">
                {{ $group }}
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" style="">
            @foreach ($items as $item)
            <li class="nav-item">
                <a href="{{ Route::has($item->url) ? route($item->url) : $item->url }}"
                    class="nav-link {{ Route::is($item->url . '*') ? 'active' : '' }}">
                    <p> {{ $item->nom }} </p>
                </a>
            </li>
            @endforeach
        </ul>
    </li>
    @endif
    @endforeach
    --}}