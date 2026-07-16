@extends('Home.index')

@section('title','Suivi pastoral')


@section('content')


    <div class="container-fluid p-5">


        <div class="row justify-content-center">


            <div class="col-md-11">


                <div class="card shadow-sm">



                    {{-- HEADER --}}
                    <div class="card-header d-flex align-items-center">


                        <h3 class="card-title mb-0">

                            <i class="bi bi-chat-left-text-fill me-2"></i>

                            Discussions pastorales

                        </h3>



                        <div class="ms-auto d-flex gap-2">


                            <div class="input-group input-group-sm" style="width:220px">


                                <input
                                    type="text"
                                    id="searchPastoral"
                                    class="form-control"
                                    placeholder="Rechercher...">


                                <span class="input-group-text">

<i class="bi bi-search"></i>

</span>


                            </div>




                            <button
                                class="btn btn-primary btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#createPastoralModal">


                                <i class="bi bi-plus-circle me-1"></i>

                                Nouvelle discussion


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

                                <th>Pasteur</th>

                                <th>Discussion</th>

                                <th>Observations</th>

                                <th>Date</th>

                                <th width="150">Actions</th>


                            </tr>


                            </thead>



                            <tbody id="pastoralTable">



                            @forelse($pastorals as $pastoral)



                                <tr class="align-middle">



                                    <td>

                                        {{ $pastorals->firstItem()+$loop->index }}

                                    </td>




                                    <td>


                                        <div class="d-flex align-items-center">


                                            <div class="rounded-circle bg-primary text-white
d-flex align-items-center justify-content-center me-3"
                                                 style="width:42px;height:42px;">


                                                <i class="bi bi-person-fill"></i>


                                            </div>



                                            <div>

                                                <strong>

                                                    {{ $pastoral->member->first_name }}

                                                    {{ $pastoral->member->last_name }}

                                                </strong>


                                                <br>


                                                <small class="text-muted">

                                                    Membre #{{ str_pad($pastoral->member->id,3,'0',STR_PAD_LEFT) }}

                                                </small>


                                            </div>


                                        </div>


                                    </td>





                                    <td>


                                        <i class="bi bi-person-badge text-primary me-1"></i>


                                        {{ $pastoral->user->name }}


                                    </td>





                                    <td>


                                        {{ Str::limit($pastoral->discussion,60) ?? '-' }}


                                    </td>





                                    <td>


                                        {{ Str::limit($pastoral->observations,50) ?? '-' }}


                                    </td>





                                    <td>


                                        {{ $pastoral->created_at->format('d/m/Y') }}


                                    </td>






                                    <td>

{{--                                     EDIT--}}



                                        <button
                                            class="btn btn-warning btn-sm editPastoralBtn"

                                            data-id="{{ $pastoral->id }}"

                                            data-member="{{ $pastoral->member_id }}"

                                            data-discussion="{{ $pastoral->discussion }}"

                                            data-observations="{{ $pastoral->observations }}"

                                            data-bs-toggle="modal"
                                            data-bs-target="#editPastoralModal">

                                            <i class="bi bi-pencil-fill"></i>

                                        </button>





                                        {{-- SUPPRIMER --}}
                                        <button
                                            class="btn btn-danger btn-sm deletePastoralBtn"

                                            data-id="{{ $pastoral->id }}"

                                            data-name="{{ $pastoral->member->first_name }} {{ $pastoral->member->last_name }}"

                                            data-bs-toggle="modal"
                                            data-bs-target="#deletePastoralModal">


                                            <i class="bi bi-trash-fill"></i>

                                        </button>


                                    </td>







                                </tr>



                            @empty


                                <tr>

                                    <td colspan="7" class="text-center text-muted py-4">


                                        <i class="bi bi-chat fs-2 d-block mb-2"></i>


                                        Aucune discussion pastorale enregistrée.


                                    </td>

                                </tr>


                            @endforelse



                            </tbody>



                        </table>


                    </div>






                    {{-- PAGINATION --}}
                    <div class="card-footer clearfix">


                        <div class="float-end">


                            {{ $pastorals->links('pagination::bootstrap-5') }}


                        </div>


                    </div>



                </div>


            </div>


        </div>


    </div>




    <script>


        document
            .getElementById('searchPastoral')
            .addEventListener('keyup',function(){


                let value=this.value.toLowerCase();



                document
                    .querySelectorAll('#pastoralTable tr')
                    .forEach(row=>{


                        row.style.display =
                            row.innerText.toLowerCase()
                                .includes(value)

                                ? ''

                                : 'none';



                    });


            });


    </script>



    @include('pastorals.modal.create')
    @include('pastorals.modal.edit')
    @include('pastorals.modal.delete')


@endsection
