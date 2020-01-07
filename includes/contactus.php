<?php
    include "header.php";
?>

<section class="contactus">
    <div class="cont-banner">
        <div class="banner"></div>
             <h2>Contact Us</h2>
        </div>
    <section class="contact-sec">
        <h2 class="query text-center">FOR QUICK QUERY & SERVICE, CALL @ 1234567895 || 123654789</h2>
        <div class="wrapper">
            <h2>Contact Us</h2>
            <form action="" method="post">
                <div class="input-field">
                    <input type="text" required="required">
                    <label for="">Full Name</label>
                </div>
                <div class="input-field">
                    <input type="email" required="required">
                    <label for="">Email</label>
                </div>
                <div class="input-field">
                    <input type="text" required="required" >
                    <label for="">Subject</label>
                </div>
                <div class="input-field">
                    <input type="tel" required="required" >
                    <label for="">Mobile</label>
                </div>
                <div class="input-field">
                    <textarea row=3 required="required"></textarea>
                    <label for="">Message</label>
                </div>
                <input type="submit" value="Submit" class="sbtn">
            </form>
        </div>
    </section> 
    <section class="touch-sec">
        <div class="container">
            <div class="head headng">
                <h1>get in touch</h1>
            </div>
            <div class="row bd">
                <div class="col-sm-4 bd">
                    <span class="flaticon-phone-call"></span>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i>
                    9987702204, 02249716051
                    </p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i>
                    Helpline No: 9987702204
                    </p>
                </div>
                <div class="col-sm-4">
                    <span class="flaticon-email"></span>
                </div>
                <div class="col-sm-4">
                    <span class="flaticon-earth"></span>
                </div>
            </div>
        </div>
    </section>
</section>
        

<?php
    include "footer.php";
?>