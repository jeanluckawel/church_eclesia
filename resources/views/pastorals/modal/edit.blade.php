<div class="modal fade" id="editPastoralModal" tabindex="-1">


    <div class="modal-dialog modal-lg">


        <div class="modal-content">


            <div class="modal-header bg-warning">


                <h5 class="modal-title">

                    <i class="bi bi-pencil-fill me-2"></i>

                    Modifier discussion pastorale

                </h5>


                <button class="btn-close"
                        data-bs-dismiss="modal"></button>


            </div>




            <form id="editPastoralForm" method="POST">


                @csrf
                @method('PUT')


                <div class="modal-body">


                    <div class="mb-3">

                        <label class="form-label">
                            Membre
                        </label>


                        <select name="member_id"
                                id="edit_member"
                                class="form-select">


                            @foreach($members as $membre)

                                <option value="{{ $membre->id }}">

                                    {{ $membre->first_name }}
                                    {{ $membre->last_name }}

                                </option>

                            @endforeach


                        </select>


                    </div>





                    <div class="mb-3">

                        <label class="form-label">
                            Discussion
                        </label>


                        <textarea
                            name="discussion"
                            id="edit_discussion"
                            class="form-control"
                            rows="5"></textarea>


                    </div>





                    <div class="mb-3">

                        <label class="form-label">
                            Observations
                        </label>


                        <textarea
                            name="observations"
                            id="edit_observations"
                            class="form-control"
                            rows="4"></textarea>


                    </div>



                </div>





                <div class="modal-footer">


                    <button type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal">

                        Annuler

                    </button>



                    <button class="btn btn-warning">

                        Modifier

                    </button>


                </div>


            </form>


        </div>

    </div>

</div>

<script>
    document.querySelectorAll('.editPastoralBtn')
        .forEach(button => {

            button.addEventListener('click', function(){

                let id = this.dataset.id;


                document.getElementById('editPastoralForm').action =
                    "{{ url('/pastorals') }}/" + id;



                document.getElementById('edit_member').value =
                    this.dataset.member;


                document.getElementById('edit_discussion').value =
                    this.dataset.discussion;


                document.getElementById('edit_observations').value =
                    this.dataset.observations;


            });

        });
</script>
