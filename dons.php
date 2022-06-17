<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl/owl.theme.default.min.css">
  <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>IamOne4All</title>
</head>

<body>
  <header>
  <nav>
      <a href="index.html#presentation">Présentation</a>
      <a href="index.html#vision">Road-Trip #One4All</a>
      <a href="index.html#objectif">Objectif <br> 100M€</a>
      <a href="index.html#hero">Ligue des Héros Altruistes</a>
      <a href="index.html"><img class="logo" src="assets/img/etapes/spiderman.png" alt=""></a>
      <a href="index.html#etape">Participer <i class="fa-solid fa-heart"></i></a>
      <a href="index.html#commu">Communauté #One4All</a>
      <a href="index.html#actu">Actualités</a>
      <a href="index.html#events">Evénements</a>
    </nav>
  </header>
  <section class="don">
    <div class="containerImg">
      <img src="assets/img/Répartition Ukraine.png" alt="Image">
    </div>
    <div class="containerDon">
      <form action="create-checkout-session.php" method="post">
        <span class="success"> Merci pour votre don, nous l'avons bien reçu !</span>
        <div class="product">
          <div class="description">
            <h2>Nous soutenir</h2>
          </div>
        </div>
        <button class="btnPrimary" type="submit" id="checkout-button">Je fais un don</button>
      </form>
    </div>
  </section>
  <footer>
    <p>Copyright© 2022 #One4All. Tous droits réservés.</p>
    <div class="col">
      <h3>Menu</h3>
      <nav>
        <a href="#presentation">Présentation</a>
        <a href="#vision">#One4All Vision</a>
        <a href="#objectif">Objectif</a>
        <a href="#hero">Ligue des héros altruistes</a>
        <a href="#etape">Participer</a>
        <a href="#commu">Communauté</a>
        <a href="#actu">Actualités</a>
        <a href="#events">Evénements</a>
      </nav>
    </div>
    <div class="col">
      <h3>Follow</h3>
      <nav class="logo">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
      </nav>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>