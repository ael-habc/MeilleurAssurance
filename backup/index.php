<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="icon" href="https://strictassur.com/image/favicon.png" type="image/png" sizes="16x16">
  <title>Comparateur Mutuelle Santé Sénior

  </title>
  <meta name="google-site-verification" content="ymubMx-Gx3vWFotqf0yMeuKCIw1daI4NMaKy7K3ySbQ" />
  <meta name="description"
    content="Notre comparateur de mutuelle dédié aux séniors vous aide à trouver une couverture santé adaptée à votre âge et à vos besoins. Comparez les offres et économisez sur votre assurance santé">

  <!-- Hotjar Tracking Code for LP Comparateur -->
  <script>
    (function (h, o, t, j, a, r) {
      h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
      h._hjSettings = { hjid: 3808887, hjsv: 6 };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script'); r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

  <!-- Meta Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '316763521230504');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=316763521230504&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <script>
    window.uetq = window.uetq || [];
    window.uetq.push("event", "submit", { "event_value": 1, "event_category": "mutulle sante senior", "revenue_value": 1, "currency": "USD" });
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R3V72PE0TC"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-R3V72PE0TC'); </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-815079202"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-815079202'); </script>

  <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof (url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
        'send_to': 'AW-815079202/MoepCMHKi7kYEKK-1IQD',
        'event_callback': callback
      });
      return false;
    }
  </script>
</head>
<style>
  html,
  body {
    height: 100%;
    margin: 0;
  }

  body {
    background-position: right 126px bottom 0;
    /* Additional styles for the body element */
  }
</style>

