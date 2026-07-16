<div class="modal fade" id="viewMemberModal" tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg rounded-4">


            <!-- HEADER -->
            <div class="modal-header bg-primary text-white">

                <h5 class="modal-title fw-bold">
                    <i class="bi bi-person-badge-fill me-2"></i>
                    Carte du membre
                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>



            <!-- BODY -->
            <div class="modal-body bg-light p-4">


                <div class="member-card bg-white rounded-4 shadow-sm overflow-hidden">


                    <!-- BANNIERE -->
                    <div class="member-header bg-primary"></div>



                    <div class="row p-4 align-items-center">


                        <!-- PHOTO -->
                        <div class="col-md-4 text-center">

                            <img
                                id="view_photo"
                                src="{{ asset('images/avatar.png') }}"
                                class="member-photo shadow"
                                width="170"
                                height="170">


                            <h4
                                id="view_name"
                                class="fw-bold text-primary mt-3">
                            </h4>


                        </div>





                        <!-- INFORMATIONS -->
                        <div class="col-md-8">


                            <div class="info-box">


                                <div class="info-item">
                                    <i class="bi bi-gender-ambiguous text-primary"></i>

                                    <div>
                                        <small>Sexe</small>
                                        <p id="view_gender"></p>
                                    </div>

                                </div>



                                <div class="info-item">
                                    <i class="bi bi-calendar-event text-primary"></i>

                                    <div>
                                        <small>Date de naissance</small>
                                        <p id="view_birth"></p>
                                    </div>

                                </div>




                                <div class="info-item">
                                    <i class="bi bi-telephone text-primary"></i>

                                    <div>
                                        <small>Téléphone</small>
                                        <p id="view_phone"></p>
                                    </div>

                                </div>




                                <div class="info-item">
                                    <i class="bi bi-envelope text-primary"></i>

                                    <div>
                                        <small>Email</small>
                                        <p id="view_email"></p>
                                    </div>

                                </div>




                                <div class="info-item">
                                    <i class="bi bi-geo-alt text-primary"></i>

                                    <div>
                                        <small>Adresse</small>
                                        <p id="view_address"></p>
                                    </div>

                                </div>


                            </div>


                        </div>


                    </div>


                </div>


            </div>





            <!-- FOOTER -->
            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary px-4 rounded-pill"
                    data-bs-dismiss="modal">

                    Fermer

                </button>

            </div>



        </div>

    </div>

</div>





<style>

    .member-header{

        height:90px;

    }



    .member-photo{

        object-fit:cover;

        border-radius:15px;

        border:6px solid white;

        margin-top:-70px;

    }



    .info-box{

        display:flex;

        flex-direction:column;

        gap:15px;

    }



    .info-item{

        display:flex;

        align-items:center;

        gap:15px;

        padding:12px 15px;

        border-radius:12px;

        background:#f8f9fa;

        transition:.3s;

    }



    .info-item:hover{

        background:#e9f3ff;

        transform:translateX(5px);

    }



    .info-item i{

        font-size:25px;

    }



    .info-item small{

        color:#6c757d;

        font-weight:bold;

    }



    .info-item p{

        margin:0;

        font-weight:600;

        color:#343a40;

    }


</style>





<script>

    document.querySelectorAll('.viewMemberBtn').forEach(button => {


        button.addEventListener('click', function(){


            document.getElementById('view_name').textContent =
                this.dataset.name;


            document.getElementById('view_gender').textContent =
                this.dataset.gender;


            document.getElementById('view_birth').textContent =
                this.dataset.birth;


            document.getElementById('view_phone').textContent =
                this.dataset.phone;


            document.getElementById('view_email').textContent =
                this.dataset.email;


            document.getElementById('view_address').textContent =
                this.dataset.address;



            document.getElementById('view_photo').src =

                this.dataset.photo

                    ? "/storage/" + this.dataset.photo

                    : "/images/avatar.png";



        });


    });


</script>
