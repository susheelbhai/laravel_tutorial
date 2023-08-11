<x-user.layout.app>

<!-- #page-title -->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- .title -->
                <div class="title pull-left">
                    <h1>Contact Us</h1>
                </div> <!-- /.title -->
                <!-- .page-breadcumb -->
                <div class="page-breadcumb pull-right">
                    <i class="fa fa-home"></i> <a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <span>Contact Us</span>
                </div> <!-- /.page-breadcumb -->
            </div>
        </div>
    </div>
</section> <!-- /#page-title -->

<!-- #contact-content -->
<section id="contact-content">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Feel Free to Drop Us A Line To Contact Us</h1>
                    <p>You can talk to our online representative at any time. Please use our Live Chat System on our website or Fill up below instant messaging programs. <br>Please be patient, We will get back to you. Our 24/7 Support, General Inquireies Phone: + 0987 654 321</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">

                <x-user.form.form1 :action="route('contact')">
                    <x-user.form.text-input name="name" label="Name" />
                    <x-user.form.text-input name="phone" label="Phone" />
                    <x-user.form.text-input type="email" name="email" label="Email" />
                </x-user.form.text-input>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact-info">
                <ul>
                    <li>
                        <div class="icon-box">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text-box">
                            <p>ConstructPrss, 598, Mallin Street <br>New Youk, NY 100 654</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text-box">
                            <p>info@constructpress.com <br>support@constructpress.com</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text-box">
                            <p>+ 1800 6534 987 <br>+ 6524 654 8789</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> <!-- /#contact-content -->


<section id="great-construct-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Great Construction Company</h2>
                <p>If you have any construction and renovation work  need, simply <br>call our 24 hour emergecny number.</p>
                <p class="has-btn"><b>01865 524 8503</b> or <a href="#" class="hvr-bounce-to-right">Contact Us</a></p>
            </div>
        </div>
    </div>
</section>
</x-user.layout.app>