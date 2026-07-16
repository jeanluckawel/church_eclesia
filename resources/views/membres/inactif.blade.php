@extends('Home.index')

@section('title', 'Liste des membres')

@section('content')

    <div class="container-fluid p-5">

        <div class="row justify-content-center">

            <div class="col-md-11">

                <div class="card shadow-sm">


                    {{-- HEADER --}}
                    <div class="card-header d-flex align-items-center">

                        <h3 class="card-title mb-0">

                            <i class="bi bi-people-fill me-2"></i>

                            Liste des membres inactifs

                        </h3>


                        <div class="card-tools ms-auto d-flex align-items-center gap-2">


                            {{-- SEARCH --}}
                            <div class="input-group input-group-sm" style="width:220px">

                                <input
                                    type="text"
                                    id="searchMember"
                                    class="form-control"
                                    placeholder="Rechercher...">

                                <span class="input-group-text">

                                <i class="bi bi-search"></i>

                            </span>

                            </div>


                        </div>


                    </div>




                    {{-- BODY --}}
                    <div class="card-body">


                        <table class="table table-bordered table-hover">


                            <thead class="table-light">

                            <tr>

                                <th width="50">#</th>

                                <th>Membre</th>

                                <th>Sexe</th>

                                <th>Téléphone</th>

                                <th>Département</th>

                                <th>Profession</th>

                                <th>Statut</th>

                                <th width="180">Actions</th>

                            </tr>

                            </thead>



                            <tbody id="memberTable">


                            @forelse($members as $membre)


                                <tr class="align-middle">


                                    <td>

                                        {{ $members->firstItem() + $loop->index }}

                                    </td>



                                    <td>


                                        <div class="d-flex align-items-center">


                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                                 style="width:42px;height:42px;">


                                                <i class="bi bi-person-fill"></i>


                                            </div>



                                            <div>


                                                <strong>

                                                    {{ $membre->first_name }}
                                                    {{ $membre->last_name }}
                                                    {{ $membre->middle_name }}

                                                </strong>


                                                <br>


                                                <small class="text-muted">

                                                    Membre #
                                                    {{ str_pad($membre->id,3,'0',STR_PAD_LEFT) }}

                                                </small>


                                            </div>


                                        </div>


                                    </td>




                                    <td>


                                        @if($membre->gender == 'Masculin')

                                            <span class="badge bg-primary">

                                            Homme

                                        </span>


                                        @else


                                            <span class="badge bg-danger">

                                            Femme

                                        </span>


                                        @endif


                                    </td>




                                    <td>

                                        {{ $membre->phone ?? '-' }}

                                    </td>




                                    <td>

                                        {{ $membre->department ?? '-' }}

                                    </td>




                                    <td>

                                        {{ $membre->profession ?? '-' }}

                                    </td>




                                    <td>

                                        {{-- ACTIF --}}

                                        @if($membre->status == 'Actif')

                                            <span class="badge bg-success">

                                            Actif

                                            </span>
                                        @else
                                            <span class="badge bg-secondary">

                                            Inactif

                                        </span>

                                        @endif


                                    </td>




                                    <td>

                                        {{-- VOIR --}}
                                        {{--                                        <button--}}
                                        {{--                                            type="button"--}}
                                        {{--                                            class="btn btn-info btn-sm viewMemberBtn"--}}

                                        {{--                                            data-id="{{ $membre->id }}"--}}
                                        {{--                                            data-name="{{ $membre->first_name }} {{ $membre->middle_name }} {{ $membre->last_name }}"--}}
                                        {{--                                            data-phone="{{ $membre->phone }}"--}}
                                        {{--                                            data-email="{{ $membre->email }}"--}}
                                        {{--                                            data-gender="{{ $membre->gender }}"--}}
                                        {{--                                            data-birth="{{ $membre->birth_date }}"--}}
                                        {{--                                            data-address="{{ $membre->address }}"--}}
                                        {{--                                            data-photo="{{ $membre->photo }}"--}}


                                        {{--                                            data-bs-toggle="modal"--}}
                                        {{--                                            data-bs-target="#viewMemberModal">--}}

                                        {{--                                            <i class="bi bi-eye-fill"></i>--}}

                                        {{--                                        </button>--}}







                                        {{-- DESACTIVER --}}
                                        <button
                                            class="btn btn-sm changeStatusBtn
                                            {{ $membre->status == 'Actif' ? 'btn-secondary' : 'btn-success' }}"

                                            data-id="{{ $membre->id }}"
                                            data-name="{{ $membre->first_name }} {{ $membre->last_name }}"
                                            data-status="{{ $membre->status }}"

                                            data-bs-toggle="modal"
                                            data-bs-target="#statusMemberModal">

                                            @if($membre->status == 'Actif')

                                                <i class="bi bi-person-dash-fill"></i>

                                            @else

                                                <i class="bi bi-person-check-fill"></i>

                                            @endif

                                        </button>





                                    </td>



                                </tr>



                            @empty



                                <tr>


                                    <td colspan="8" class="text-center text-muted py-4">


                                        <i class="bi bi-people fs-2 d-block mb-2"></i>


                                        Aucun membre enregistré.


                                    </td>


                                </tr>



                            @endforelse



                            </tbody>


                        </table>


                    </div>





                    {{-- FOOTER PAGINATION --}}
                    <div class="card-footer clearfix">


                        <div class="float-end">


                            {{ $members->links('pagination::bootstrap-5') }}


                        </div>


                    </div>



                </div>


            </div>


        </div>


    </div>






    <script>


        document
            .getElementById('searchMember')
            .addEventListener('keyup', function(){


                let value = this.value.toLowerCase();



                document
                    .querySelectorAll('#memberTable tr')
                    .forEach(function(row){


                        row.style.display = row.innerText
                            .toLowerCase()
                            .includes(value)

                            ? ''

                            : 'none';


                    });


            });


    </script>


    @include('membres.modal.changeStatus')




@endsection
