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

                            Liste des membres

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



                            {{-- ADD --}}
                            <button
                                type="button"
                                class="btn btn-primary btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#createMemberModal">

                                <i class="bi bi-person-plus-fill me-1"></i>

                                Nouveau membre

                            </button>


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
                                        <button
                                            class="btn btn-info btn-sm"
                                            title="Voir">

                                            <i class="bi bi-eye-fill"></i>

                                        </button>



                                        <button
                                            type="button"
                                            class="btn btn-warning btn-sm editMemberBtn"

                                            data-id="{{ $membre->id }}"

                                            data-first_name="{{ $membre->first_name }}"
                                            data-last_name="{{ $membre->last_name }}"
                                            data-middle_name="{{ $membre->middle_name }}"
                                            data-gender="{{ $membre->gender }}"
                                            data-birth_date="{{ $membre->birth_date }}"
                                            data-phone="{{ $membre->phone }}"
                                            data-email="{{ $membre->email }}"
                                            data-address="{{ $membre->address }}"

                                            data-marital_status="{{ $membre->marital_status }}"
                                            data-spouse_name="{{ $membre->spouse_name }}"
                                            data-marriage_date="{{ $membre->marriage_date }}"
                                            data-marriage_type="{{ $membre->marriage_type }}"
                                            data-children_count="{{ $membre->children_count }}"

                                            data-church_join_date="{{ $membre->church_join_date }}"
                                            data-previous_church="{{ $membre->previous_church }}"
                                            data-previous_church_service="{{ $membre->previous_church_service }}"
                                            data-water_baptism="{{ $membre->water_baptism }}"
                                            data-holy_spirit_baptism="{{ $membre->holy_spirit_baptism }}"
                                            data-slm_discipleship="{{ $membre->slm_discipleship }}"

                                            data-department="{{ $membre->department }}"
                                            data-profession="{{ $membre->profession }}"
                                            data-professional_skills="{{ $membre->professional_skills }}"

                                            data-bs-toggle="modal"
                                            data-bs-target="#editMemberModal">

                                            <i class="bi bi-pencil-fill"></i>

                                        </button>



                                        {{-- DESACTIVER --}}
                                        <button
                                            class="btn btn-secondary btn-sm"
                                            title="Désactiver">

                                            <i class="bi bi-person-dash-fill"></i>

                                        </button>




                                        {{-- SUPPRIMER --}}
                                        <button
                                            type="button"
                                            class="btn btn-danger btn-sm deleteMemberBtn"
                                            data-id="{{ $membre->id }}"
                                            data-name="{{ $membre->first_name }} {{ $membre->last_name }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteMemberModal">

                                            <i class="bi bi-trash-fill"></i>

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

    @include('membres.modal.create')
    @include('membres.modal.delete')
    @include('membres.modal.edit')



@endsection
