<div class="modal fade" id="deleteMemberModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header bg-danger text-white">

                <h5 class="modal-title">

                    <i class="bi bi-trash-fill me-2"></i>

                    Supprimer un membre

                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>


            <form id="deleteMemberForm"
                  method="POST">

                @csrf
                @method('DELETE')

                <div class="modal-body">

                    <div class="text-center">


                        <p class="text-muted mb-1">

                            Voulez-vous vraiment supprimer

                        </p>

                        <strong id="memberName"></strong>


                    </div>

                </div>


                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Annuler

                    </button>

                    <button
                        type="submit"
                        class="btn btn-danger">

                        <i class="bi bi-trash-fill me-1"></i>

                        Supprimer

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script>

    const deleteUrl = "{{ route('members.destroy', ':id') }}";

    document.querySelectorAll('.deleteMemberBtn').forEach(button => {

        button.addEventListener('click', function () {

            let id = this.dataset.id;

            let name = this.dataset.name;

            document.getElementById('memberName').textContent = name;

            document.getElementById('deleteMemberForm').action =
                deleteUrl.replace(':id', id);

        });

    });

</script>
