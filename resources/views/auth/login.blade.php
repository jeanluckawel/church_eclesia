<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">

    <title>Eglecia - Connexion</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="title" content="Eglecia - Connexion">

    <meta name="author" content="Eglecia">


    <meta
        name="description"
        content="Eglecia est une plateforme de gestion d'église permettant de gérer les membres, les cultes, les événements, les groupes et le suivi pastoral."
    >


    <meta
        name="keywords"
        content="Eglecia, église, gestion d'église, membres, culte, événements, groupes, suivi pastoral"
    >



    <link rel="preload" href="{{ asset('css/adminlte.css') }}" as="style">


    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    >


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >


    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="{{ asset('css/adminlte.css') }}">



    <!-- Open Sans -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >



    <style>


        body {

            font-family: 'Open Sans', sans-serif;

        }



        .login-box {

            width:380px;

        }



        .login-box .card {

            border-radius:0;

        }



        .login-logo a {

            font-weight:600;

            font-family:'Open Sans', sans-serif;

        }



        .form-control,
        .btn,
        .card,
        label {

            font-family:'Open Sans', sans-serif;

        }



    </style>


</head>



<body class="login-page bg-body-secondary">



<div class="login-box">


    <!-- Logo -->

    <div class="login-logo">


        <a href="#">

            <b>Eglecia</b>

        </a>


    </div>





    <div class="card shadow rounded-0">


        <div class="card-body login-card-body p-4">



            <p class="login-box-msg fw-bold fs-5">


                Connectez-vous pour accéder à votre espace


            </p>





            <form method="POST" action="{{ route('login') }}">


                @csrf




                <!-- Email -->


                <div class="input-group mb-3">


                    <input

                        type="email"

                        name="email"

                        class="form-control rounded-0"

                        placeholder="Adresse e-mail"

                        required

                    >



                    <div class="input-group-text rounded-0">


                        <span class="bi bi-envelope"></span>


                    </div>


                </div>







                <!-- Password -->


                <div class="input-group mb-3">


                    <input

                        type="password"

                        name="password"

                        class="form-control rounded-0"

                        placeholder="Mot de passe"

                        required

                    >



                    <div class="input-group-text rounded-0">


                        <span class="bi bi-lock-fill"></span>


                    </div>


                </div>








                <div class="row align-items-center mt-4">





                    <!-- Remember -->


                    <div class="col-8">


                        <div class="form-check">


                            <input

                                id="remember_me"

                                type="checkbox"

                                class="form-check-input"

                                name="remember"

                            >



                            <label

                                class="form-check-label small"

                                for="remember_me">


                                Se souvenir de moi


                            </label>



                        </div>


                    </div>







                    <!-- Button -->


                    <div class="col-4">


                        <button

                            type="submit"

                            class="btn btn-primary w-100 rounded-0"

                        >


                            Connexion


                            <i class="bi bi-box-arrow-in-right"></i>


                        </button>


                    </div>




                </div>




            </form>






            <hr class="mt-4">





            <p class="mb-0 text-center">


                <a href="#" class="small">


                    Assistance


                </a>


            </p>






        </div>


    </div>



</div>







<!-- Scripts -->


<script

    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">

</script>



<script

    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js">

</script>



<script src="{{ asset('js/adminlte.js') }}"></script>



</body>

</html>
