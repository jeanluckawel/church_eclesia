<div class="modal fade" id="editMemberModal" tabindex="-1">


    <div class="modal-dialog modal-lg">


        <div class="modal-content">


            {{-- HEADER --}}

            <div class="modal-header bg-warning text-white">


                <h5 class="modal-title">

                    <i class="bi bi-pencil-fill me-2"></i>

                    Modifier un membre

                </h5>



                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">

                </button>


            </div>






            <form id="editMemberForm"
                  method="POST"
                  enctype="multipart/form-data"
                  autocomplete="off">


                @csrf

                @method('PUT')





                <div class="modal-body">





                    {{-- ===========================
                     STEPS HEADER
                    =========================== --}}



                    <div class="row g-2 mb-4">





                        {{-- STEP 1 --}}

                        <div class="col-md-3">


                            <div class="member-step-edit active"
                                 data-step="0">


<span class="member-step-icon-edit bg-primary">

<i class="bi bi-person-fill"></i>

</span>


                                <div>


<span class="member-step-title-edit">

Personnel

</span>


                                    <small>

                                        Identité

                                    </small>


                                </div>


                            </div>


                        </div>






                        {{-- STEP 2 --}}

                        <div class="col-md-3">


                            <div class="member-step-edit"
                                 data-step="1">


<span class="member-step-icon-edit bg-success">

<i class="bi bi-heart-fill"></i>

</span>


                                <div>


<span class="member-step-title-edit">

Etat civil

</span>


                                    <small>

                                        Famille

                                    </small>


                                </div>


                            </div>


                        </div>








                        {{-- STEP 3 --}}

                        <div class="col-md-3">


                            <div class="member-step-edit"
                                 data-step="2">


<span class="member-step-icon-edit bg-warning">

<i class="bi bi-plus-lg"></i>

</span>


                                <div>


<span class="member-step-title-edit">

Église

</span>


                                    <small>

                                        Vie chrétienne

                                    </small>


                                </div>


                            </div>


                        </div>








                        {{-- STEP 4 --}}

                        <div class="col-md-3">


                            <div class="member-step-edit"
                                 data-step="3">


<span class="member-step-icon-edit bg-info">

<i class="bi bi-briefcase-fill"></i>

</span>


                                <div>


<span class="member-step-title-edit">

Profession

