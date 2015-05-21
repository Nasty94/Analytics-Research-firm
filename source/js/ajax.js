            $(document).ready(function () {
                $('#contactform').submit(function (event) {

                    sendContactForm();

                    return false;

                });


                function sendContactForm() {
                    $.ajax({
                        type: "POST",
                        url: 'ajaxphp.php',
                        data: $("#contactform").serialize(),

                        success: function (errorMessage) {
                            document.getElementById("contactform").reset();
                            alert("S%EF%BF%BDnum saadetud!\n" + "V&#245;tame teiega peagi &#252;hendust.");

                        },
                        error: function (data) {
                            alert("Midagi l&#228;ks valesti  " + data.msg);
                        }
                    });

                }
            });
