<div class="modal fade" id="createPastoralModal" tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg">


            {{-- HEADER --}}
            <div class="modal-header bg-primary text-white">


                <h5 class="modal-title fw-bold">

                    <i class="bi bi-chat-left-text-fill me-2"></i>

                    Nouvelle discussion pastorale

                </h5>



                <button
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>


            </div>





            <form action="{{ route('pastorals.store') }}"
                  method="POST">

                @csrf



                <div class="modal-body bg-light p-4">


                    <div class="card border-0 shadow-sm rounded-4">


                        <div class="card-body">


                            {{-- SELECTION MEMBRE --}}
                            <div class="mb-4">


                                <label class="form-label fw-semibold">

                                    <i class="bi bi-person-fill text-primary me-2"></i>

                                    Sélectionner le membre

                                    <span class="text-danger">*</span>

                                </label>



                                <select
                                    name="member_id"
                                    class="form-select"
                                    required>


                                    <option value="">
                                        Choisir un membre...
                                    </option>



                                    @foreach($members as $membre)


                                        <option value="{{ $membre->id }}">

                                            {{ $membre->first_name }}

                                            {{ $membre->middle_name }}

                                            {{ $membre->last_name }}


                                        </option>


                                    @endforeach


                                </select>


                            </div>







                            {{-- DISCUSSION --}}
                            <div class="mb-4">


                                <label class="form-label fw-semibold">


                                    <i class="bi bi-chat-text text-primary me-2"></i>

                                    Discussion


                                </label>



                                <textarea

                                    name="discussion"

                                    class="form-control"

                                    rows="5"

                                    placeholder="Décrire la discussion avec le membre..."></textarea>


                            </div>







                            {{-- OBSERVATIONS --}}
                            <div class="mb-3">


                                <label class="form-label fw-semibold">


                                    <i class="bi bi-journal-text text-primary me-2"></i>

                                    Observations


                                </label>



                                <textarea

                                    name="observations"

                                    class="form-control"

                                    rows="4"

                                    placeholder="Notes pastorales, conseils, suivi à prévoir..."></textarea>


                            </div>



                        </div>


                    </div>


                </div>






                {{-- FOOTER --}}
                <div class="modal-footer">


                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                        Annuler

                    </button>




                    <button
                        type="submit"
                        class="btn btn-primary px-4">


                        <i class="bi bi-save me-2"></i>

                        Enregistrer


                    </button>


                </div>


            </form>


        </div>

    </div>

</div>
