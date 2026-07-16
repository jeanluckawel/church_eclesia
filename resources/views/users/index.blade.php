@extends('dashboard')


@section('title','Utilisateurs')


@section('content')


    <div class="container-fluid p-5">


        <div class="card shadow-sm">


            <div class="card-header">

                <h4>

                    <i class="bi bi-people-fill me-2"></i>

                    Utilisateurs

                </h4>


            </div>



            <div class="card-body">


                <table class="table table-bordered">


                    <thead>

                    <tr>

                        <th>#</th>

                        <th>Nom</th>

                        <th>Email</th>

                        <th>Rôle</th>

                        <th>Actions</th>

                    </tr>


                    </thead>



                    <tbody>


                    @foreach($users as $user)


                        <tr>


                            <td>
                                {{ $loop->iteration }}
                            </td>



                            <td>

                                {{ $user->name }}

                            </td>



                            <td>

                                {{ $user->email }}

                            </td>



                            <td>


                                @foreach($user->roles as $role)

                                    <span class="badge bg-primary">

                                        {{ $role->name }}

                                        </span>


                                @endforeach


                            </td>



                            <td>


                                <button class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil"></i>

                                </button>


                                <button class="btn btn-danger btn-sm">

                                    <i class="bi bi-trash"></i>

                                </button>


                            </td>


                        </tr>


                    @endforeach



                    </tbody>


                </table>



            </div>



        </div>


    </div>



@endsection
