<footer>
    <div class="container">
        <ul class="footer-nav">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="privacy.php" id="privacy-policy" target="_blank">Privacy Policy</a>
            </li>
            <li>
                <a href="terms.php" id="terms" target="_blank">Terms</a>
            </li>
            <li>
                <a href="earnings.php" id="earnings-disclaimer" target="_blank">Earnings Disclaimer</a>
            </li>
            <li>
                <a href="spam.php" id="spam-policy" target="_blank">Spam Policy</a>
            </li>
            <li>
                <a href="/#formTop" id="contact" target="_blank">Contact Us</a>
            </li>
        </ul>
        <a class="footer-logo" href="#"><img alt="" src="img/1logod41d.png"></a>
    </div>
</footer>
<div id="submit-popup">
    <span id="submit-popup-close">&#x2715;</span>
    <!-- <p>Insert your pixel code and script here.</p> -->
	<?php if ( false !== strpos( $msg, 'Error' ) ): ?>
        <h2><?= $msg; ?></h2>
	<?php else: ?>
        <div class="check-box">
            ✓
        </div>
        <h2>Thanks for filling up the form!</h2>
        <p>Your details has been successfully submitted. Thank you!</p>
	<?php endif; ?>
    <a id="submit-popup-ok" href="#">OK</a>

</div>
<script type="text/javascript">
    var btntext = 'GET STARTED NOW';
    var pagename = 'en';
</script>
<script src="js/algo-video.js">
</script>
<script src="js/jquery.countdown.min.js">
</script>
<script src="js/site5c38.js">
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js'></script>
<script>
    function generatePassword() {
        var length = 8,
            charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
            retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }
        return retVal;
    }

    document.addEventListener('build', function () {
        if (btntext !== undefined) {
            jQuery('button.btn.btn-danger.btn-lg.tradeBtn').text(btntext);
        }
        /* jQuery('.caffForm .col-md-6').each(function(i, obj) {
             $(this).removeClass('col-md-6').addClass('col-md-12');
         });*/
        jQuery('input.form-control.bfh-password').css({'display': 'none'}).attr('value', generatePassword());
    })

</script>
<script src="https://unpkg.com/vue">
</script>
<script src='js/form.js'>
</script>
<style>
    html {
        scroll-behavior: smooth;
    }

    .form-group, .col-md-6.form-group {
        width: 100%;
        max-width: 100%;
        flex: 0 0 100%;
        margin-bottom: 10px;
    }

    #form > button {
        width: calc(100% - 30px);
        margin: 0 auto;
        display: block;
    }

    form .row {
        margin: 0 !important;
        padding: 0 !important
    }

    label.control-label, #gaff > form > div:nth-child(11) > div:nth-child(1) {
        display: none;
    }

    /*.form-side .fw-body .form-group { margin-bottom:10px!important; }
    #form > div:nth-child(10) { display:flex;justify-content:space-between; }
    #form > div:nth-child(10) > div:nth-child(1) { padding-right:5px; }
    #form > div:nth-child(10) > div:nth-child(2) { padding-left:5px; }*/
    .form-control {
        border: 2px solid #dfdfdf !important;
        padding: 0px !important;
        margin-bottom: 0px;
        text-indent: 10px;
        width: 100%;
    }

    #form > div:nth-child(12) > div:nth-child(1) {
        margin-bottom: 0;
    }

    .checkbox {
        margin-bottom: 10px;
        display: none
    }

    .checkbox a {
        position: relative;
        left: 5px;
        top: -2px;
        font-size: 13px;
    }

    .valid {
        border: 1px solid green;
        background-color: white !important;
    }

    .notvalid {
        border: 1px solid red !important;
    }

    .notvalidphone {
        background-color: rgb(253, 164, 164) !important;
        border: 1px solid red !important;
    }

    .initial {
        border: 1px solid gray !important;
    }

    .form-control {
        background-image: url('') !important;
    }
</style>
<style type="text/css">
    label {
        display: none;
    }

    .form-body {
        padding: 20px;
    }
</style>
<script>

    var disable_form_submit = function () {

        var contactNameField = '.required-contact-field';

        $(contactNameField).keyup(function () {
            var empty = false;
            $(contactNameField).each(function () {
                if ($(this).val() == '') {
                    empty = true;
                }
            });
            if (empty) {
                $('#submitBtn').attr('disabled', 'disabled');
            } else {
                $('#submitBtn').removeAttr('disabled').addClass('button--primary');

            }
        });
    };

    $(disable_form_submit);

    // $("#submitBtn").click(
    // 	function(){
    // 		$("#submit-popup").css("dispaly","block");
    // 	}
    // )


    // let fname = document.getElementById('firstName').value;
    // let lname = document.getElementById('lastName').value;
    // let email = document.getElementById('email').value;
    // let phone = document.getElementById('phoneFiled').value;
    // let con_code = document.getElementById('countrycode').value;


    // // 000
    // if (fname !== '' && lname !== '' && email !== '' && phone !== '' && con_code !== '000') {
    // 	document.getElementById('submitBtn').classList.remove("disabled")
    // }else{
    // 	document.getElementById('submitBtn').classList.add("disabled")
    // }

</script>
<script>
    let btn = document.getElementById('submitBtn');
    let btn2 = document.getElementById('submit-popup-close');
    let btn3 = document.getElementById('submit-popup-ok');
	<?php if(! empty( $msg )):?>
    $('#submit-popup').show();
    $('body').addClass('popup');
	<?php endif; ?>
    btn2.addEventListener('click', () => {
        document.getElementById('submit-popup').style.display = 'none';
        document.body.classList.remove("popup");
    })
    btn3.addEventListener('click', () => {
        document.getElementById('submit-popup').style.display = 'none';
        document.body.classList.remove("popup");
    })
    // $(document).on('submit', 'form.caffForm', function (e) {
    //     e.preventDefault();
    //     let $form = $(this),
    //         serializedData = $form.serialize();
    //     console.log(serializedData)
    //     let request = $.ajax({
    //         url: "sendLead.php",
    //         type: "post",
    //         data: serializedData
    //     });
    //     request.done(function (response) {
    //         // fbq('track', 'Lead');
    //         $('#submit-popup').show();
    //         $('body').addClass('popup');
    //     });
    // });
</script>
<script>
    $("#mobile_code").intlTelInput({
        initialCountry: "US",
        separateDialCode: true,
        // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });
</script>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>

</body>
</html>