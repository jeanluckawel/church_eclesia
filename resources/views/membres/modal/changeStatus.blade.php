<div class="modal fade" id="statusMemberModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">


            <div class="modal-header bg-primary text-white">

                <h5 class="modal-title">

                    <i id="statusIcon" class="bi bi-person-check-fill me-2"></i>

                    <span id="statusTitle">
                        Modifier le statut
                    </span>

                </h5>


                <button
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>


            </div>



            <form id="statusForm" method="POST">

                @csrf
                @method('PUT')


                <div class="modal-body">


                    <p class="mb-3">

                        Êtes-vous sûr de vouloir

                        <strong id="statusAction"></strong>

                        le membre

                        <strong id="statusMemberName"></strong> ?

                    </p>


                    <div class="alert alert-warning" id="statusMessage">

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
                        type="submit"
                        id="confirmStatusBtn"
                        class="btn btn-primary">

                        Confirmer

                    </button>


                </div>


            </form>


        </div>

    </div>

</div>
<script>
    document.querySelectorAll('.changeStatusBtn').forEach(button => {

        button.addEventListener('click', function () {


            let id = this.dataset.id;

            let name = this.dataset.name;

            let status = this.dataset.status;



            document.getElementById('statusForm').action =
                "/membres/" + id + "/status";


            document.getElementById('statusMemberName').textContent =
                name;



            if(status === "Actif"){


                document.getElementById('statusAction').textContent =
                    "désactiver";


                document.getElementById('statusMessage').innerHTML =
                    "Ce membre sera placé en <strong>Inactif</strong> et ne sera plus considéré comme membre actif.";


                document.getElementById('statusTitle').textContent =
                    "Désactiver un membre";


                document.getElementById('confirmStatusBtn').textContent =
                    "Désactiver";


                document.getElementById('confirmStatusBtn').className =
                    "btn btn-secondary";


                document.getElementById('statusIcon').className =
                    "bi bi-person-dash-fill me-2";


            }else{


                document.getElementById('statusAction').textContent =
                    "activer";


                document.getElementById('statusMessage').innerHTML =
                    "Ce membre sera remis en <strong>Actif</strong> et pourra être considéré comme membre actif.";


                document.getElementById('statusTitle').textContent =
                    "Activer un membre";


                document.getElementById('confirmStatusBtn').textContent =
                    "Activer";


                document.getElementById('confirmStatusBtn').className =
                    "btn btn-success";


                document.getElementById('statusIcon').className =
                    "bi bi-person-check-fill me-2";

            }


        });

    });
</script>
