<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="QR Code Generator - QR Generator - Generador de códigos QR gratuitos">
<title>QR Generator</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" type="text/css" media="all" />
<style>
html, body {
    background-color:#fcfcfa;
    margin: 0;
    padding: 0;
}
body * {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size:21px;
    text-align:center;
}
header {
    background: black;
    box-sizing: border-box;
    color: white;
    height: 120px;
    padding: 20px;
}
header h1, header h1 a {
    color: white;
    font-size: 32px;
    text-align: center;
}
.qr {
    align-items: center;
    display: flex;
    flex-direction: column;
    height: calc(100vh - 120px);
    justify-content: center;
}
.qrform {
    margin-top: -150px;
}
input {
  display:block;
}
</style>
</head>
<body>
    <header>
        <h1>QR Code Generator</h1>
    </header>
    <div class="qr">
        <div class="qrform">
            <input id="text" type="text" value="https://google.com" style="width:200px" class="mt-4" />
            <div id="qrcode" style="width:200px; height:200px; margin-top:15px;"></div>
        </div>
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
    <script type="text/javascript" src="js/qrcode.js"></script>   
    <script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 200,
        height : 200
    });
    function makeCode () {		
        var elText = document.getElementById("text");
        
        if (!elText.value) {
            //alert("Input a text");
            elText.focus();
            return;
        }
        
        qrcode.makeCode(elText.value);
    }
    makeCode();
    jQuery("#text").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
    </script> 
</body>
</html>