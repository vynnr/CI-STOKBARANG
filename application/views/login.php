<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi Stok Barang</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>
        body {
            font-family: Roboto;
            color: #4d4d4d;
            background: #212936;
        }

        .jumbotron {
            background: rgba(100%, 100%, 100%, 0.1);
            color: #555;
        }

        .jumbotron label {
            color: #fff;
        }

        .login {
            width: 100px;
            height: 100px;
        }

        .btn-warning {
            background: #b307b3;
            border-color: #b307b3;
        }

        .btn-warning:hover {
            background: #cf1ecf;
            border-color: #cf1ecf;
        }

        .error-message {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center mt-5 mb-3">
                <img src="<?= base_url('assets/img/login.png'); ?>" class="login" />
                <h3 class="text-white mt-2">Aplikasi Stok Barang</h3>
<br><center><p>Repost by <a href='https://github.com/vynnr' title='https://github.com/vynnr' target='_blank'>VYNNR</a></p></center>

                <?php
                if ($this->session->flashdata('alert')) {
                    echo '<div class="col-md-4 offset-md-4 mt-2"><div class="alert alert-danger" role="alert">
                    ' . $this->session->flashdata('alert') . '
                  </div></div>';
                }
                ?>

            </div>
            <div class="col-md-4 col-sm-12 offset-md-4">
                <div class="jumbotron py-3 pt-4">
                    <?= form_open(); ?>

                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i> Username</label>
                        <input type="text" class="form-control form-control-sm <?= (form_error('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('username', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="form-control form-control-sm <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" autocomplete="off" name="password">
                        <div class="invalid-feedback">
                            <?= form_error('password', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group float-right">
                        <button type="submit" name="submit" value="submit" class="btn btn-warning text-white btn-sm">Sign In <i class="fa fa-sign-in"></i></button>
                    </div>

                    <div class="clearfix"></div>
                    <?= form_close(); ?>
                </div>
                <p class="text-white text-center">Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved
                </p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
<style type='text/css'>

#outerCircleText {

font-style: italic;

font-weight: bold;

font-family: &#39;comic sans ms&#39;, verdana, arial;

color: #ffc0cb;


position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}

#outerCircleText div {position: relative;}

#outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}


</style>

<script type='text/javascript'>

//<![CDATA[

;(function(){

// Pesan agan disini.

var msg = "Harap masukan ID dan Password yang benar by vynnr";

var size = 25;

var circleY = 0.75; var circleX = 2;

var letter_spacing = 5;

var diameter = 10;

var rotation = 0.2;

var speed = 0.3;



if (!window.addEventListener && !window.attachEvent || !document.createElement) return;


msg = msg.split('');

var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,

ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],

o = document.createElement('div'), oi = document.createElement('div'),

b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement :




document.body,

mouse = function(e){

e = e || window.event;

ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position

xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position

},




makecircle = function(){ // rotation/positioning

if(init.nopy){

o.style.top = (b || document.body).scrollTop + 'px';

o.style.left = (b || document.body).scrollLeft + 'px';

};

currStep -= rotation;

for (var d, i = n; i > -1; --i){ // makes the circle

d = document.getElementById('iemsg' + i).style;

d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) +


'px';

d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';

};

},


drag = function(){ // makes the resistance

y[0] = Y[0] += (ymouse - Y[0]) * speed;

x[0] = X[0] += (xmouse - 20 - X[0]) * speed;

for (var i = n; i > 0; --i){

y[i] = Y[i] += (y[i-1] - Y[i]) * speed;

x[i] = X[i] += (x[i-1] - X[i]) * speed;

};

makecircle();

},


init = function(){ // appends message divs, & sets initial values for positioning arrays

if(!isNaN(window.pageYOffset)){

ymouse += window.pageYOffset;

xmouse += window.pageXOffset;

} else init.nopy = true;

for (var d, i = n; i > -1; --i){

d = document.createElement('div'); d.id = 'iemsg' + i;

d.style.height = d.style.width = a + 'px';

d.appendChild(document.createTextNode(msg[i]));

oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;

};

o.appendChild(oi); document.body.appendChild(o);

setInterval(drag, 25);

},


ascroll = function(){

ymouse += window.pageYOffset;

xmouse += window.pageXOffset;

window.removeEventListener('scroll', ascroll, false);

};


o.id = 'outerCircleText'; o.style.fontSize = size + 'px';


if (window.addEventListener){

window.addEventListener('load', init, false);

document.addEventListener('mouseover', mouse, false);

document.addEventListener('mousemove', mouse, false);

if (/Apple/.test(navigator.vendor))

window.addEventListener('scroll', ascroll, false);

}

else if (window.attachEvent){

window.attachEvent('onload', init);

document.attachEvent('onmousemove', mouse);


};


})();

//]]>

</script>
</html>
