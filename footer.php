
    <!-- footer  -->
      <section data-aos="fade-up" id="footer" >
        <!-- Top Footer -->
        <div class="container footertop">
          <div class="row">
            <div class="col-sm-3 web ">
              <!-- webiste area -->
              <h3>RO Solution</h3>
              <p id="add">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid incidunt iusto at adipisci in obcaecati ducimus! Placeat recusandae sint ut, quos minima nam repellat dicta. Officiis nobis distincti</p>
              <a href="#introduction" class="detail-btn">Read More</a>
            </div>
            <div class="col-sm-2 svr ">
              <!-- services area -->
              <h3>Services</h3>
              <ul>
                <li>AMC</li>
                <li>Service</li>
                <li>Spare Parts</li>
                <li>Free Demo</li>
                <li>Online Complaint</li>
                <li>Online Enquiry</li>
                <li>Clients</li>
                <li>Contact Us</li>
                <li>Branches</li>
                <li>Online Payment</li>
              </ul>
            </div>
            <div class="col-sm-2 prod " >
              <!-- Product area -->
              <h3>Products</h3>
              <ul>
                <li>Aqua Fresh RO</li>
                <li>Aqua Grand RO</li>
                <li>Krona RO</li>
                <li>Kent RO</li>
                <li>Tata Swach RO</li>
                <li>Nasaka RO</li>
              </ul>

            </div>
            <div class="temp col-sm-4  temp" >
              <!-- Contact Area -->
                <div class="contact-section">
                 <form action="newsBackend.php" method="POST">
                   <h3>join our newsletter</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat earum laborum, cumque sed quam nam dolorum vel sunt corporis accusamus.</p>
                   <div class="email-box">
                     <i class="fa fa-envelope"></i>
                     <input class="tbox" name="email" type="email" placeholder="Enter Your Email">
                     <button class="sbtn" type="submit" name="button">Subscribe</button>
                   </div>
                 </form>
                </div>
            </div>

          <!-- end of top footer -->

          <!-- middle footer -->
          <br>
          <div class="continer-fluid footer">
            <div class="row">
              <div class="col-sm-4">
                <div class="addr">
                  <!-- address area -->
                  <h3>Address</h3>
                  <p>Room No- 14, Building no- 12, B Type Building, Opposite Vashi Plaza, Mumbai - 400703.</p>
                </div>
                <div class="contact">
                    <i class="fa fa-phone" >&nbsp; Helpline No: +91-9029292969</i><br>
                    <i class="fa fa-phone" >&nbsp; +91-9029292969</i><br>
                    <i class="fa fa-phone" >&nbsp; 9029292969</i>
                    <br>
                    <i class="fa fa-envelope" >&nbsp; makshaikh00@gmail.com</i><br>
                    <i class="fa fa-globe">&nbsp; www.rosolution.com</i>

                </div>

              </div>
              <div class="col-sm-5 ">
                <!-- social links area -->
                <h3>Social </h3>
                <div class="links">
                  <ul>
                    <li><a href="#"class =""><i class="fa fa-whatsapp" ></i></a></li>
                    <li><a href="#"class =""><i class="fa fa-facebook" ></i></a></li>
                    <li><a href="#"class =""><i class="fa fa-twitter" ></i></a></li>
                    <li><a href="#"class =""><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"class =""><i class="fa fa-google-plus" ></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3 ">
                <!-- payment area -->
                <h3 id="pay">Pay Now </h3><br>
                <img id="visa" src="img/payment/pay.png" alt="visa"><br>
                <img id="visa" src="img/payment/paytm.png" alt="visa"><br>
              </div>
            </div>
          </div>
        </div>
        <!--footer bottom -->
        <div class="bfooter">
          <h5>RO Solution Copyright &copy; <script>document.write(new Date().getFullYear());</script>, All Rights Reserved </h5>
        </div>
      </section>
    <!-- End of footer -->
    <!-- counter -->
      <script src="js/jquery.counterup.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="js/main.js"></script>
    <!-- card slider -->
    <script src="js/swiper.min.js"></script>
        <script>
          var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
              rotate: 20,
              stretch: 0,
              depth: 400,
              modifier: 1,
              slideShadows : true,
            },
            pagination: {
              el: '.swiper-pagination',
            },
          });
        </script>
  </div>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 2000,
    });
  </script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->

   
</body>
</html>
