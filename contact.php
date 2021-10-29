<?php include 'Inc/header.php' ?>


    <div class="page-title-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="las la-envelope"></i>
                        </div>
                        <h3>Email Here</h3>
                        <p><a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#b1d9d4dddddef1c7d8cbde9fd2dedc"><span
                                    class="__cf_email__"
                                    data-cfemail="264e434a4a4966504f5c490845494b">[email&#160;protected]</span></a></p>
                        <p><a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#3b484e4b4b54494f7b4d52415415585456"><span
                                    class="__cf_email__"
                                    data-cfemail="14676164647b666054627d6e7b3a777b79">[email&#160;protected]</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="las la-map-marker"></i>
                        </div>
                        <h3>Location Here</h3>
                        <p><a href="https://www.google.com/maps/@24.9045273,91.8523559,15z" target="_blank">2750 Quadra
                                Street Victoria Road, New York, Canada</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="las la-phone"></i>
                        </div>
                        <h3>Call Here</h3>
                        <p><a href="tel:1234567890">+123 456 7890</a></p>
                        <p><a href="tel:2414524526">+241 452 4526</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Message for any Query</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Email*</label>
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Phone*</label>
                                <input type="text" name="phone_number" id="phone_number" required
                                    data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Your Subject*</label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                    data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Your Message*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                    data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                Send Message
                                <span></span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include 'Inc/footer.php' ?>
