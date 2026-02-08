<!doctype html>
<html lang=es>
<head>
<meta charset=utf-8>
<meta name=robots content="noindex, nofollow">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Fraternidad Nazaret</title>
<link rel=stylesheet href=/fraternidad/styles.css>
</head>
<div id=cookieGate class=cookie-gate aria-modal=true role=dialog>
<div class=cookie-modal>
<div class=cookie-title>Política de Cookies</div>
<div class=cookie-text>
Utilizamos cookies propias y de terceros para mejorar la experiencia de navegación, analizar el tráfico y personalizar el contenido. Puedes aceptar todas las cookies o rechazarlas. Puedes cambiar tu elección en cualquier momento desde la configuración del navegador.
</div>
<div class=cookie-actions>
<button id=cookieReject class="cookie-btn ghost" type=button>Rechazar</button>
<button id=cookieAccept class=cookie-btn type=button>Aceptar</button>
</div>
</div>
</div>
<script>!function(){const e="cookie_consent_v3",o=document.getElementById("cookieGate");function t(t){localStorage.setItem(e,t),document.documentElement.style.overflow="",document.body.style.overflow="",o.remove()}localStorage.getItem(e)?o.remove():(document.documentElement.style.overflow="hidden",document.body.style.overflow="hidden",document.getElementById("cookieAccept").onclick=function(){t("accepted")},document.getElementById("cookieReject").onclick=function(){t("rejected")})}()</script>
<body>
<div class=bg>
<video class=bg-video autoplay muted loop playsinline>
<source src=/fraternidad/assets/video_fondo.mp4 type=video/mp4>
</video>
<div class=bg-overlay></div>
</div>
<main class=wrap>
<section class=hero>
<img src=/fraternidad/assets/cruz.png class=hero-cross alt="Cruz cristiana">
<h1>FRATERNIDAD NAZARET</h1>
<p class=hero-sub>Comunidad privada de oración y servicio</p>
<p class=hero-sub>Un espacio de fe, recogimiento y fraternidad cristiana</p>
<p class=hero-sub>Donde dos o tres se reúnen en mi nombre, allí estoy yo en medio de ellos.</p>
<p class=cta-text>
<a href=#registro>ÚNETE A NOSOTROS</a>
</p>
</section>
<section id=registro class=card>
<h2>Registro</h2>
<form class=form method=POST action=/fraternidad/register.php autocomplete=on>
<label>Nombre
<input name=name required>
</label>
<label>Email
<input type=email name=email required>
</label>
<label>Contraseña
<input type=password name=password required>
</label>
<label>Confirmar contraseña
<input type=password name=password_confirm required>
</label>
<input type=hidden name=consent value=1>
<button type=submit>Crear cuenta</button>
</form>
<p class=hint>Al continuar aceptas formar parte de una comunidad privada de fe y respeto.</p>
</section>
</main>
</body>
</html>