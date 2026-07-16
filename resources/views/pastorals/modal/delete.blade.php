<div class="modal fade" id="deletePastoralModal" tabindex="-1">


    <div class="modal-dialog">


        <div class="modal-content">


            <div class="modal-header bg-danger text-white">


                <h5 class="modal-title">

                    <i class="bi bi-trash-fill me-2"></i>

                    Supprimer discussion

                </h5>


                <button class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>


            </div>





            <form id="deletePastoralForm"
                  method="POST">


                @csrf
                @method('DELETE')



                <div class="modal-body">


                    <p>

                        Êtes-vous sûr de vouloir supprimer la discussion de :

                        <strong id="pastoralMemberName"></strong>

                        ?

                    </p>


                    <div class="alert alert-danger">

                        Cette action est irréversible.

                    </div>


                </div>





                <div class="modal-footer">


                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                        Annuler

                    </button>



                    <button
                        class="btn btn-danger">

                        Supprimer

                    </button>


                </div>



            </form>


        </div>


    </div>


</div>

<script>
    document.querySelectorAll('.deletePastoralBtn')
        .forEach(button => {

            button.addEventListener('click',function(){

                let id = this.dataset.id;


                document.getElementById('deletePastoralForm').action =
                    "{{ url('/pastorals') }}/" + id;


                document.getElementById('pastoralMemberName').textContent =
                    this.dataset.name;


            });

        });
</script>
