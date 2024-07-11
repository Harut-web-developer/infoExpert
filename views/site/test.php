<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Show Password Strength | CodingLab </title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        .asa{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container_{
            position: relative;
            max-width: 460px;
            width: 100%;
            background: #fff;
            border-radius: 4px;
            padding: 30px;
            margin: 0 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }
        .container_ .input-box{
            position: relative;
        }
        .input-box .show_hide{
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #A6A6A6;
            padding: 5px;
            cursor: pointer;
        }
        .input-box input{
            height: 60px;
            width: 100%;
            border: 2px solid #d3d3d3;
            border-radius: 4px;
            font-size: 18px;
            font-weight: 500;
            color: #333;
            outline: none;
            padding: 0 50px 0 16px;
        }
        .container_ .requirements{
            display: none;
            margin-top: 14px;
            font-size: 14px;
            color: #FF6333;
        }
        .container_ .requirements.active{
            display: block;
        }
        .container_ .indicator{
            display: none;
        }
        .container_ .indicator.active{
            display: block;
            margin-top: 14px;
        }
        .indicator .icon-text{
            display: flex;
            align-items: center;
        }
        .icon-text .error_icon{
            margin-right: 8px;
        }
        .icon-text .text{
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
<div class="asa">
    <div class="container_">
        <div class="input-box">
            <i class="fas fa-eye-slash show_hide"></i>
            <input spellcheck="false" type="password" placeholder="Enter password">
        </div>
        <div class="requirements">
            <p>Password must include:</p>
            <ul>
                <li class="uppercase">Uppercase letters</li>
                <li class="lowercase">Lowercase letters</li>
                <li class="numbers">Numbers</li>
                <li class="symbol">Symbols</li>
                <li class="charactersSize">Minimum 8 characters</li>
            </ul>
        </div>
        <div class="indicator">
            <div class="icon-text">
                <i class="fas fa-exclamation-circle error_icon"></i>
                <h6 class="text"></h6>
            </div>
        </div>
    </div>
</div>

<script>
    const input = document.querySelector(".input-box input"),
        showHide = document.querySelector(".show_hide"),
        requirements = document.querySelector(".requirements"),
        indicator = document.querySelector(".indicator"),
        iconText = document.querySelector(".icon-text"),
        text = document.querySelector(".text"),
        uppercase_ = document.querySelector(".uppercase"),
        lowercase_ = document.querySelector(".lowercase"),
        numbers_ = document.querySelector(".numbers"),
        symbols_ = document.querySelector(".symbol");
        passwordMustInclude = document.querySelector(".requirements p");
        charactersSize_ = document.querySelector(".charactersSize");

    showHide.addEventListener("click", ()=>{
        if(input.type === "password"){
            input.type = "text";
            showHide.classList.replace("fa-eye-slash","fa-eye");
        }else {
            input.type = "password";
            showHide.classList.replace("fa-eye","fa-eye-slash");
        }
    });

    let uppercase = /[A-Z]/,
        lowercase = /[a-z]/,
        numbers = /[0-9]/,
        symbols = /[!,@,#,$,%,^,&,*,?,_,(,),-,+,=,~]/,
        charactersSize = 8;

    input.addEventListener("focus", ()=>{
        requirements.classList.add("active");
    });

    input.addEventListener("blur", ()=>{
        requirements.classList.remove("active");
    });

    input.addEventListener("keyup", ()=>{
        indicator.classList.add("active");
        let val = input.value;
        if(val.match(uppercase) && val.match(lowercase) && val.match(numbers) && val.match(symbols) && val.length >= charactersSize){
            text.textContent = "Password is strong";
            input.style.borderColor = "#22C32A";
            showHide.style.color = "#22C32A";
            iconText.style.color = "#22C32A";
            uppercase_.style.color = "#22C32A";
            lowercase_.style.color = "#22C32A";
            numbers_.style.color = "#22C32A";
            symbols_.style.color = "#22C32A";
            charactersSize_.style.color = "#22C32A";
            passwordMustInclude.style.color = "#22C32A";
        } else if(val.match(uppercase) && val.match(lowercase) && val.match(numbers) && val.length >= 6){
            text.textContent = "Password is medium";
            input.style.borderColor = "#cc8500";
            showHide.style.color = "#cc8500";
            iconText.style.color = "#cc8500";
            if (val.match(uppercase)) {
                uppercase_.style.color = "#22C32A";
            } else {
                uppercase_.style.color = "#FF6333";
            }
            if (val.match(lowercase)) {
                lowercase_.style.color = "#22C32A";
            } else {
                lowercase_.style.color = "#FF6333";
            }
            if (val.match(numbers)) {
                numbers_.style.color = "#22C32A";
            } else {
                numbers_.style.color = "#FF6333";
            }
            if (val.match(symbols)) {
                symbols_.style.color = "#22C32A";
            } else {
                symbols_.style.color = "#FF6333";
            }
            if (val.length >= 8) {
                charactersSize_.style.color = "#22C32A";
            } else {
                charactersSize_.style.color = "#FF6333";
            }
        } else {
            text.textContent = "Password is weak";
            input.style.borderColor = "#FF6333";
            showHide.style.color = "#FF6333";
            iconText.style.color = "#FF6333";
            if (val.match(uppercase)) {
                uppercase_.style.color = "#22C32A";
            } else {
                uppercase_.style.color = "#FF6333";
            }
            if (val.match(lowercase)) {
                lowercase_.style.color = "#22C32A";
            } else {
                lowercase_.style.color = "#FF6333";
            }
            if (val.match(numbers)) {
                numbers_.style.color = "#22C32A";
            } else {
                numbers_.style.color = "#FF6333";
            }
            if (val.match(symbols)) {
                symbols_.style.color = "#22C32A";
            } else {
                symbols_.style.color = "#FF6333";
            }
        }

        if(val === ""){
            indicator.classList.remove("active");
            input.style.borderColor = "#A6A6A6";
            showHide.style.color = "#A6A6A6";
            iconText.style.color = "#A6A6A6";
            uppercase_.style.color = "#FF6333";
            lowercase_.style.color = "#FF6333";
            numbers_.style.color = "#FF6333";
            symbols_.style.color = "#FF6333";
        }
    });

</script>
</body>
</html>
