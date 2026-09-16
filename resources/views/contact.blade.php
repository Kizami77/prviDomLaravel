

 <!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

           integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Link za kontakt CSS fajl -->
     <link rel="stylesheet" href="{{ asset('css/footer.style.css') }}">
     <title>Document</title>
 </head>
 <body>
 @extends('layout')


 @section('sadrzajStranice')



     <h2 class="contact">Kontakt stranica </h2>
     <p class="mapa">Ovde vam je i mapa kako doci do nas...</p>

     <div class="container contact-section my-5">
         <div class="row g-4 align-items-stretch">

             <!-- LEVA KOLONA: Kontakt Forma -->
             <div class="col-md-6">
                 <div class="contact-box h-100">
                     <h3 class="mb-4">Pošaljite nam poruku</h3>

                     <form action="#" method="POST">
                         @csrf
                         <div class="mb-3">
                             <label for="name" class="form-label">Vaša email adresa</label>
                             <input type="text" class="form-control custom-input" name="email" required placeholder="ime@primer.com">
                         </div>

                         <div class="mb-3">
                             <label for="subject" class="form-label">Vasa tema</label>
                             <input type="text" class="form-control custom-input"  name="subject" required placeholder="vasa tema">
                         </div>

                         <div class="mb-3">
                             <label for="message" class="form-label">Poruka</label>
                             <textarea class="form-control custom-input"  name="message" rows="5" required placeholder="Napišite vašu poruku ovde..."></textarea>
                         </div>

                         <button type="submit" class="btn btn-primary w-100 btn-custom">Pošalji Poruku</button>
                     </form>
                 </div>
             </div>

             <!-- DESNA KOLONA: Google Mapa -->
             <div class="col-md-6">
                 <div class="map-box h-100">
                     <!-- Google Maps iFrame (Zamenite src link sa vašom lokacijom ako želite) -->
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.3255822643314!2d20.478179000000004!3d44.794553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70714c6f4a3d%3A0x8a150b881557da86!2sMaksima%20Gorkog%2C%20Beograd!5e0!3m2!1sen!2srs!4v1787850535621!5m2!1sen!2srs"
                             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">

                     </iframe>

                 </div>
             </div>

         </div>
     </div>
 @endsection


 </body>
 </html>