<body>
  </div>
  <div class="main">
    <img src="./Assests/logo.png" alt="logo" id="logo" />
    <h1>
      Comparez gratuitement les Meilleures
      <span>Mutuelles Santé Sénior </span>en 2 clics.
    </h1>
    <p class="para">Accompagnement et suivi <span> personnalisé</span>.</p>
    <form id="form" enctype="multipart/form-data" method="post" action="run.php">
      <div>
        <input type="text" name="prenom" class="prenom" id="prenom" placeholder="Prénom *" oninput="validation()" />
        <input type="text" name="nom" class="nom" id="nom" placeholder="Nom *" oninput="validation()" />
        <input type="text" name="telephone" class="telephone" id="telephone" placeholder="Téléphone *"
          oninput="validation()" />
        <input type="text" name="codePostal" class="codePostal" id="codePostal" placeholder="Code Postal"
          oninput="validation()" maxlength="5" />

        <input type="email" name="email" class="email" id="email" placeholder="Email *" oninput="validation()" />
        <input type="number" name="date" class="date" id="date" placeholder="Année de naissance (1947)"
          oninput="validation()" min="1000" />
      </div>
      <p class="message" id="message">
        J'accepte que le comparateur StrictAssur me communique différents
        devis de Mutuelle Santé par email et par téléphone conformément au
        <a target="_blank"
          href="https://strictassur.com/mutuelle-sante-senior/index.php/conditions-generales-dutilisation/">
          CGU</a>
        et
        <a target="_blank"
          href="https://strictassur.com/mutuelle-sante-senior/index.php/protection-de-donnees-personnelles/">
          Mentions Légales</a>
        .
      </p>
      <label class="switch">
        <input type="checkbox" checked onchange="validation()" id="check" />
        <span class="slider round"></span>
      </label>
      <button type="submit" disbled id='button'>Obtenir mes devis</button>
    </form>
    <p id="snackbar">Veuillez remplir les champs obligatoires du formulaires avant d'envoyer votre demande de devis.
    </p>
  </div>
  <div class="container">
    <div class='section'>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
          <path
            d="M13.5 0.203125C6.30078 0.203125 0.5 6.00391 0.5 13.2031C0.5 20.4023 6.30078 26.2031 13.5 26.2031C20.6992 26.2031 26.5 20.4023 26.5 13.2031C26.5 11.8047 26.3125 10.4102 25.8125 9.10938L24.1875 10.7031C24.3867 11.5039 24.5 12.3047 24.5 13.2031C24.5 19.3047 19.6016 24.2031 13.5 24.2031C7.39844 24.2031 2.5 19.3047 2.5 13.2031C2.5 7.10156 7.39844 2.20312 13.5 2.20312C16.5 2.20312 19.1953 3.39844 21.0938 5.29688L22.5 3.89062C20.1992 1.58984 17 0.203125 13.5 0.203125ZM24.7812 4.48438L13.5 15.7656L9.21875 11.4844L7.78125 12.9219L12.7812 17.9219L13.5 18.6094L14.2188 17.9219L26.2188 5.92188L24.7812 4.48438Z"
            fill="#080D56" />
          <p>
            Plusieurs offres à comparer
          </p>
        </svg>
      </div>
      <div class='section_card'>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
          <path
            d="M13.5 0.203125C6.30078 0.203125 0.5 6.00391 0.5 13.2031C0.5 20.4023 6.30078 26.2031 13.5 26.2031C20.6992 26.2031 26.5 20.4023 26.5 13.2031C26.5 11.8047 26.3125 10.4102 25.8125 9.10938L24.1875 10.7031C24.3867 11.5039 24.5 12.3047 24.5 13.2031C24.5 19.3047 19.6016 24.2031 13.5 24.2031C7.39844 24.2031 2.5 19.3047 2.5 13.2031C2.5 7.10156 7.39844 2.20312 13.5 2.20312C16.5 2.20312 19.1953 3.39844 21.0938 5.29688L22.5 3.89062C20.1992 1.58984 17 0.203125 13.5 0.203125ZM24.7812 4.48438L13.5 15.7656L9.21875 11.4844L7.78125 12.9219L12.7812 17.9219L13.5 18.6094L14.2188 17.9219L26.2188 5.92188L24.7812 4.48438Z"
            fill="#080D56" />
          <p>
            Devis gratuit en 2 Clics
          </p>
        </svg>
      </div>
      <div class='section_card'>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
          <path
            d="M13.5 0.203125C6.30078 0.203125 0.5 6.00391 0.5 13.2031C0.5 20.4023 6.30078 26.2031 13.5 26.2031C20.6992 26.2031 26.5 20.4023 26.5 13.2031C26.5 11.8047 26.3125 10.4102 25.8125 9.10938L24.1875 10.7031C24.3867 11.5039 24.5 12.3047 24.5 13.2031C24.5 19.3047 19.6016 24.2031 13.5 24.2031C7.39844 24.2031 2.5 19.3047 2.5 13.2031C2.5 7.10156 7.39844 2.20312 13.5 2.20312C16.5 2.20312 19.1953 3.39844 21.0938 5.29688L22.5 3.89062C20.1992 1.58984 17 0.203125 13.5 0.203125ZM24.7812 4.48438L13.5 15.7656L9.21875 11.4844L7.78125 12.9219L12.7812 17.9219L13.5 18.6094L14.2188 17.9219L26.2188 5.92188L24.7812 4.48438Z"
            fill="#080D56" />
          <p>
            Tarifs adaptés
          </p>
        </svg>
      </div>
    </div>
    <div class="garanties">
      <div class="garanties_content">
        <h2>Mutuelle Santé Sénior</h2>
        <h3>Des garanties adaptées à vos besoin</h3>
        <div>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="white
            ">
              <g clip-path="url(#clip0_2_714)">
                <path
                  d="M5.11504 15.4025C4.76234 15.4025 4.40963 15.2077 4.14038 14.8155L0.403881 9.37372C-0.134627 8.58949 -0.134627 7.31904 0.403881 6.53706C0.94239 5.75283 1.81314 5.75053 2.35165 6.53479L5.11504 10.5593L11.6149 1.09308C12.1534 0.308818 13.0242 0.308818 13.5628 1.09308C14.1012 1.87735 14.1012 3.14778 13.5628 3.93204L6.08969 14.8155C5.82046 15.2077 5.46775 15.4025 5.11504 15.4025Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_2_714">
                  <rect width="15" height="15" fill="white
                  " transform="translate(0 0.504883)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <p>Dentaire</p>
        </div>
        <div>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="white
            ">
              <g clip-path="url(#clip0_2_714)">
                <path
                  d="M5.11504 15.4025C4.76234 15.4025 4.40963 15.2077 4.14038 14.8155L0.403881 9.37372C-0.134627 8.58949 -0.134627 7.31904 0.403881 6.53706C0.94239 5.75283 1.81314 5.75053 2.35165 6.53479L5.11504 10.5593L11.6149 1.09308C12.1534 0.308818 13.0242 0.308818 13.5628 1.09308C14.1012 1.87735 14.1012 3.14778 13.5628 3.93204L6.08969 14.8155C5.82046 15.2077 5.46775 15.4025 5.11504 15.4025Z"
                  fill="white
                  " />
              </g>
              <defs>
                <clipPath id="clip0_2_714">
                  <rect width="15" height="15" fill="white
                  " transform="translate(0 0.504883)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <p>Optique</p>
        </div>
        <div>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="white
            ">
              <g clip-path="url(#clip0_2_714)">
                <path
                  d="M5.11504 15.4025C4.76234 15.4025 4.40963 15.2077 4.14038 14.8155L0.403881 9.37372C-0.134627 8.58949 -0.134627 7.31904 0.403881 6.53706C0.94239 5.75283 1.81314 5.75053 2.35165 6.53479L5.11504 10.5593L11.6149 1.09308C12.1534 0.308818 13.0242 0.308818 13.5628 1.09308C14.1012 1.87735 14.1012 3.14778 13.5628 3.93204L6.08969 14.8155C5.82046 15.2077 5.46775 15.4025 5.11504 15.4025Z"
                  fill="white
                  " />
              </g>
              <defs>
                <clipPath id="clip0_2_714">
                  <rect width="15" height="15" fill="white
                  " transform="translate(0 0.504883)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <p>Hospitalisation</p>
        </div>
        <div>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="white
            ">
              <g clip-path="url(#clip0_2_714)">
                <path
                  d="M5.11504 15.4025C4.76234 15.4025 4.40963 15.2077 4.14038 14.8155L0.403881 9.37372C-0.134627 8.58949 -0.134627 7.31904 0.403881 6.53706C0.94239 5.75283 1.81314 5.75053 2.35165 6.53479L5.11504 10.5593L11.6149 1.09308C12.1534 0.308818 13.0242 0.308818 13.5628 1.09308C14.1012 1.87735 14.1012 3.14778 13.5628 3.93204L6.08969 14.8155C5.82046 15.2077 5.46775 15.4025 5.11504 15.4025Z"
                  fill="white
                  " />
              </g>
              <defs>
                <clipPath id="clip0_2_714">
                  <rect width="15" height="15" fill="white
                  " transform="translate(0 0.504883)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <p>Auditif</p>
        </div>
        <div>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="white
            ">
              <g clip-path="url(#clip0_2_714)">
                <path
                  d="M5.11504 15.4025C4.76234 15.4025 4.40963 15.2077 4.14038 14.8155L0.403881 9.37372C-0.134627 8.58949 -0.134627 7.31904 0.403881 6.53706C0.94239 5.75283 1.81314 5.75053 2.35165 6.53479L5.11504 10.5593L11.6149 1.09308C12.1534 0.308818 13.0242 0.308818 13.5628 1.09308C14.1012 1.87735 14.1012 3.14778 13.5628 3.93204L6.08969 14.8155C5.82046 15.2077 5.46775 15.4025 5.11504 15.4025Z"
                  fill="white
                  " />
              </g>
              <defs>
                <clipPath id="clip0_2_714">
                  <rect width="15" height="15" fill="white
                  " transform="translate(0 0.504883)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <p>Médecines douces</p>
        </div>
        <div>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="white
            ">
              <g clip-path="url(#clip0_2_714)">
                <path
                  d="M5.11504 15.4025C4.76234 15.4025 4.40963 15.2077 4.14038 14.8155L0.403881 9.37372C-0.134627 8.58949 -0.134627 7.31904 0.403881 6.53706C0.94239 5.75283 1.81314 5.75053 2.35165 6.53479L5.11504 10.5593L11.6149 1.09308C12.1534 0.308818 13.0242 0.308818 13.5628 1.09308C14.1012 1.87735 14.1012 3.14778 13.5628 3.93204L6.08969 14.8155C5.82046 15.2077 5.46775 15.4025 5.11504 15.4025Z"
                  fill="white
                  " />
              </g>
              <defs>
                <clipPath id="clip0_2_714">
                  <rect width="15" height="15" fill="white
                  " transform="translate(0 0.504883)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <p>Cures Thermales</p>
        </div>

      </div>
      <img src="./Assests/chris.jpg" alt="garanties" />
    </div>
  </div>
  <div class='avantages'>
    <img src="./Assests/hands.jpg" alt="garanties" />
    <div>
      <h3>Pourquoi choisir notre comparateur :</h3>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <path
            d="M15.5575 12.1004C15.085 12.0891 14.4902 12.0614 14.1145 11.9954C13.708 11.9234 13.219 11.7839 12.8747 11.6766C12.6047 11.5926 12.3107 11.6669 12.1105 11.8664L10.4477 13.5194C9.29872 12.9141 8.37847 12.2091 7.59922 11.4254C6.81547 10.6461 6.11047 9.72587 5.50522 8.57687L7.15822 6.91337C7.35772 6.71312 7.43197 6.41913 7.34797 6.14913C7.24147 5.80562 7.10122 5.31663 7.02997 4.91013C6.96322 4.53438 6.93622 3.93963 6.92422 3.46712C6.91447 3.05838 6.58147 2.73438 6.17272 2.73438H3.54022C3.21172 2.73438 2.79022 2.98038 2.79022 3.48438C2.79022 6.88863 4.17022 10.1399 6.51472 12.5099C8.88472 14.8544 12.136 16.2344 15.5402 16.2344C16.0442 16.2344 16.2902 15.8129 16.2902 15.4844V12.8519C16.2902 12.4431 15.9662 12.1101 15.5575 12.1004Z"
            fill="#50E3C2" />
        </svg>Accompagnement personnalisé
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <g clip-path="url(#clip0_1_258)">
            <path opacity="0.3"
              d="M16.0652 7.72812L15.1652 8.32812L14.2652 7.72812L13.8152 7.42813C13.2902 7.05313 12.8402 6.75313 12.6152 6.52813L12.5402 6.37812C11.0402 5.02812 10.2902 3.67812 10.2902 2.40312C10.0652 2.32812 9.76522 2.32812 9.54022 2.32812C5.79022 2.32812 2.79022 5.32812 2.79022 9.07812C2.79022 12.8281 5.79022 15.8281 9.54022 15.8281C13.2902 15.8281 16.2902 12.8281 16.2902 9.07812C16.2902 8.55312 16.2152 8.10312 16.0652 7.72812Z"
              fill="#21E39F" />
            <path
              d="M6.91521 6.07812C6.61684 6.07812 6.33069 6.19665 6.11971 6.40763C5.90874 6.61861 5.79021 6.90476 5.79021 7.20312C5.79021 7.50149 5.90874 7.78764 6.11971 7.99862C6.33069 8.2096 6.61684 8.32812 6.91521 8.32812C7.21358 8.32812 7.49973 8.2096 7.71071 7.99862C7.92168 7.78764 8.04021 7.50149 8.04021 7.20312C8.04021 6.90476 7.92168 6.61861 7.71071 6.40763C7.49973 6.19665 7.21358 6.07812 6.91521 6.07812ZM9.54021 13.2031C7.81521 13.2031 6.31521 12.0781 5.71521 10.5781H13.3652C12.7652 12.0781 11.2652 13.2031 9.54021 13.2031ZM15.1652 6.45312L14.7152 6.15313C14.1902 5.77813 13.8902 5.55312 13.6652 5.32812L13.5902 5.25313C12.9152 4.65313 11.1902 3.07812 12.0152 1.35313C12.3902 0.603125 13.1402 0.078125 13.9652 0.078125C14.4152 0.078125 14.7902 0.153125 15.1652 0.378125C15.5402 0.153125 15.9152 0.078125 16.3652 0.078125C17.1902 0.078125 17.9402 0.603125 18.3152 1.35313C19.1402 3.07812 17.4152 4.65313 16.7402 5.25313L16.6652 5.32812C16.4402 5.55312 15.9902 5.92813 15.6152 6.15313L15.1652 6.45312ZM13.9652 1.57812C13.7402 1.57812 13.4402 1.72812 13.3652 2.02812C13.1402 2.47812 13.5152 3.15313 14.5652 4.12813L14.6402 4.20312C14.7902 4.27812 14.9402 4.42812 15.1652 4.57812C15.3902 4.42812 15.5402 4.27812 15.6152 4.20312L15.7652 4.12813C16.8152 3.15313 17.1902 2.47812 16.9652 2.02812C16.8902 1.72812 16.5902 1.57812 16.3652 1.57812C16.2152 1.57812 16.0652 1.65313 15.9152 1.72813L15.1652 2.17812L14.4152 1.72813C14.2652 1.65313 14.1152 1.57812 13.9652 1.57812ZM12.6902 6.45312L12.5402 6.37812C12.4652 6.30312 12.3902 6.22813 12.3152 6.15313C12.2402 6.15313 12.2402 6.15313 12.1652 6.15313C11.5652 6.07813 11.0402 6.60313 11.0402 7.20312C11.0402 7.80312 11.5652 8.32812 12.1652 8.32812C12.7652 8.32812 13.2902 7.80312 13.2902 7.20312C13.2902 7.12813 13.2902 6.97813 13.2152 6.90313C12.9902 6.75313 12.8402 6.60313 12.6902 6.45312Z"
              fill="#21E39F" />
            <path
              d="M16.5152 7.35312L16.0652 7.65313L15.4652 8.10312C15.5402 8.40312 15.5402 8.77812 15.5402 9.07812C15.5402 12.3781 12.8402 15.0781 9.54022 15.0781C6.24022 15.0781 3.54022 12.3781 3.54022 9.07812C3.54022 5.77812 6.24022 3.07812 9.54022 3.07812C9.84022 3.07812 10.1402 3.07812 10.4402 3.15312C10.2902 2.62812 10.2902 2.10312 10.3652 1.65312C10.0652 1.57812 9.84022 1.57812 9.54022 1.57812C5.41522 1.57812 2.04022 4.95312 2.04022 9.07812C2.04022 13.2031 5.41522 16.5781 9.54022 16.5781C13.6652 16.5781 17.0402 13.2031 17.0402 9.07812C17.0402 8.40312 16.9652 7.72812 16.7402 7.12812C16.6652 7.20312 16.5902 7.27812 16.5152 7.35312Z"
              fill="#21E39F" />
          </g>
          <defs>
            <clipPath id="clip0_1_258">
              <rect width="18" height="18" fill="white" transform="translate(0.540222 0.078125)" />
            </clipPath>
          </defs>
        </svg>Expert attitré en mutuelle santé
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <path
            d="M4.29022 2.17188C3.04972 2.17188 2.04022 3.18138 2.04022 4.42188V6.67188H3.54022V15.6719H7.29022V14.1719H5.04022V6.67188H13.2902V4.42188C13.2902 4.00863 13.6262 3.67188 14.0402 3.67188C14.464 3.67188 14.7902 3.9981 14.7902 4.42188V15.6719H16.2902V4.42188C16.2902 3.18815 15.2739 2.17188 14.0402 2.17188H4.29022ZM4.29022 3.67188H11.9191C11.8359 3.90663 11.7902 4.15937 11.7902 4.42188V5.17188H3.54022V4.42188C3.54022 4.00863 3.87697 3.67188 4.29022 3.67188ZM6.54022 8.17188V9.67188H13.2902V8.17188H6.54022ZM6.54022 11.1719V12.6719H8.04022V11.1719H6.54022ZM11.0402 11.1719C9.80646 11.1719 8.79022 12.1881 8.79022 13.4219C8.79022 14.0792 9.0841 14.6685 9.54022 15.0815V17.7754L11.0402 16.8379L12.5402 17.7754V15.0815C12.9963 14.6685 13.2902 14.0792 13.2902 13.4219C13.2902 12.1881 12.274 11.1719 11.0402 11.1719ZM11.0402 12.6719C11.4633 12.6719 11.7902 12.9988 11.7902 13.4219C11.7902 13.845 11.4633 14.1719 11.0402 14.1719C10.6171 14.1719 10.2902 13.845 10.2902 13.4219C10.2902 12.9988 10.6171 12.6719 11.0402 12.6719Z"
            fill="#21E39F" />
        </svg>Conseils avisés pour vos besoins
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <path
            d="M11.7902 14.1406C9.90772 14.1406 8.28022 13.0756 7.47022 11.5156H11.7902V10.0156H6.97522C6.93772 9.76813 6.91522 9.52063 6.91522 9.26562C6.91522 9.01062 6.93772 8.76312 6.97522 8.51562H11.7902V7.01562H7.47022C8.28022 5.45563 9.91522 4.39062 11.7902 4.39062C12.9977 4.39062 14.1077 4.83313 14.9627 5.56813L16.2902 4.24063C15.0977 3.16813 13.5152 2.51562 11.7902 2.51562C8.85022 2.51562 6.36022 4.39812 5.43022 7.01562H2.79022V8.51562H5.08522C5.05522 8.76312 5.04022 9.01062 5.04022 9.26562C5.04022 9.52063 5.05522 9.76813 5.08522 10.0156H2.79022V11.5156H5.43022C6.36022 14.1331 8.85022 16.0156 11.7902 16.0156C13.5227 16.0156 15.0977 15.3631 16.2902 14.2906L14.9552 12.9631C14.1077 13.6981 13.0052 14.1406 11.7902 14.1406Z"
            fill="#21E39F" />
        </svg>Contrats flexibles et sur mesures
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <path opacity="0.3"
            d="M2.79022 5.35938H6.46522L7.29022 7.60938L8.79022 8.13437L11.0402 7.60938L13.2902 9.10938L13.8902 11.0594L9.54022 15.1094L8.79022 15.8594L7.14022 15.1094L2.79022 11.3594V5.35938Z"
            fill="#21E39F" />
          <path
            d="M8.71522 16.6094C8.19022 16.6094 7.74022 16.4594 7.36522 16.0844L2.79022 12.1094H2.04022V4.60937H8.79022C8.86522 4.60937 8.86522 4.60937 8.94022 4.60937L10.0652 4.08438C10.6652 3.78438 11.4152 3.78438 12.0152 4.08438L14.7902 5.28437L17.7902 4.30937V13.6094H12.5402L10.1402 16.0094C9.76522 16.3844 9.24022 16.6094 8.71522 16.6094ZM3.54022 10.7594L8.34022 14.9594C8.56522 15.1094 8.86522 15.1094 9.09022 14.9594L13.1402 10.9094C13.2902 10.7594 13.2902 10.6094 13.2902 10.4594C13.2902 10.3094 13.2152 10.1594 13.0652 10.0094L10.8902 8.05938L9.31522 8.65937C8.26522 9.10937 7.06522 8.58437 6.54022 7.60938L5.79022 6.10937H3.54022V10.7594ZM14.0402 12.1094H16.2902V6.40937L14.7902 6.93438L11.4152 5.43437C11.1902 5.35937 10.8902 5.35937 10.6652 5.43437L7.81522 6.78437L7.89022 6.93438C8.04022 7.23438 8.41522 7.38438 8.79022 7.30938L11.1902 6.40937L14.0402 8.88437C14.4902 9.25937 14.7152 9.78437 14.7902 10.3844C14.7902 10.9844 14.5652 11.5094 14.1902 11.9594L14.0402 12.1094Z"
            fill="#21E39F" />
        </svg>0 Reste à charge
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <path
            d="M6.74384 2.70312L2.79022 6.65674V12.2495L6.74384 16.2031H12.3366L16.2902 12.2495V6.65674L12.3366 2.70312H12.0261H6.74384ZM7.36493 4.20312H11.7155L14.7902 7.27783V11.6284L11.7155 14.7031H7.36493L4.29022 11.6284V7.27783L7.36493 4.20312ZM6.0246 8.01904C5.36985 8.01904 4.9743 8.38222 4.9743 8.85547C4.9743 9.25897 5.27624 9.51528 5.73749 9.67578C6.07124 9.79578 6.20331 9.89439 6.20331 10.0669C6.20331 10.2484 6.05114 10.3672 5.76239 10.3672C5.49389 10.3672 5.23462 10.2806 5.06512 10.1943L4.93768 10.7129C5.09443 10.7999 5.40705 10.8828 5.7243 10.8828C6.4863 10.8828 6.84491 10.4872 6.84491 10.0215C6.84491 9.63073 6.61396 9.37535 6.12421 9.19385C5.76571 9.0581 5.60858 8.97973 5.60858 8.80273C5.60858 8.65873 5.74138 8.53467 6.01288 8.53467C6.28438 8.53467 6.48196 8.61325 6.59296 8.6665L6.73358 8.15967C6.57008 8.08542 6.33735 8.01904 6.0246 8.01904ZM10.6374 8.01904C9.81764 8.01904 9.28534 8.64188 9.28534 9.47363C9.28534 10.2641 9.76773 10.8857 10.592 10.8857C11.4035 10.8857 11.9557 10.3343 11.9557 9.42383C11.9557 8.65733 11.4894 8.01904 10.6374 8.01904ZM13.2184 8.04395C12.8352 8.04395 12.5646 8.06807 12.3703 8.10107V10.8418H12.9929V9.84863C13.0499 9.85688 13.125 9.86182 13.2067 9.86182C13.5772 9.86182 13.8953 9.7706 14.1091 9.56885C14.2741 9.4121 14.3654 9.18117 14.3654 8.90967C14.3654 8.63742 14.2451 8.40685 14.0681 8.2666C13.8828 8.1181 13.6062 8.04395 13.2184 8.04395ZM7.06171 8.06445V8.5918H7.80731V10.8418H8.43719V8.5918H9.19598V8.06445H7.06171ZM10.6198 8.51855C11.0533 8.51855 11.2922 8.94559 11.2922 9.44434C11.2922 9.98359 11.048 10.3877 10.6242 10.3877C10.2042 10.3877 9.94891 10.0057 9.94891 9.46191C9.94891 8.92191 10.1961 8.51855 10.6198 8.51855ZM13.2521 8.51855C13.5656 8.51855 13.7429 8.67003 13.7429 8.92578C13.7429 9.21003 13.5361 9.37842 13.2023 9.37842C13.1123 9.37842 13.0461 9.37505 12.9929 9.3623V8.54199C13.0386 8.52999 13.1246 8.51855 13.2521 8.51855Z"
            fill="#21E39F" />
        </svg>Couverture jusqu'à 400 %
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
          <path
            d="M9.54022 2.29688C7.10565 2.29688 5.04022 4.01514 5.04022 6.23438V7.92188H8.41522V6.23438C8.41522 6.15088 8.46576 6.03003 8.66132 5.90039C8.85687 5.77075 9.17548 5.67188 9.54022 5.67188C9.90717 5.67188 10.2258 5.77075 10.4191 5.90039C10.6125 6.03003 10.6652 6.14209 10.6652 6.23438C10.6652 6.55957 10.5598 6.78589 10.3488 7.04297C10.1379 7.30005 9.81049 7.56592 9.45233 7.86914C8.73383 8.47778 7.85272 9.32593 7.85272 10.7344V11.2969H11.2277V10.7344C11.2277 10.5432 11.298 10.4092 11.509 10.1895C11.7199 9.96973 12.0693 9.71045 12.4406 9.39844C13.1833 8.77441 14.0402 7.8186 14.0402 6.23438C14.0402 4.03491 11.9792 2.29688 9.54022 2.29688ZM9.54022 3.42188C11.4496 3.42188 12.9152 4.75342 12.9152 6.23438C12.9152 7.44067 12.3659 7.979 11.7023 8.53711C11.3705 8.81616 11.0168 9.08862 10.7004 9.41602C10.5048 9.61816 10.3532 9.88184 10.2433 10.1719H9.1535C9.32928 9.60278 9.67206 9.16992 10.1906 8.73047C10.5356 8.44043 10.9113 8.13721 11.2277 7.74609C11.5441 7.35498 11.7902 6.84302 11.7902 6.23438C11.7902 5.69385 11.4694 5.24561 11.0519 4.96875C10.6345 4.69189 10.1049 4.54688 9.54022 4.54688C8.97333 4.54688 8.44379 4.69189 8.0285 4.96875C7.61322 5.24561 7.29022 5.69605 7.29022 6.23438V6.79688H6.16522V6.23438C6.16522 4.72485 7.6264 3.42188 9.54022 3.42188ZM7.85272 12.4219V15.7969H11.2277V12.4219H7.85272ZM8.97772 13.5469H10.1027V14.6719H8.97772V13.5469Z"
            fill="#50E3C2" />
        </svg>Sans questionnaire médicale
      </p>
    </div>
  </div>
  <div class='last'>
    <h2>
      Suivez ces trois étapes simples pour trouver et comparer les options qui correspondent le mieux à vos besoins:
    </h2>
    <div class="line"></div>
    <div class='last_content'>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
          <path
            d="M40.0833 44.0938H10.9167C8.41667 44.0938 6.75 42.4271 6.75 39.9271V10.7604C6.75 8.26042 8.41667 6.59375 10.9167 6.59375H40.0833C42.5833 6.59375 44.25 8.26042 44.25 10.7604V39.9271C44.25 42.4271 42.5833 44.0938 40.0833 44.0938ZM10.9167 10.7604V39.9271H40.0833V10.7604H10.9167Z"
            fill="#FF7A5E" />
          <path opacity="0.3"
            d="M40.0833 42.0103H10.9167C9.66668 42.0103 8.83334 41.177 8.83334 39.927V10.7603C8.83334 9.51034 9.66668 8.677 10.9167 8.677H40.0833C41.3333 8.677 42.1667 9.51034 42.1667 10.7603V39.927C42.1667 41.177 41.3333 42.0103 40.0833 42.0103Z"
            fill="#FF7A5E" />
          <path d="M27.5833 35.7603H23.4167V19.927L19.25 21.3853V18.052L27.1667 14.927H27.5833V35.7603Z"
            fill="#FF7A5E" />
        </svg>
        <h3>Évaluez vos besoins spécifiques </h3>
        <p>Notre Expert en mutuelle santé vous aidera à identifier vos besoins en matière de santé : les soins
          nécessaires, ainsi que vos préférences en termes de services médicaux. Cette première étape vous aidera à
          cibler les aspects essentiels de votre future mutuelle.</p>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
          <path
            d="M40.3736 44.0938H11.2069C8.91528 44.0938 7.04028 42.2188 7.04028 39.9271V10.7604C7.04028 8.46875 8.91528 6.59375 11.2069 6.59375H40.3736C42.6653 6.59375 44.5403 8.46875 44.5403 10.7604V39.9271C44.5403 42.2188 42.6653 44.0938 40.3736 44.0938ZM11.2069 10.7604V39.9271H40.3736V10.7604H11.2069Z"
            fill="#FF7A5E" />
          <path opacity="0.3"
            d="M40.3736 42.0103H11.2069C9.95693 42.0103 9.1236 41.177 9.1236 39.927V10.7603C9.1236 9.51034 9.95693 8.677 11.2069 8.677H40.3736C41.6236 8.677 42.4569 9.51034 42.4569 10.7603V39.927C42.4569 41.177 41.6236 42.0103 40.3736 42.0103Z"
            fill="#FF7A5E" />
          <path
            d="M32.0403 35.7605H19.5403V33.0522C19.5403 33.0522 26.8319 24.0938 27.2486 23.4688C27.6653 22.8438 27.8736 22.0105 27.8736 21.3855C27.8736 19.0938 26.6236 18.4688 25.7903 18.4688C24.9569 18.4688 23.7069 19.3022 23.7069 21.3855H19.5403C19.5403 20.1355 19.7486 19.0938 20.3736 18.0522C20.9986 17.0105 22.4569 15.1355 25.5819 15.1355C27.6653 15.1355 29.1236 15.5522 30.1653 16.5938C31.4153 17.4272 32.0403 18.8855 32.0403 20.7605C32.0403 21.8022 31.8319 23.0522 30.9986 24.0938C30.3736 25.1355 24.7486 32.4272 24.7486 32.4272H32.0403V35.7605Z"
            fill="#FF7A5E" />
        </svg>
        <h3>Comparez plusieurs offres du marché </h3>
        <p> Une fois vos besoins identifiés, notre expert santé vous aidera à comparer les différentes mutuelles santé
          sénior en fonction de leurs avantages, de leurs tarifs et des services proposés. Veillez à tenir compte des
          garanties, des niveaux de remboursement et des éventuelles exclusions pour prendre une décision éclairée.
        </p>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
          <path
            d="M39.6639 44.0938H10.4972C7.99723 44.0938 6.33057 42.4271 6.33057 39.9271V10.7604C6.33057 8.26042 7.99723 6.59375 10.4972 6.59375H39.6639C42.1639 6.59375 43.8306 8.26042 43.8306 10.7604V39.9271C43.8306 42.4271 42.1639 44.0938 39.6639 44.0938ZM10.4972 10.7604V39.9271H39.6639V10.7604H10.4972Z"
            fill="#FF7A5E" />
          <path opacity="0.3"
            d="M39.6639 42.0103H10.4973C9.24727 42.0103 8.41394 41.177 8.41394 39.927V10.7603C8.41394 9.51034 9.24727 8.677 10.4973 8.677H39.6639C40.9139 8.677 41.7473 9.51034 41.7473 10.7603V39.927C41.7473 41.177 40.9139 42.0103 39.6639 42.0103Z"
            fill="#FF7A5E" />
          <path
            d="M23.2056 23.6771H24.8723C25.914 23.6771 27.789 23.4688 27.789 20.7604C27.789 18.2604 25.7056 18.0521 25.0806 18.0521C23.414 18.0521 22.3723 19.7187 22.3723 20.9687H18.8306C18.8306 17.0104 21.7473 14.7188 24.8723 14.7188C30.7056 14.9271 31.3306 19.0938 31.3306 20.5521C31.3306 23.4688 28.8306 24.7188 28.414 24.9271C29.4556 25.3438 31.3306 26.3854 31.3306 29.7188C31.3306 34.7188 27.164 35.5521 25.0806 35.5521C20.0806 35.5521 18.6223 31.5938 18.8306 29.3021H22.5806C22.3723 29.9271 22.9973 32.2188 25.0806 32.2188C27.789 32.2188 27.5806 29.7188 27.5806 29.3021C27.5806 26.1771 25.0806 26.3854 24.664 26.3854H22.9973V23.2604C22.9973 23.6771 23.2056 23.6771 23.2056 23.6771Z"
            fill="#FF7A5E" />
        </svg>
        <h3>Choisissez votre offre personnalisée</h3>
        <p>Affinez votre recherche en demandant des devis personnalisés auprès des mutuelles qui correspondent à vos
          critères. Ces devis vous permettront d'obtenir des informations précises sur les coûts et les prestations,
          vous aidant ainsi à choisir la mutuelle santé sénior qui répond parfaitement à vos attentes.</p>
      </div>
    </div>

    <div class="footer">
      <div>
        <a target="_blank" rel="noreferrer"
          href="https://strictassur.com/mutuelle-sante-senior/index.php/conditions-generales-dutilisation/"
          class="text-blue-500">
          Conditions generales dutilisation
        </a>
        <a target="_blank" rel="noreferrer"
          href="https://strictassur.com/mutuelle-sante-senior/index.php/protection-de-donnees-personnelles/"
          class="text-blue-500">
          Protection de donnees personnelles
        </a>
      </div>
      <p> Copyright © 2024 Strictassur </p>
    </div>
  </div>
  <script src="./script.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-815079202"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-815079202'); </script>

</body>

</html>