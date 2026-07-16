<div class="modal fade" id="createMemberModal" tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <div class="modal-header">

                <h5 class="modal-title">
                    <i class="bi bi-person-plus me-2"></i>
                    Nouveau membre
                </h5>

                <button class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>



            <form action="{{ route('membres.store') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  autocomplete="off">

                    @csrf




                <div class="modal-body">


                    {{-- STEPS HEADER --}}
                    {{-- STEPS HEADER --}}
                    <div class="row g-2 mb-4">


                        <div class="col-md-3">

                            <div class="member-step active"
                                 data-step="0">

            <span class="member-step-icon bg-primary">

                <i class="bi bi-person-fill"></i>

            </span>


                                <div>

                <span class="member-step-title">
                    Personnel
                </span>


                                    <small>
                                        Identité
                                    </small>

                                </div>


                            </div>

                        </div>





                        <div class="col-md-3">

                            <div class="member-step"
                                 data-step="1">


            <span class="member-step-icon bg-success">

                <i class="bi bi-heart-fill"></i>

            </span>


                                <div>

                <span class="member-step-title">
                    Etat civil
                </span>


                                    <small>
                                        Famille
                                    </small>

                                </div>


                            </div>

                        </div>






                        <div class="col-md-3">

                            <div class="member-step"
                                 data-step="2">


            <span class="member-step-icon bg-warning">

                <i class="bi bi-plus-lg"></i>

            </span>


                                <div>

                <span class="member-step-title">
                    Église
                </span>


                                    <small>
                                        Vie chrétienne
                                    </small>

                                </div>


                            </div>

                        </div>







                        <div class="col-md-3">

                            <div class="member-step"
                                 data-step="3">


            <span class="member-step-icon bg-info">

                <i class="bi bi-briefcase-fill"></i>

            </span>


                                <div>

                <span class="member-step-title">
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
                                    name="first_name"
                                    autocomplete="new-password"
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
                                    name="last_name"
                                    autocomplete="new-password"
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
                                    name="middle_name"
                                    autocomplete="new-password">

                            </div>

                            {{-- Sexe --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Sexe <span class="text-danger">*</span>
                                </label>

                                <select
                                    class="form-select"
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
                                    name="birth_date"
                                    autocomplete="off">

                            </div>

                            {{-- Téléphone --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Téléphone
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="phone"
                                    autocomplete="new-password">

                            </div>

                            {{-- Email --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Adresse e-mail
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    autocomplete="new-password">

                            </div>

                            {{-- Photo --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Photo
                                </label>

                                <input
                                    type="file"
                                    class="form-control"
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
                                    name="address"
                                    autocomplete="off"></textarea>

                            </div>

                        </div>

                    </div>




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
                                    name="spouse_name"
                                    autocomplete="new-password">

                            </div>

                            {{-- Date du mariage --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Date du mariage
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    name="marriage_date"
                                    autocomplete="off">

                            </div>

                            {{-- Type de mariage --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Type de mariage
                                </label>

                                <select
                                    class="form-select"
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
                                    name="children_count"
                                    min="0"
                                    value="0"
                                    autocomplete="off">

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

                            {{-- Date d'intégration --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Date d'intégration à l'église
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    name="church_join_date"
                                    autocomplete="off">

                            </div>

                            {{-- Ancienne église --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Ancienne église
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="previous_church"
                                    autocomplete="new-password">

                            </div>

                            {{-- Ancien service --}}
                            <div class="col-md-12 mb-3">

                                <label class="form-label">
                                    Ancien service dans l'église
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="previous_church_service"
                                    autocomplete="new-password">

                            </div>

                            {{-- Baptême d'eau --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Baptême d'eau
                                </label>

                                <select
                                    class="form-select"
                                    name="water_baptism">

                                    <option value="0">
                                        Non
                                    </option>

                                    <option value="1">
                                        Oui
                                    </option>

                                </select>

                            </div>

                            {{-- Baptême du Saint-Esprit --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Baptême du Saint-Esprit
                                </label>

                                <select
                                    class="form-select"
                                    name="holy_spirit_baptism">

                                    <option value="0">
                                        Non
                                    </option>

                                    <option value="1">
                                        Oui
                                    </option>

                                </select>

                            </div>

                            {{-- Discipulat --}}
                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Formation SLM / Discipulat
                                </label>

                                <select
                                    class="form-select"
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

                            {{-- Département --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Département / Ministère
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="department"
                                    autocomplete="new-password"
                                    placeholder="Ex : Chorale, Jeunesse, Intercession...">

                            </div>

                            {{-- Profession --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Profession
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="profession"
                                    autocomplete="new-password"
                                    placeholder="Ex : Enseignant, Informaticien...">

                            </div>

                            {{-- Compétences --}}
                            <div class="col-md-12 mb-4">

                                <label class="form-label">
                                    Compétences professionnelles
                                </label>

                                <textarea
                                    class="form-control"
                                    name="professional_skills"
                                    rows="4"
                                    autocomplete="off"
                                    placeholder="Décrivez les compétences professionnelles ou les talents du membre..."></textarea>

                            </div>

                        </div>

                        {{-- Résumé --}}
                        <div class="alert alert-primary mb-0">

                            <div class="d-flex align-items-start">

                                <i class="bi bi-info-circle-fill fs-4 me-3"></i>

                                <div>

                                    <strong>Vérification</strong>

                                    <p class="mb-0 mt-1">

                                        Vérifiez les informations saisies avant de cliquer sur
                                        <strong>Enregistrer</strong>.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>





                <div class="modal-footer">


                    <button type="button"
                            class="btn btn-light"
                            id="prevBtn">

                        Retour

                    </button>


                    <button type="button"
                            class="btn btn-primary"
                            id="nextBtn">

                        Suivant

                    </button>


                    <button type="submit"
                            class="btn btn-success"
                            id="saveBtn">

                        Enregistrer

                    </button>


                </div>



            </form>


        </div>

    </div>

</div>

<style>

    /* ==============================
       MODAL GLOBAL
    ================================ */

    #createMemberModal .modal-content{

        border:none;

        overflow:hidden;

    }



    #createMemberModal .modal-header{

        background:#0d6efd;

        color:white;

        padding:15px 20px;

    }



    #createMemberModal .modal-title{

        font-weight:600;

    }



    #createMemberModal .btn-close{

        filter:brightness(0) invert(1);

    }



    /* ==============================
       MODAL BODY
    ================================ */


    #createMemberModal .modal-body{

        background:#f8f9fa;

        padding:20px;

    }





    /* ==============================
       STEPS
    ================================ */


    .member-step{

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



    .member-step:hover{

        background:#f8f9fa;

        box-shadow:0 3px 10px rgba(0,0,0,.08);

    }





    .member-step-icon{

        width:45px;

        height:45px;

        display:flex;

        justify-content:center;

        align-items:center;

        color:white;

        font-size:20px;

        flex-shrink:0;

    }





    .member-step-title{

        display:block;

        font-size:14px;

        font-weight:600;

        color:#212529;

    }





    .member-step small{

        display:block;

        color:#6c757d;

        font-size:12px;

    }





    .member-step.active{

        border:2px solid #0d6efd;

        background:#eef5ff;

    }



    .member-step.active .member-step-title{

        color:#0d6efd;

    }




    /* ==============================
       STEP CONTENT
    ================================ */


    .step-content{

        background:white;

        padding:20px;

        border:1px solid #dee2e6;

        animation:fadeStep .3s ease;

    }




    @keyframes fadeStep{

        from{

            opacity:0;

            transform:translateX(15px);

        }


        to{

            opacity:1;

            transform:translateX(0);

        }

    }





    .step-content h6{

        font-size:16px;

        font-weight:600;

        color:#0d6efd;

        padding-bottom:10px;

        margin-bottom:20px;

        border-bottom:1px solid #dee2e6;

    }





    /* ==============================
       FORM
    ================================ */


    .form-label{

        font-size:14px;

        font-weight:500;

        color:#495057;

    }





    .form-control,
    .form-select{

        height:42px;

        border:1px solid #ced4da;

        font-size:14px;

    }





    textarea.form-control{

        height:auto;

    }





    .form-control:focus,
    .form-select:focus{

        border-color:#0d6efd;

        box-shadow:0 0 0 .15rem rgba(13,110,253,.15);

    }





    /* ==============================
       INPUT ICON
    ================================ */


    .input-group-text{

        background:#f1f3f5;

        color:#0d6efd;

    }





    /* ==============================
       FOOTER
    ================================ */


    .modal-footer{

        background:white;

        padding:15px 20px;

        border-top:1px solid #dee2e6;

    }



    .modal-footer .btn{

        min-width:110px;

    }



    /* ==============================
       MOBILE
    ================================ */


    @media(max-width:768px){


        .member-step{

            flex-direction:column;

            text-align:center;

        }


        .member-step small{

            display:none;

        }


    }

</style>

<script>

    document.querySelector('form').addEventListener('submit', function(e){
        console.log('Formulaire envoyé');
    });

    let current = 0;

    let contents = document.querySelectorAll('.step-content');
    let steps = document.querySelectorAll('.member-step');


    let next = document.getElementById('nextBtn');
    let prev = document.getElementById('prevBtn');
    let save = document.getElementById('saveBtn');


    function showStep(){

        contents.forEach((item,index)=>{

            item.classList.toggle(
                'd-none',
                index !== current
            );

        });


        steps.forEach((item,index)=>{

            item.classList.toggle(
                'active',
                index <= current
            );

        });


        prev.style.display =
            current === 0 ? 'none':'block';


        next.classList.toggle(
            'd-none',
            current === contents.length-1
        );


        save.classList.toggle(
            'd-none',
            current !== contents.length-1
        );

    }



    next.onclick = ()=>{

        if(current < contents.length-1){

            current++;

            showStep();

        }

    }


    prev.onclick = ()=>{

        if(current > 0){

            current--;

            showStep();

        }

    }


    showStep();


</script>
