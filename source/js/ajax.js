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
                            alert("Sõnum saadetud!\n" + "Võtame teiega peagi ühendust.");

                        },
                        error: function (data) {
                            alert("Midagi läks valesti  " + data.msg);
                        }
                    });

                }
            });
