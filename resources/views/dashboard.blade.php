@extends('Home.index')

@section('title','Tableau de bord')


@section('content')

    <div class="container-fluid p-5">


        {{-- HEADER --}}
        <div class="row mb-4">

            <div class="col-md-10 mx-auto">

                <div class="app-content-header p-0">

                    <div class="container-fluid p-0">

                        <div class="row align-items-center">


                            <div class="col-sm-6">

                                <h3 class="mb-0">

                                    <i class="bi bi-hand-wave-fill"></i>

                                    Bonjour, {{ auth()->user()->name }}

                                </h3>


                                <small class="text-muted">

                                    Bienvenue dans votre espace de gestion d'église Eglecia

                                </small>


                            </div>



                            <div class="col-sm-6 text-end">

                            <span class="text-muted">

                                {{ now()->format('d M Y H:i') }}

                            </span>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>




        {{-- DASHBOARD CARDS --}}

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="row">



                    {{-- MEMBRES --}}
                    <div class="col-md-3 col-sm-6">

                        <div class="info-box shadow-sm">

                        <span class="info-box-icon text-bg-primary">

                            <i class="bi bi-people-fill"></i>

                        </span>


                            <div class="info-box-content">

                            <span class="info-box-text">
                                Membres
                            </span>


                                <span class="info-box-number">
                                {{ $membersCount }}
                            </span>

                            </div>

                        </div>

                    </div>





                    {{-- NOUVEAUX VENUS --}}
                    <div class="col-md-3 col-sm-6">

                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-success">

                            <i class="bi bi-person-plus-fill"></i>

                        </span>


                            <div class="info-box-content">

                            <span class="info-box-text">
                                Nouveaux venus
                            </span>


                                <span class="info-box-number">
                                {{ $visitorsCount }}
                            </span>

                            </div>


                        </div>

                    </div>





                    {{-- SUIVI PASTORAL --}}
                    <div class="col-md-3 col-sm-6">


                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-warning">

                            <i class="bi bi-chat-heart-fill"></i>

                        </span>


                            <div class="info-box-content">


                            <span class="info-box-text">
                                Suivi pastoral
                            </span>


                                <span class="info-box-number">
                                {{ $pastoralCount }}
                            </span>


                            </div>


                        </div>


                    </div>





                    {{-- MEMBRES INACTIFS --}}
                    <div class="col-md-3 col-sm-6">

                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-danger">

                            <i class="bi bi-person-dash-fill"></i>

                        </span>


                            <div class="info-box-content">


                            <span class="info-box-text">
                                Membres inactifs
                            </span>


                                <span class="info-box-number">
                                {{ $inactiveMembersCount }}
                            </span>


                            </div>


                        </div>

                    </div>






                    {{-- FINANCES --}}
                    <div class="col-md-3 col-sm-6">

                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-success">

                            <i class="bi bi-cash-stack"></i>

                        </span>


                            <div class="info-box-content">

                            <span class="info-box-text">
                                Finances
                            </span>


                                <span class="info-box-number">
                                {{ $financeCount }}
                            </span>

                            </div>


                        </div>

                    </div>






                    {{-- CULTES --}}
                    <div class="col-md-3 col-sm-6">


                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-primary">

                            <i class="bi bi-calendar-event-fill"></i>

                        </span>


                            <div class="info-box-content">


                            <span class="info-box-text">
                                Cultes
                            </span>


                                <span class="info-box-number">
                                {{ $servicesCount }}
                            </span>


                            </div>


                        </div>


                    </div>







                    {{-- PRESENCES --}}
                    <div class="col-md-3 col-sm-6">


                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-info">

                            <i class="bi bi-calendar-check-fill"></i>

                        </span>


                            <div class="info-box-content">


                            <span class="info-box-text">
                                Présences
                            </span>


                                <span class="info-box-number">
                                {{ $attendanceCount }}
                            </span>


                            </div>


                        </div>


                    </div>







                    {{-- RAPPORTS --}}
                    <div class="col-md-3 col-sm-6">


                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-secondary">

                            <i class="bi bi-file-earmark-bar-graph-fill"></i>

                        </span>


                            <div class="info-box-content">


                            <span class="info-box-text">
                                Rapports
                            </span>


                                <span class="info-box-number">
                                {{ $reportsCount }}
                            </span>


                            </div>


                        </div>


                    </div>








                    {{-- UTILISATEURS --}}
                    <div class="col-md-3 col-sm-6">


                        <div class="info-box shadow-sm">


                        <span class="info-box-icon text-bg-dark">

                            <i class="bi bi-shield-lock-fill"></i>

                        </span>


                            <div class="info-box-content">


                            <span class="info-box-text">
                                Utilisateurs
                            </span>


                                <span class="info-box-number">
                                {{ $usersCount }}
                            </span>


                            </div>


                        </div>


                    </div>



                </div>


            </div>


        </div>





        {{-- ACTIVITES RECENTES --}}

        <div class="row justify-content-center mt-4">


            <div class="col-md-10">


                <div class="card shadow-sm">


                    <div class="card-header">

                        <h5 class="mb-0">

                            <i class="bi bi-activity me-2"></i>

                            Activités récentes

                        </h5>

                    </div>



                    <div class="card-body">


                        <div class="text-center text-muted py-4">


                            <i class="bi bi-clock-history fs-1"></i>


                            <p class="mt-2">

                                Les dernières activités apparaîtront ici.

                            </p>


                        </div>


                    </div>


                </div>


            </div>


        </div>



    </div>


@endsection
