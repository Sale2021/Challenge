<x-app-layout>
    <x-slot:header>
        <div class="col">
            <div class="mb-1">
                <ol class="breadcrumb" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Tableau de bord</a></li>
                </ol>
            </div>
            <h2 class="page-title">
                <span class="text-truncate">Tableau de bord</span>
            </h2>
        </div>
    </x-slot:header>
    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-users-group" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                                            <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                                            <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total Patient
                                    </div>
                                    <div class="text-muted">
                                        20
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-stethoscope" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                                            <path d="M8 15a6 6 0 1 0 12 0v-3" />
                                            <path d="M11 3v2" />
                                            <path d="M6 3v2" />
                                            <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total Medecin
                                    </div>
                                    <div class="text-muted">
                                        10
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M17 7l-10 10"></path>
                                            <path d="M16 17l-9 0l0 -9"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total Departement
                                    </div>
                                    <div class="text-muted">
                                        5
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-first-aid-kit" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 8v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                            <path
                                                d="M4 8m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                            <path d="M10 14h4" />
                                            <path d="M12 12v4" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total des pharmacies
                                    </div>
                                    <div class="text-muted">
                                        15
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-microscope" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 21h14" />
                                            <path d="M6 18h2" />
                                            <path d="M7 18v3" />
                                            <path d="M9 11l3 3l6 -6l-3 -3z" />
                                            <path d="M10.5 12.5l-1.5 1.5" />
                                            <path d="M17 3l3 3" />
                                            <path d="M12 21a6 6 0 0 0 3.715 -10.712" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Total Clinique
                                    </div>
                                    <div class="text-muted">
                                        15
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-md">
                <div class="card-body px-3 py-2">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h3 class="h1">
                                {{ Auth::user()->name }}
                            </h3>
                            <div class="h4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                    </path>
                                    <path d="M3 7l9 6l9 -6"></path>
                                </svg>
                                Email: <strong>{{ Auth::user()->email }}</strong>
                            </div>

                            <div class="h4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 21l18 0"></path>
                                    <path d="M9 8l1 0"></path>
                                    <path d="M9 12l1 0"></path>
                                    <path d="M9 16l1 0"></path>
                                    <path d="M14 8l1 0"></path>
                                    <path d="M14 12l1 0"></path>
                                    <path d="M14 16l1 0"></path>
                                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
                                </svg>
                                Departement: {{ Auth::user()->departement->nom }}
                            </div>
                            <div class="h4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3">
                                    </path>
                                    <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                    <path d="M12 12l0 2.5"></path>
                                </svg>
                                Role: {{ Auth::user()->role }}
                            </div>

                            <div class="h4">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-cell-signal-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M20 20h-15.269a.731 .731 0 0 1 -.517 -1.249l14.537 -14.537a.731 .731 0 0 1 1.249 .517v15.269z">
                                    </path>
                                    <path d="M16 7v13"></path>
                                    <path d="M12 20v-9"></path>
                                    <path d="M8 20v-5"></path>
                                </svg>
                                Etat: <span class="status status-green">
                                    <span class="status-dot status-dot-animated"></span>
                                </span> En ligne
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div style="text-align:center;padding:1em 0;">
                                <h3><a style="text-decoration:none;"
                                        href="https://www.zeitverschiebung.net/fr/city/2460596">
                                        <span class="text-dark">Heure actuelle</span><br />Bamako, Mali</a></h3> <iframe
                                    src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=medium&timezone=Africa%2FBamako"
                                    width="100%" height="auto" frameborder="0" seamless></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card" style="height: 17rem">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                {{ count(Auth::user()->unreadNotifications) }}
                                Notifications
                            </h3>
                        </div>
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y">
                                @forelse (Auth::user()->notifications as $row)
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-truncate">
                                                {{ $row->data['message'] }}
                                            </div>
                                            <div class="text-muted">{{ $row->created_at->locale('fr')->diffForHumans()
                                                }}
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <h2 class="text-center"> Vous avez pas de notifications</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>