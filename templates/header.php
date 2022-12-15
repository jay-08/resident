<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

<!-- Fonts and icons -->
<script src="assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/atlantis.css">
<link rel="stylesheet" href="assets/css/custom.css">

<style>
    #loading-container{
        position: absolute;
        display: flex;
        height: 100%;
        width: 100%;
        background-color: white;
        z-index: 9999;
    }
    #loading-screen{
        position: absolute;
        left: 48%;
        top: 48%;
        z-index: 9999;
        text-align: center;
    }
    .image-container{
    background: url('logo.png') center no-repeat;
    background-size: cover;
    height: 100vh;
    
}

.form-block{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.form-box{
    border: 15px solid #40e5cf;
    border-top-left-radius: 50px;
    border-bottom-right-radius: 50px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.form-box h4 {
    font-weight: bold;
}

.form-box .form-input {
    position: relative;
}

.form-box .form-input input {
    width: 100%;
    height: 100px;
    margin-bottom: 20px;    
    box-sizing: border-box;
    box-shadow: none;
    border: 1px solid #ffe0da;
    border-radius: 40px;
    outline: none;
    color: dark;
    background: transparent;   
    padding-left: 40px;
}

.form-box .form-input span {
    position: absolute;
    top: 8px;
    padding-left: 15px;
    color: #ff6347;
}

.form-box .form-input input::placeholder {
    color: blue;
    padding-left: 0px;
}

.form-box .form-input input:focus,
.form-box .form-input input:valid {
    border: 2px solid #ff6347;
}

.form-box .form-input input:focus::placeholder {
    color: #454b69;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #f0ec0a !important;
  font-family: Verdana;
  text-align: left;
  border:0px;
}

.form-box button[type="submit"], button[type=button] {
    
  display: inline-block;
  padding: 10px 20px;
  font-size: 15px;
  font-family: Verdana;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #06ea89;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #f0ec0a;
}

.form-box button[type="submit"]:hover {
    background-color: #078e55;
    font-family:Tahoma;
}
.form-box button[type="button"]:hover {
    background-color: #06e7ea;
    font-family:Tahoma;
}
.right-half {
  background-color: #91eb09;
  background-repeat: no-repeat;
  background-size: cover;
  position: absolute;
  right: 0px;
  width: 50%;
  height: 100%;
  background-size: cover;
}


</style>