</span>


                                    <small>

                                        Travail

                                    </small>


                                </div>


                            </div>


                        </div>



                    </div>









                    {{-- ===========================
                    STEP 1 : INFORMATIONS PERSONNELLES
                    =========================== --}}

                    <div class="step-content">

                        <h6 class="mb-4">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            Informations personnelles
                        </h6>

                        <div class="row">

                            {{-- Prénom --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Prénom <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_first_name"
                                    name="first_name"
                                    required>

                            </div>

                            {{-- Nom --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Nom <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_last_name"
                                    name="last_name"
                                    required>

                            </div>

                            {{-- Postnom --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Postnom
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_middle_name"
                                    name="middle_name">

                            </div>

                            {{-- Sexe --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Sexe <span class="text-danger">*</span>
                                </label>

                                <select
                                    class="form-select"
                                    id="edit_gender"
                                    name="gender"
                                    required>

                                    <option value="">Sélectionner</option>

                                    <option value="Masculin">
                                        Masculin
                                    </option>

                                    <option value="Feminin">
                                        Féminin
                                    </option>

                                </select>

                            </div>

                            {{-- Date de naissance --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Date de naissance
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    id="edit_birth_date"
                                    name="birth_date">

                            </div>

                            {{-- Téléphone --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Téléphone
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_phone"
                                    name="phone">

                            </div>

                            {{-- Email --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Adresse e-mail
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="edit_email"
                                    name="email">

                            </div>

                            {{-- Photo --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Photo
                                </label>

                                <input
                                    type="file"
                                    class="form-control"
                                    id="edit_photo"
                                    name="photo"
                                    accept="image/*">

                            </div>

                            {{-- Adresse --}}
                            <div class="col-md-12 mb-3">

                                <label class="form-label">
                                    Adresse
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    id="edit_address"
                                    name="address"></textarea>

                            </div>

                        </div>

                    </div>
                    {{-- ===========================
{{-- ===========================
STEP 2 : ETAT CIVIL
=========================== --}}

                    <div class="step-content d-none">

                        <h6 class="mb-4">
                            <i class="bi bi-heart-fill text-success me-2"></i>
                            État civil
                        </h6>

                        <div class="row">

                            {{-- Situation matrimoniale --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Situation matrimoniale
                                </label>

                                <select
                                    class="form-select"
                                    id="edit_marital_status"
                                    name="marital_status">

                                    <option value="">
                                        Sélectionner...
                                    </option>

                                    <option value="Célibataire">
                                        Célibataire
                                    </option>

                                    <option value="Marié(e)">
                                        Marié(e)
                                    </option>

                                    <option value="Divorcé(e)">
                                        Divorcé(e)
                                    </option>

                                    <option value="Veuf(ve)">
                                        Veuf(ve)
                                    </option>

                                </select>

                            </div>

                            {{-- Nom du conjoint --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Nom du conjoint
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_spouse_name"
                                    name="spouse_name">

                            </div>

                            {{-- Date du mariage --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Date du mariage
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    id="edit_marriage_date"
                                    name="marriage_date">

                            </div>

                            {{-- Type de mariage --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Type de mariage
                                </label>

                                <select
                                    class="form-select"
                                    id="edit_marriage_type"
                                    name="marriage_type">

                                    <option value="">
                                        Sélectionner...
                                    </option>

                                    <option value="Civil">
                                        Civil
                                    </option>

                                    <option value="Religieux">
                                        Religieux
                                    </option>

                                    <option value="Coutumier">
                                        Coutumier
                                    </option>

                                    <option value="Civil + Religieux">
                                        Civil + Religieux
                                    </option>

                                    <option value="Autre">
                                        Autre
                                    </option>

                                </select>

                            </div>

                            {{-- Nombre d'enfants --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Nombre d'enfants
                                </label>

                                <input
                                    type="number"
                                    class="form-control"
                                    id="edit_children_count"
                                    name="children_count"
                                    min="0">

                            </div>

                        </div>

                    </div>
                    {{-- ===========================
STEP 3 : VIE CHRÉTIENNE
=========================== --}}


                    <div class="step-content d-none">


                        <h6 class="mb-4">

                            <i class="bi bi-plus-lg text-warning me-2"></i>

                            Informations ecclésiastiques

                        </h6>



                        <div class="row">





                            {{-- DATE INTEGRATION EGLISE --}}

                            <div class="col-md-6 mb-3">


                                <label class="form-label">

                                    Date d'intégration à l'église

                                </label>


                                <input
                                    type="date"
                                    class="form-control"
                                    id="edit_church_join_date"
                                    name="church_join_date">


                            </div>









                            {{-- ANCIENNE EGLISE --}}

                            <div class="col-md-6 mb-3">


                                <label class="form-label">

                                    Ancienne église

                                </label>


                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_previous_church"
                                    name="previous_church">


                            </div>









                            {{-- ANCIEN SERVICE --}}

                            <div class="col-md-12 mb-3">


                                <label class="form-label">

                                    Ancien service dans l'église

                                </label>


                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_previous_church_service"
                                    name="previous_church_service">


                            </div>









                            {{-- BAPTEME EAU --}}

                            <div class="col-md-4 mb-3">


                                <label class="form-label">

                                    Baptême d'eau

                                </label>


                                <select
                                    class="form-select"
                                    id="edit_water_baptism"
                                    name="water_baptism">



                                    <option value="0">

                                        Non

                                    </option>


                                    <option value="1">

                                        Oui

                                    </option>


                                </select>


                            </div>









                            {{-- SAINT ESPRIT --}}

                            <div class="col-md-4 mb-3">


                                <label class="form-label">

                                    Baptême du Saint-Esprit

                                </label>


                                <select
                                    class="form-select"
                                    id="edit_holy_spirit_baptism"
                                    name="holy_spirit_baptism">



                                    <option value="0">

                                        Non

                                    </option>


                                    <option value="1">

                                        Oui

                                    </option>


                                </select>


                            </div>









                            {{-- DISCIPULAT --}}

                            <div class="col-md-4 mb-3">


                                <label class="form-label">

                                    Formation SLM / Discipulat

                                </label>


                                <select
                                    class="form-select"
                                    id="edit_slm_discipleship"
                                    name="slm_discipleship">



                                    <option value="0">

                                        Non

                                    </option>


                                    <option value="1">

                                        Oui

                                    </option>


                                </select>


                            </div>




                        </div>


                    </div>









                    {{-- ===========================
                    STEP 4 : PROFESSION
                    =========================== --}}



                    <div class="step-content d-none">


                        <h6 class="mb-4">

                            <i class="bi bi-briefcase-fill text-info me-2"></i>

                            Informations professionnelles

                        </h6>




                        <div class="row">







                            {{-- DEPARTEMENT --}}


                            <div class="col-md-6 mb-3">


                                <label class="form-label">

                                    Département / Ministère

                                </label>



                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_department"
                                    name="department"
                                    placeholder="Ex : Chorale, Jeunesse, Intercession...">


                            </div>









                            {{-- PROFESSION --}}


                            <div class="col-md-6 mb-3">


                                <label class="form-label">

                                    Profession

                                </label>



                                <input
                                    type="text"
                                    class="form-control"
                                    id="edit_profession"
                                    name="profession"
                                    placeholder="Ex : Enseignant, Informaticien...">


                            </div>









                            {{-- COMPETENCES --}}


                            <div class="col-md-12 mb-4">


                                <label class="form-label">

                                    Compétences professionnelles

                                </label>



                                <textarea
                                    class="form-control"
                                    rows="4"
                                    id="edit_professional_skills"
                                    name="professional_skills"
                                    placeholder="Décrire les compétences du membre..."></textarea>



                            </div>






                        </div>







                        <div class="alert alert-primary mb-0">


                            <div class="d-flex align-items-start">


                                <i class="bi bi-info-circle-fill fs-4 me-3"></i>


                                <div>


                                    <strong>

                                        Vérification des informations

                                    </strong>



                                    <p class="mb-0 mt-1">

                                        Vérifiez les données du membre avant
                                        d'enregistrer les modifications.

                                    </p>


                                </div>


                            </div>


                        </div>



                    </div>
                    {{-- FOOTER --}}

                    <div class="modal-footer">


                        <button type="button"
                                class="btn btn-danger"
                                data-bs-dismiss="modal">

                            <i class="bi bi-x-circle me-1"></i>

                            Annuler

                        </button>





                        <button type="button"
                                class="btn btn-light"
                                id="editPrevBtn">

                            <i class="bi bi-arrow-left me-1"></i>

                            Retour

                        </button>






                        <button type="button"
                                class="btn btn-warning text-white"
                                id="editNextBtn">

                            <i class="bi bi-arrow-right me-1"></i>

                            Suivant

                        </button>






                        <button type="submit"
                                class="btn btn-success d-none"
                                id="editSaveBtn">

                            <i class="bi bi-check-circle me-1"></i>

                            Enregistrer

                        </button>



                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>


        /* ==================================
           EDIT MEMBER MODAL GLOBAL
        ================================== */


    #editMemberModal .modal-content{

        border:none;
        overflow:hidden;
        border-radius:8px;

    }




    #editMemberModal .modal-header{

        background:#ffc107;
        color:white;

        padding:15px 20px;

    }




    #editMemberModal .modal-title{

        font-weight:600;

    }




    #editMemberModal .btn-close{

        filter:brightness(0) invert(1);

    }





    /* ==================================
       BODY
    ================================== */


    #editMemberModal .modal-body{

        background:#f8f9fa;

        padding:20px;

    }







    /* ==================================
       STEPS HEADER
    ================================== */


    .member-step-edit{


        display:flex;

        align-items:center;

        gap:12px;

        padding:12px;

        min-height:75px;

        border:1px solid #dee2e6;

        background:white;

        cursor:pointer;

        transition:.3s;


    }




    .member-step-edit:hover{


        background:#f8f9fa;

        box-shadow:0 3px 10px rgba(0,0,0,.08);


    }





    .member-step-icon-edit{


        width:45px;

        height:45px;

        display:flex;

        align-items:center;

        justify-content:center;

        color:white;

        font-size:20px;

        flex-shrink:0;


    }







    .member-step-title-edit{


        display:block;

        font-size:14px;

        font-weight:600;

        color:#212529;


    }





    .member-step-edit small{


        display:block;

        color:#6c757d;

        font-size:12px;


    }








    .member-step-edit.active{


        border:2px solid #ffc107;

        background:#fff8e1;


    }





    .member-step-edit.active
    .member-step-title-edit{


        color:#d39e00;


    }







    /* ==================================
       STEP CONTENT
    ================================== */


    #editMemberModal .step-content{


        background:white;

        padding:20px;

        border:1px solid #dee2e6;

        animation:editFade .3s ease;


    }






    @keyframes editFade{


        from{


            opacity:0;

            transform:translateX(15px);


        }


        to{


            opacity:1;

            transform:translateX(0);


        }


    }







    #editMemberModal .step-content h6{


        font-size:16px;

        font-weight:600;

        color:#ffc107;

        padding-bottom:10px;

        margin-bottom:20px;

        border-bottom:1px solid #dee2e6;


    }







    /* ==================================
       FORMULAIRE
    ================================== */



    #editMemberModal .form-label{


        font-size:14px;

        font-weight:500;

        color:#495057;


    }




    #editMemberModal .form-control,
    #editMemberModal .form-select{


        height:42px;

        border:1px solid #ced4da;

        font-size:14px;


    }




    #editMemberModal textarea.form-control{


        height:auto;


    }





    #editMemberModal .form-control:focus,
    #editMemberModal .form-select:focus{


        border-color:#ffc107;

        box-shadow:
            0 0 0 .15rem rgba(255,193,7,.25);


    }






    /* ==================================
       ALERT RESUME
    ================================== */


    #editMemberModal .alert-primary{


        border-left:4px solid #0d6efd;


    }







    /* ==================================
       FOOTER
    ================================== */


    #editMemberModal .modal-footer{


        background:white;

        padding:15px 20px;

        border-top:1px solid #dee2e6;


    }







    #editMemberModal .modal-footer .btn{


        min-width:110px;


    }





    /* ==================================
       BUTTONS
    ================================== */


    #editMemberModal #editNextBtn{


        background:#ffc107;

        border-color:#ffc107;

        color:white;


    }



    #editMemberModal #editNextBtn:hover{


        background:#e0a800;

        border-color:#d39e00;


    }






    #editMemberModal #editSaveBtn{


        background:#198754;

        border-color:#198754;


    }





    /* ==================================
       MOBILE
    ================================== */


    @media(max-width:768px){



        .member-step-edit{


            flex-direction:column;

            text-align:center;


        }



        .member-step-edit small{


            display:none;


        }


    }


</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        let editCurrent = 0;

        const editContents = document.querySelectorAll("#editMemberModal .step-content");
        const editSteps = document.querySelectorAll("#editMemberModal .member-step-edit");

        const editNext = document.getElementById("editNextBtn");
        const editPrev = document.getElementById("editPrevBtn");
        const editSave = document.getElementById("editSaveBtn");

        function editShowStep() {

            editContents.forEach((step, index) => {
                step.classList.toggle("d-none", index !== editCurrent);
            });

            editSteps.forEach((step, index) => {
                step.classList.toggle("active", index <= editCurrent);
            });

            editPrev.style.display = editCurrent == 0 ? "none" : "inline-block";

            editNext.classList.toggle(
                "d-none",
                editCurrent == editContents.length - 1
            );

            editSave.classList.toggle(
                "d-none",
                editCurrent != editContents.length - 1
            );
        }

        editNext.addEventListener("click", function () {

            if (editCurrent < editContents.length - 1) {

                editCurrent++;

                editShowStep();

            }

        });

        editPrev.addEventListener("click", function () {

            if (editCurrent > 0) {

                editCurrent--;

                editShowStep();

            }

        });

        editSteps.forEach((step, index) => {

            step.addEventListener("click", function () {

                editCurrent = index;

                editShowStep();

            });

        });

        document.querySelectorAll(".editMemberBtn").forEach(button => {

            button.addEventListener("click", function () {

                let id = this.dataset.id;

                document.getElementById("editMemberForm").action = "/membres/" + id;

                editCurrent = 0;

                editShowStep();

            });

        });

        editShowStep();

    });



    document.querySelectorAll(".editMemberBtn").forEach(button=>{

        button.addEventListener("click",function(){

            let id=this.dataset.id;

            document.getElementById("editMemberForm").action="/membres/"+id;

            document.getElementById("edit_first_name").value=this.dataset.first_name;
            document.getElementById("edit_last_name").value=this.dataset.last_name;
            document.getElementById("edit_middle_name").value=this.dataset.middle_name;
            document.getElementById("edit_gender").value=this.dataset.gender;
            document.getElementById("edit_birth_date").value=this.dataset.birth_date;
            document.getElementById("edit_phone").value=this.dataset.phone;
            document.getElementById("edit_email").value=this.dataset.email;
            document.getElementById("edit_address").value=this.dataset.address;

            document.getElementById("edit_marital_status").value=this.dataset.marital_status;
            document.getElementById("edit_spouse_name").value=this.dataset.spouse_name;
            document.getElementById("edit_marriage_date").value=this.dataset.marriage_date;
            document.getElementById("edit_marriage_type").value=this.dataset.marriage_type;
            document.getElementById("edit_children_count").value=this.dataset.children_count;

            document.getElementById("edit_church_join_date").value=this.dataset.church_join_date;
            document.getElementById("edit_previous_church").value=this.dataset.previous_church;
            document.getElementById("edit_previous_church_service").value=this.dataset.previous_church_service;
            document.getElementById("edit_water_baptism").value=this.dataset.water_baptism;
            document.getElementById("edit_holy_spirit_baptism").value=this.dataset.holy_spirit_baptism;
            document.getElementById("edit_slm_discipleship").value=this.dataset.slm_discipleship;

            document.getElementById("edit_department").value=this.dataset.department;
            document.getElementById("edit_profession").value=this.dataset.profession;
            document.getElementById("edit_professional_skills").value=this.dataset.professional_skills;

        });

    });
</script>


