<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mensajes2</title>
<style type="text/css">
.info, .exito, .alerta, .error {
    font-family:Arial, Helvetica, sans-serif; 
    font-size:13px;
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    position:relative;
}
.info {
    color: #00529B;
    background-color: #BDE5F8;
    background-image: url('img/info.png');
}
.exito {
    color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url('img/exito.png');
    font-size: 14px;
}
.alerta {
    color: #9F6000;
    background-color: #FEEFB3;
    background-image: url('img/alerta.png');
}
.error {
    color: #D8000C;
    background-color: #FFBABA;
    background-image: url('img/error.png');
}
</style>
<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(function(){ $(".mensajes").effect("blind");}, 2000);  
        });
</script>
</head>
<body>
<div class="exito mensajes">Cliente Registrado Correctamente</div>

</body>
</html>
