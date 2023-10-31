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

</script>
<script>
    let btn = document.getElementById('submitBtn');
    let btn2 = document.getElementById('submit-popup-close');
    let btn3 = document.getElementById('submit-popup-ok');
    let btn4 = document.getElementById('backBtn');

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
    btn4.addEventListener('click', () => {
        window.location.href = "/lander"
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script>

    const input = document.querySelector("#mobile_code");
    const intl = window.intlTelInput(input, {
        initialCountry: "auto",
        separateDialCode: true,
        geoIpLookup: function(callback) {
            fetch("https://ipapi.co/json")
            .then(response => response.json())
            .then(data => callback(data.country_code))
            .catch(() => callback("us"));
        },
        utilsScript: "/intl-tel-input/js/utils.js?1695806485509" // just for formatting/placeholders etc
    });

    // Using jQuery to bind the countrychange event
    $("#mobile_code").on("countrychange", function() {
        const countryCode = $('.iti__selected-dial-code')[0].innerHTML;
        $('#countryCode').val(countryCode.replace("+", ""));
        $('#countryName').val(intl.getSelectedCountryData().name);
    });

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
</body>
</html>