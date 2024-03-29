<?php
    $GLOBALS['js_load'][] = 'jqBootstrapValidation.js';
    $GLOBALS['js_load'][] = 'contact.js';
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact
                <!-- <small>Subheading</small> -->
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?>
                </li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-8">
            <h3>Send us a Message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group row">
                    <div class="controls">
                        <div class="col-md-6">
                            <label>First Name:</label>
                            <input type="text" class="form-control" id="fname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-6">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" id="lname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Subject:</label>
                        <select class="form-control" id="subject" required data-validation-required-message="Please select a subject.">
                            <option value="" disabled selected>--Please select a subject--</option>
                            <option value="join">I'm interested in joining</option>
                            <option value="question">I have a question about the group</option>
                            <option value="suggestion">I have a suggestion for the group</option>
                        </select>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                9201 University City Blvd<br>Charlotte, NC 28223<br>
            </p>
            <p><i class="fa fa-phone"></i> 
                <abbr title="Phone">P</abbr>: 704.123.4567</p>
            <p><i class="fa fa-envelope-o"></i> 
                <abbr title="Email">E</abbr>: <a href="mailto:contact@ochl.org">contact@ochl.org</a>
            </p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
