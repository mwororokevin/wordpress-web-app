<?php
/**
 * Template part for displaying the login section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uon
 */

?>

<div id="left">
    <div class="left_articles">
        <B>
            <font color='red'>Training Towards Online Classes 2020</font>
            <p>In preparation for Online Teaching and Learning scheduled to commence on Monday, 21st September 2020;
                All students are invited to participate in the Student Online Sensitization Programme from Monday,
                7th September 2020- Friday, 18th September 2020 at 9:30am.
            </p>
            <p>Please click to the link below for more information:</p>
            <p><a href='https://uonbi.ac.ke/online-learning'>THE LINK.</a></p>
            <div class='smis_form'>
                <form action="/course_registration.php" name="studentLogon" enctype="multipart/form-data" method="post">
                    <fieldset>
                        Log on using the Registration Number. <i>The year of registration must be in full eg ../2009
                        </i><br /><br /><label> Registration Number:</label>
                        <input type="text" name="regNo" size="20" value="" />
                        <i>Type your Student Registration Number</i>
                        <br /><br />
                        <label> Password:</label>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="smisPass"
                            size="20" /> <i>Use your National ID / Passport No. or KCSE Index No. or Registered Mobile
                            No. as your initial password</i>
                        <br /><br /><label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"
                            name="smisLogon" class="button" value="Login" /> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="forgot_password.php">
                            <h4>Forgot your password?</h4>
                        </a> <label></label>
                    </fieldset>
                </form>
            </div>
            <div><b>Note: Digits and Letters in your Registration Number.</b>
                <ol>
                    <li><b>Digit</b> 0 (Zero) and <b>NOT</b> letter O in C01/..</li>
                    <li><b>Letter</b> I and <b>NOT</b> Digit 1 (One) in I20/..</li>
                </ol>
            </div>
            <div class='smis_form'>
                <form action="index.php" name="studentPassRequest" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <legend><a title='Student Management Information System'>SMIS Allocated Registration No</a>
                        </legend>
                        <b>New Students</b><br /> Enter Application Ref. No as it appear in your <b><i>Letter of Offer
                            </i></b> &nbsp;to get your allocated <b>
                            <i> Student Registration No </i></b> <br /><label> Application Ref. No:</label><input
                            type="text" name="refNo" size="20" value="" />
                        <label></label> <input type="submit" name="regNoRequestBtn" class="button"
                            value="Get Allocated Registration No" />
                    </fieldset>
                </form>
            </div>
    </div>
</div>
