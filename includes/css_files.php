<link rel="icon" type="image/x-icon" href="assets\images\tourintown.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="tour_town">
<meta name="author" content="tour">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
    var check = function() {
  if (document.getElementById('account_password').value == document.getElementById('repassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
    // document.getElementById('submit').style.color = 'rgb(17,97,238)';
    document.getElementById('submit').disabled = false;
    // document.getElementById('submit').text.color = '';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    document.getElementById('submit').disabled = true;
    // document.getElementById('submit').style.color = 'rgb(135,206,235)';
  }
}
</script>
<!-- <script>
var send_opt = function(){
        if (document.getElementById('user').value.length == 0 && document.getElementById('email').value.length == 0){
            document.getElementById('otp').disabled = false; 
        } else {
            document.getElementById('otp_message').innerHTML = 'Enter OTP that we have sent to you.';
        }
    }
</script> -->
<style> 
@media (max-width:780px){
.size {
  height: 459px;
}
.hide {
  display: none;
}
}
/* @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

 * {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box
} */

/* body {
    font-family: 'Montserrat', sans-serif;
    background: url(https://i.imgur.com/3Ad4Atf.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh
} */

/* nav1 {
    position: fixed;
    width: 60px;
    margin-top: 150px;
    transition: all 0.3s linear;
    box-shadow: 2px 2px 8px 0px rgba(0, 0, 0, .4)
    
}

nav1 ul {
    margin-top: 0;
    margin-bottom: 0rem
}

nav1 li {
    height: 45px;
    position: relative
}

nav1 li a {
    color: #fff !important;
    display: block;
    height: 100%;
    width: 100%;
    line-height: 45px;
    padding-left: 25%;
    border-bottom: 1px solid rgba(0, 0, 0, .4);
    transition: all .3s linear;
    text-decoration: none !important
}

nav1 li:nth-child(1) a {
    background: #4267B2
}

nav1 li:nth-child(2) a {
    background: #1DA1F2
}

nav1 li:nth-child(3) a {
    background: #E1306C
}

nav1 li:nth-child(4) a {
    background: #2867B2
}

nav1 li:nth-child(5) a {
    background: #333
}

nav1 li:nth-child(6) a {
    background: #ff0000
}

nav1 li a i {
    position: absolute;
    top: 14px;
    left: 24px;
    font-size: 15px
}

ul li a span {
    display: none;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase
}

a:hover {
    z-index: 1;
    width: 200px;
    border-bottom: 1px solid rgba(0, 0, 0, .5);
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3)
}

ul li:hover a span {
    padding-left: 30%;
    display: block;
    font-size: 15px
}*/



</style> 