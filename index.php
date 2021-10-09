<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
  <link rel="stylesheet" href="style.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="header-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navbar-scroll fixed-top">
        <div class="navbar-header">
          <div class="row">
            <div class="col-12">
              <a class="navbar-brand" href="/">
                <img id="site-logo" src="logo.png">
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div id="background"></div>
    </div>
  </div>

  <div class="row">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="py-5">
        <h1 class="display-5 fw-bold text-center">Varför har vi ringt dig?</h1>
        <div class="col-12">
          <p class="fs-4 text-center">Vi har ringt dig för att erbjuda en tjänst eller en produkt som vi tror att du kommer att uppskatta. Vår ambition är göra din framtid bättre, smartare och roligare. Vi jobbar som rådgivare där målet är att sänka din månadskostnad på dina nuvarande abonnemang. På uppdrag av våra uppdragsgivare kontaktar vi både företag och privatpersoner i marknadsförings- och försäljningssyfte. Vårt uppdrag innebär att vi kontaktar befintliga kunder som har ett etablerat förhållande med vår uppdragsgivare, med syfte att informera om produkter, tjänster och unika erbjudanden.</p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="row align-items-md-stretch">
    <div class="col-md-6">
      <div class="h-100 p-5 text-white bg-dark rounded-3">
        <h2 class="text-center">Önskar du komma i kontakt med oss?</h2>
        <p class="text-center">Har du några funderingar kan du maila oss på <a href="mailto:info@mtsales.se">info@mtsales.se</a> eller använda formuläret. Är du redan kund idag och har frågor kring ditt abonnemang, vänligen ring oss på <a href="tel:+46103302801">010 - 330 28 01</a>.</p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="h-100 p-5 bg-light border rounded-3">
        <h2 class="text-center">Vill du ej bli uppringd av MT Sales?</h2>
        <p class="text-center">Maila ditt namn och telefonnummer till <a href="mailto:info@mtsales.se">info@mtsales.se</a> eller använd formuläret så löser vi detta!
          Med vänlig hälsning / Kind regards
          Kebba Njie | CEO
          Prissänkarna Sweden | <a href="tel:+46722226677">072 222 66 77</a> |
          <a href="mailto:info@mtsales.se">Kebba@mtsales.se</a> | <a href="https://www.Prissänkarna.se">www.Prissänkarna.se</a>
        </p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="p-5 mb-4 rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold text-center">Skicka oss ett meddelande</h1>
        </div>
      </div>
    </div>
  </div>

  <form id="form" class="form" method="POST" action="email.php">
    <div class="h-100 p-5 bg-light border rounded-3">
      <div class="row">
        <div class="col-4 .d-none .d-sm-block">
        </div>
        <div class="col-block col-4 col-xs-12">
          <div id="form-d2f5f6d4-f4cd-4ce5-b348-762070fdf3bf" class="block-object ContactForm">
            <input type="hidden" name="referrerUrl" />
            <input type="hidden" name="pageId" value="627af873-be55-467e-9b9a-00ce26be3a4b" />
            <input type="hidden" name="formId" value="d2f5f6d4-f4cd-4ce5-b348-762070fdf3bf" />
            <div class="ContactFormName mb-3">
              <p>Namn*</p>
              <input id="name-field" type="text" name="name" class="text textname required form-control" required />
            </div>
            <div class="ContactFormEmail mb-3">
              <p>E-post*</p>
              <input id="email-field" type="email" name="email" class="text textemail required form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
            </div>

            <div class="ContactFormField mb-3">
              <p>Telefonnummer</p>
              <input id="phone-field" type="text" name="phonenumber" class="field-1 text form-control" />
            </div>

            <div class="ContactFormMessage mb-3">
              <p>Meddelande*</p>
              <textarea id="message-field" name="message" cols="30" rows="3" class="textmessage form-control" required minlength="50"></textarea>
            </div>

            <input id="button" type="submit" class="ContactSubmit btn-primary" name="formPartSubmit" value="Skicka meddelande" />
            * obligatoriska fält
          </div>
        </div>
      </div>
    </div>
  </form>

  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Försök igen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Meddelandet skickades inte. Försök att skicka igen.</p>
        </div>
      </div>
    </div>
  </div>

  <footer class="py-5 border-top">
    <div class="row">
      <div class="col-6 text-center">
        <h5>Kontakta oss</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="tel:+46722226677" class="nav-link p-0 text-muted">Tele: 0722 22 66 77</a></li>
          <li class="nav-item mb-2"><a href="mailto:info@mtsales.se" class="nav-link p-0 text-muted">Mail: info@mtsales.se</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">&copy; 2021 All rights reserved.</a></li>
        </ul>
      </div>
      <div class="col-6 text-center">
        <h5>Prissänkarna</h5>
        <p>Prissänkarna är en försäljningsverksamhet inom telemarketing som erbjuder skräddarsydda lösningar till företag som vill outsourca delar av sin försäljning eller ha en hjälpande hand med kundkontakten.</p>
      </div>
    </div>
  </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<script>
  const form = document.getElementById('form');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    sendContactMessage();
  });

  function sendContactMessage() {
    const formData = new FormData();

    const name = document.getElementById("name-field");
    const email = document.getElementById("email-field");
    const phone = document.getElementById("phone-field");
    const message = document.getElementById("message-field");

    formData.append("name", name.value);
    formData.append("email", email.value);
    formData.append("phone", phone.value);
    formData.append("message", message.value);

    fetch('index.php', {
      method: 'post',
      body: formData
    }).then(function(response) {
      return response.json();
    }).then(function(text) {
      // Successfully sent email
      // Show modal
      console.log(text);
      name.value = "";
      phone.value = "";
      email.value = "";
      message.value = "";
    }).catch(function(error) {
      // Failed to send email
      console.log(error);
      // Present a modal that shows that the email could not be sent
    })
  }
</script>

</html>