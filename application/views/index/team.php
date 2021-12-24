   <!-- Team-->
   <section class="page-section bg-light" id="team">
       <div class="container">
           <div class="text-center">
               <h2 class="section-heading text-uppercase"><b>Our Amazing Team</b></h2>
               <h3 class="section-subheading text-muted">Kelompok 6</h3>
           </div>
           <div class="row justify-content-lg-center">
               <div class="col-lg-4">
                   <div class="team-member">
                       <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>imgs/img/team/zaldy.jpeg" alt="..." />
                       <h4>Zaldy</h4>
                       <p class="text-muted">Ketua</p>
                       <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/mzaldyfahrezi/"><i class="fab fa-instagram"></i></a>
                       <a class="btn btn-dark btn-social mx-2" href="whatsapp/085214218"><i class="fab fa-whatsapp"></i></a>
                   </div>
               </div>
           </div>

           <div class="row justify-content-center">
               <div class="col-lg-4">
                   <div class="team-member">
                       <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>imgs/img/team/dimas.jfif" alt="..." />
                       <h4>Dimas</h4>
                       <p class="text-muted">Anggota</p>
                       <a class="btn btn-dark btn-social mx-2" href=""><i class="fab fa-instagram"></i></a>
                       <a class="btn btn-dark btn-social mx-2" href="whatsapp/085214218"><i class="fab fa-whatsapp"></i></a>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="team-member">
                       <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>imgs/img/team/ryan.png" alt="..." />
                       <h4>Ryan</h4>
                       <p class="text-muted">Anggota</p>
                       <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ryanferd/"><i class="fab fa-instagram"></i></a>
                       <a class="btn btn-dark btn-social mx-2" href="whatsapp/085214218"><i class="fab fa-whatsapp"></i></a>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="team-member">
                       <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>imgs/img/team/windy.png" alt="..." />
                       <h4>Windy</h4>
                       <p class="text-muted">Anggota</p>
                       <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/windyrh15/"><i class="fab fa-instagram"></i></a>
                       <a class="btn btn-dark btn-social mx-2" href="whatsapp/085214218"><i class="fab fa-whatsapp"></i></a>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-8 mx-auto text-center">
                   <p class="large text-muted">Kami membuat website dengan sepenuh hati agar bisa dinikmati
                       oleh semua orang yang sedang mencari informasi - informasi mengenai Kota / Kabupaten Karawang
                   </p>
               </div>
           </div>
       </div>
   </section>





   <!-- Kritik & Saran-->
   <section class="page-section" id="contact">

       <div class="container">
           <div class="text-center">
               <h2 class="section-heading text-uppercase"><b>Kritik & Saran</b></h2>
               <h3 class="section-subheading text-muted">Beri kami <b>Kritik & Saran</b> untuk membangun web
                   ini<br>menjadi
                   lebih baik lagi.</h3>
           </div>

           <form method="POST" action="<?= base_url('pariwisata/insertDataSaran'); ?>">
               <div class="row align-items-stretch mb-5">
                   <div class="col-md-6">
                       <div class="form-group">
                           <!-- Name input-->
                           <input class="form-control" id="name" name="nama" type="text" placeholder="Nama Kamu *" style="height: 50px;" required />
                       </div>
                       <div class="form-group">
                           <!-- Email address input-->
                           <input class="form-control" id="email" name="email_user" type="email" placeholder="E-mail (ex: petualang@email.com)*" style="height: 50px;" required />
                       </div>
                       <div class="form-group mb-md-0">
                           <!-- Phone number input-->
                           <input class="form-control" id="phone" name="nohp" type="number" placeholder="No. Handphone *" style="height: 50px;" required />
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group form-group-textarea mb-md-0">
                           <!-- Message input-->
                           <textarea class="form-control" id="message" name="pesan" placeholder="Kritik & Saranmu (ex: Wah, websitenya keren!)*" style="height: 180px;" required></textarea>
                       </div>
                   </div>
               </div>

               <!-- Submit Button-->
               <div class="text-center">
                   <button class="btn btn-warning btn-lg text-uppercase text-white" id="submitButton" type="submit" name="submit" onclick="alert('Terima kasih, Kritik & Saranmu akan membangun\nwebsite kami menjadi lebih baik lagi!');">Send
                       Message</button>
               </div>
           </form>
       </div>
   </section>
