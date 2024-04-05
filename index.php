<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #161616;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        .container_form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            outline: 1px solid #2b9962;
            background-color: #161616;
            border-radius: 10px;
            padding: 40px 60px 100px 60px;
            gap: 20px;
            transition: all 4s ease-in-out;


        }

        .container_form:hover {

            animation: shadowMove 16s infinite;
        }

        @keyframes shadowMove {
            0% {
                box-shadow: 0px 10px 100px rgba(0, 255, 127, 0.8);
            }

            5% {
                box-shadow: 0px -150px 200px rgba(0, 255, 127, 0.8);
            }

            10% {
                box-shadow: 0px 400px 400px rgba(0, 255, 127, 0.8);
            }

            15% {
                box-shadow: 100px 150px 300px rgba(0, 255, 127, 0.8);
            }

            20% {
                box-shadow: -300px -200px 200px rgba(0, 255, 127, 0.8);
            }

            25% {
                box-shadow: 0px 150px 500px rgba(0, 255, 127, 0.8);
            }

            30% {
                box-shadow: -300px 250px 300px rgba(0, 255, 127, 0.8);
            }

            35% {
                box-shadow: -100px 350px 500px rgba(0, 255, 127, 0.8);
            }

            40% {
                box-shadow: 150px 0px 300px rgba(0, 255, 127, 0.8);
            }

            45% {
                box-shadow: 400px 250px 400px rgba(0, 255, 127, 0.8);
            }

            50% {
                box-shadow: -100px -150px 300px rgba(0, 255, 127, 0.8);
            }

            55% {
                box-shadow: 150px 300px 200px rgba(0, 255, 127, 0.8);
            }

            60% {
                box-shadow: 0px -150px 600px rgba(0, 255, 127, 0.8);
            }

            65% {
                box-shadow: 0px 350px 400px rgba(0, 255, 127, 0.8);
            }

            70% {
                box-shadow: 300px 0px 500px rgba(0, 255, 127, 0.8);
            }

            75% {
                box-shadow: -300px -200px 200px rgba(0, 255, 127, 0.8);
            }

            80% {
                box-shadow: -300px 150px 500px rgba(0, 255, 127, 0.8);
            }

            85% {
                box-shadow: -100px 200px 200px rgba(0, 255, 127, 0.8);
            }

            90% {
                box-shadow: -100px -200px 400px rgba(0, 255, 127, 0.8);
            }

            95% {
                box-shadow: 250px 300px 600px rgba(0, 255, 127, 0.8);
            }

            100% {
                box-shadow: 0px 10px 100px rgba(0, 255, 127, 0.8);
            }


        }

        .judul {
            line-height: 0px;
        }

        h1 {
            font-size: 60px;
            text-align: center;
            color: #00FF7F;
        }

        p {
            text-align: center;
            font-size: 12px;
            color: white;
            font-weight: 500;
            letter-spacing: 1px;
            font-family: sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            gap:25px;
        }

        .container_input {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .group-input {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            padding-left: 1em;
            border: solid 1px white;



        }

        .input {
            outline: none;
            padding: 9px 0em 9px 1em;
            background-color: transparent;
            color: #d1d1d1;
            letter-spacing: 0.4px;
            font-size: 12px;
            border: none;
            opacity: 0.8;
            font-weight: 500;

        }

        .input::placeholder {
            font-weight: 400;
            opacity: 0.4;
        }

        .remember {
            display: inline-block;
            justify-content: start;
            align-items: center;
            color: white;
            opacity: 0.8;
            font-family: sans-serif;
            font-size: 10px;
            letter-spacing: 1px;
            cursor: pointer;
        }

        .remember:hover {
            color: #00FF7F;
        }

        .remember input {
            margin-right: 10px;
            color: black;
            background-color: rgba(0, 0, 0, 0.08);
            border: solid 0.4px green;
        }


        .submit-button {
            width: 100%;
            color: #00FF7F;
            background-color: transparent;
            font-weight: 600;
            font-size: 14px;
            margin: 0;
            padding: 10px 2em 10px 2em;
            border: 0;
            outline: 1px solid #009e4f;
            border-radius: 6px;
            cursor: pointer;
            transition: all ease-in-out .3s;
        }

        .submit-button:hover {
            transition: all ease-in-out .3s;
            background-color: #009e4f;
            color: #161616;
            cursor: pointer;
        }

        .error-message {
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: gray;
            font-size: 14px;
            color: red;
            font-weight: 500;
            padding: 18px;
            letter-spacing: 0.6px;
            border-radius: 6px;
            color: white;
            z-index: 999;
            display: none;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <section>
        <div class="container_form">
            <div class="judul">
                <h1>Cookie</h1>
                <p>Selamat Datang, Bro</p>
            </div>

            <form action="login.php" method="post" id="loginForm" >
                <div class="container_input">
                    <label for="" class="group-input">
                        <svg fill="none" viewBox="0 0 24 24" height="20" width="24" xmlns="http://www.w3.org/2000/svg"
                            class="icon">
                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="white"
                                d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"></path>
                            <path stroke-linejoin="round" stroke-width="1.5" stroke="white"
                                d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z">
                            </path>
                        </svg>




                        <input type="email" name="email" id="email" placeholder="Email Address" class="input" required>
                    </label>

                     <label for="" class="group-input">
                        <svg fill="none" viewBox="0 0 24 24" height="20" width="24" xmlns="http://www.w3.org/2000/svg"
                            class="icon">
                            <path stroke-linecap="round" stroke-width="1.5" stroke="white"
                                d="M18 11.0041C17.4166 9.91704 16.273 9.15775 14.9519 9.0993C13.477 9.03404 11.9788 9 10.329 9C8.67911 9 7.18091 9.03404 5.70604 9.0993C3.95328 9.17685 2.51295 10.4881 2.27882 12.1618C2.12602 13.2541 2 14.3734 2 15.5134C2 16.6534 2.12602 17.7727 2.27882 18.865C2.51295 20.5387 3.95328 21.8499 5.70604 21.9275C6.42013 21.9591 7.26041 21.9834 8 22">
                            </path>
                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="white"
                                d="M6 9V6.5C6 4.01472 8.01472 2 10.5 2C12.9853 2 15 4.01472 15 6.5V9"></path>
                            <path fill="white"
                                d="M21.2046 15.1045L20.6242 15.6956V15.6956L21.2046 15.1045ZM21.4196 16.4767C21.7461 16.7972 22.2706 16.7924 22.5911 16.466C22.9116 16.1395 22.9068 15.615 22.5804 15.2945L21.4196 16.4767ZM18.0228 15.1045L17.4424 14.5134V14.5134L18.0228 15.1045ZM18.2379 18.0387C18.5643 18.3593 19.0888 18.3545 19.4094 18.028C19.7299 17.7016 19.7251 17.1771 19.3987 16.8565L18.2379 18.0387ZM14.2603 20.7619C13.7039 21.3082 12.7957 21.3082 12.2394 20.7619L11.0786 21.9441C12.2794 23.1232 14.2202 23.1232 15.4211 21.9441L14.2603 20.7619ZM12.2394 20.7619C11.6914 20.2239 11.6914 19.358 12.2394 18.82L11.0786 17.6378C9.86927 18.8252 9.86927 20.7567 11.0786 21.9441L12.2394 20.7619ZM12.2394 18.82C12.7957 18.2737 13.7039 18.2737 14.2603 18.82L15.4211 17.6378C14.2202 16.4587 12.2794 16.4587 11.0786 17.6378L12.2394 18.82ZM14.2603 18.82C14.8082 19.358 14.8082 20.2239 14.2603 20.7619L15.4211 21.9441C16.6304 20.7567 16.6304 18.8252 15.4211 17.6378L14.2603 18.82ZM20.6242 15.6956L21.4196 16.4767L22.5804 15.2945L21.785 14.5134L20.6242 15.6956ZM15.4211 18.82L17.8078 16.4767L16.647 15.2944L14.2603 17.6377L15.4211 18.82ZM17.8078 16.4767L18.6032 15.6956L17.4424 14.5134L16.647 15.2945L17.8078 16.4767ZM16.647 16.4767L18.2379 18.0387L19.3987 16.8565L17.8078 15.2945L16.647 16.4767ZM21.785 14.5134C21.4266 14.1616 21.0998 13.8383 20.7993 13.6131C20.4791 13.3732 20.096 13.1716 19.6137 13.1716V14.8284C19.6145 14.8284 19.619 14.8273 19.6395 14.8357C19.6663 14.8466 19.7183 14.8735 19.806 14.9391C19.9969 15.0822 20.2326 15.3112 20.6242 15.6956L21.785 14.5134ZM18.6032 15.6956C18.9948 15.3112 19.2305 15.0822 19.4215 14.9391C19.5091 14.8735 19.5611 14.8466 19.5879 14.8357C19.6084 14.8273 19.6129 14.8284 19.6137 14.8284V13.1716C19.1314 13.1716 18.7483 13.3732 18.4281 13.6131C18.1276 13.8383 17.8008 14.1616 17.4424 14.5134L18.6032 15.6956Z">
                            </path>
                        </svg>




                        <input type="password" name="password" id="password" placeholder="Password" class="input" required>
                    </label>

                    <label class="remember"><input type="checkbox" name="remember" id="remember"/>Remember Me</label>

                </div>

                <button class="submit-button" type="submit" value="Login">
                    Login
                </button>

            </form>


        </div>

    </section>
    <div id="errorPopup" class="error-message"></div>




<script>
    $(document).ready(function(){
        $('#loginForm').submit(function(event){
            event.preventDefault();
            var email = $('#email').val();
            var password = $('#password').val();
            var remember = $('#remember').is(':checked');
            if (!isValidEmail(email)) {
                showError('Invalid email address');
                return;
            }
            if (!isValidPassword(password)) {
                showError('Invalid password');
                return;
            }

            // AJAX login
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: {email: email, password: password, remember: remember},
                success: function(response){
                    if(response.trim() == 'success'){
                        window.location.href = 'profile.php';
                    } else {
                        showError(response);
                    }
                }
            });
        });

        function isValidEmail(email) {
            return /\S+@\S+\.\S+/.test(email);
        }

        function isValidPassword(password) {
            return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password);
        }

        function showError(message) {
            var errorPopup = document.getElementById('errorPopup');
            errorPopup.textContent = message;
            errorPopup.style.display = 'flex';
            setTimeout(function(){ errorPopup.style.display = 'none'; }, 3000);
        }


    });
    </script>
</body>
</html>
