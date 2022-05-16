<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Doctori</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
   
    <link rel="stylesheet" href="{{asset('css/frontend_css/style.css')}}" />
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="/">Doctori</a>
        <button
          class="navbar-toggler d-lg-none"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="collapsibleNavId"
        >
          <ul class="nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('index')}}"
                >Accueil <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('chercher')}}">Chercher</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('faq')}}">Faq</a>
            </li>
            <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary" href="{{url('/login')}}"
                >Mon Compte</a
              >
            </li>
            <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary" href="{{route('registerDoctor')}}"
                >Vous etes Medcin?</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <section class="home container mb-5">
      <div class="row mt-5">
        <div class="col-lg-6 mt-5 py-5 pl-5">
          <img
            class="animated zoomIn img-fluid"
            src="{{asset('images/frontend_images/medean_shot_1.jpg')}}"
            alt=""
          />
        </div>
        <div class="col-lg-6 my-auto">
          <div class="row">
            <div class="home-content offset-lg-1 col-lg-10">
              <h1 class=" delay-1s pb-3 ">
                Doctori
              </h1>
              <p class="pb-3">
                Doctori est un outil innovant qui vous permet de trouver rapidement un médecin en ligne et de prendre RDV en temps réel. Retrouvez les praticiens de votre ville et prenez rendez-vous gratuitement et en un seul clic
              </p>
            <a href="{{route('faq')}}" target="_blank"><button class="btn btn-lg btn-outline-secondary">à propos de nous
              </button></a>
              <a href="{{url('register')}}" target="_blank"><button class="btn btn-lg btn-secondary">S'inscrire</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="call-to-action py-5">
      <div class="container text-center w-50">
        <h2 class="py-3">Patient | Médecin</h2>
        <div class="mx-auto heading-line"></div>
        <p class="py-3">
          Trouvez un médecin
          Près de chez vous et prenez rendez-vous en ligne <br><br>
          Vous êtes professionnel de santé ?
          Découvrez notre logiciel de gestion des consultations et des patients
        </p>
        <a href="/faq" target="_blank"><button class="btn btn-lg btn-primary">Apprendre Encore Plus
        </button></a>
      </div>
    </section>
    <section class="services">
      <div class="text-center py-5">
        <h2 class="py-3">Services</h2>
        <div class="mx-auto heading-line"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <i class="fa fa-user-md"></i>

            <h4 class="py-3">Je trouve
            </h4>
            <p class="pb-5">
              100% gratuit pour les particuliers,
              sans publicité.
            </p>
          </div>
          <div class="col-md-4 text-center">
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <h4 class="py-3">Je choisis
            </h4>
            <p class="pb-5">
              Espace personnel dédié, gérez les rendez vous de toute votre famille.
            </p>
          </div>
          <div class="col-md-4 text-center">
            <i class="fa fa-stethoscope" aria-hidden="true"></i>
            <h4 class="py-3">Confirmation</h4>
            <p class="pb-5">
              Prenez, annulez, déplacez vos rendez vous 24/24h.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container">
        <div class="text-center py-5">
          <h2 class="py-3">Contact</h2>
          <div class="mx-auto heading-line"></div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div
              id="map-conatiner-google-1"
              class="z-depth-1-half map-conatiner"
            >
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3489.980019793148!2d-10.05545741461228!3d28.98796307465697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb50318a57d7339%3A0xcff0af5bbc2c6cda!2sCr%C3%A9dit%20du%20Maroc!5e0!3m2!1sar!2sma!4v1581858423098!5m2!1sar!2sma"
                width="500"
                height="450"
                frameborder="0"
                style="border:0;"
                allowfullscreen=""
              ></iframe>
            </div>
          </div>

        <form action="{{url('/thanks')}}" method="POST" class="col-lg-6">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="email">E-mail</label>
              <input
                class="form-control"
                type="email"
                id="email"
                aria-describedby="emailHint"
                placeholder="Email"
                name="email"
              />
              <small id="emailHint" class="form-text text-muted"
                >Votre email est bien securise
              </small>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input
                class="form-control"
                type="text"
                id="name"
                name="name"
                aria-describedby=""
                placeholder="Name"
              />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea
                class="form-control"
                id="message"
                name="message"
                rows="5"
                placeholder="Message"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-outline-secondary">
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
    <footer class="footer mt-5">
      <div class="container text-center w-50 ">
        <h2 class="py-3">Doctori</h2>
        <div class="mx-auto heading-line"></div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-6 offset-lg-3 text-center">
          <p>
            Inscrivez vous en quelques secondes et prenez, déplacez, annulez vos rendez-vous en toute simplicité 24/24h, 7 jours sur 7 en quelques clics.


          </p>
          
        </div>
      </div>
      <div class="copyright text-center py-3 border-top text-muted">
        <p>Created by Doctori &copy; 2020</p>
        <p>Doctori | <a href="http://127.0.0.1:8000/">Doctori.local</a></p>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
