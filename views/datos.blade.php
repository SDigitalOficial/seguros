



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
<title>bignote</title>

<style type="text/css">

        body{width: 100%; background-color: #383434; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
        
        p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}
        
        span.preheader{display: none; font-size: 1px;}
        
        html{width: 100%;}
        
        table{font-size: 12px;border: 0;}
        
        .menu-space{padding-right:25px;}
        
        a,a:hover { text-decoration:none; color:#FFF;}


@media only screen and (max-width:640px)

{
    body {width:auto!important;}
    table [class=main] {width:440px !important;}
    table [class=two-left] {width:420px !important; margin:0px auto;}
    table [class=full] {width:100% !important; margin:0px auto;}
    table [class=two-left-inner] {width:400px !important; margin:0px auto;}
    table [class=menu-icon] { display:none;}

    }

@media only screen and (max-width:479px)
{
    body {width:auto!important;}
    table [class=main]  {width:310px !important;}
    table [class=two-left] {width:300px !important; margin:0px auto;}
    table [class=full] {width:100% !important; margin:0px auto;}
    table [class=two-left-inner] {width:280px !important; margin:0px auto;}
    table [class=menu-icon] { display:none;}

    
}



</style>

</head>

<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!--Main Table Start-->

<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#383434">
  <tr>
    <td align="center" valign="middle">
    
    
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
        <td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
        <td align="center" valign="top" bgcolor="#f4b502" style="-moz-border-radius: 25px 25px 0px 0px; border-radius: 25px 25px 0px 0px;"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
          <tr>
            <td height="35" align="center" valign="top" style="font-size:35px; line-height:35px;">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">
            
            <table border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm16-01" src="https://www.planrombo.com.co/web/image/website/1/logo/PLANROMBO?unique=b2f0ee0" width="155" height="40" alt="" /></a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
             <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
          <tr>
            <td height="70" align="center" valign="top" style="font-size:70px; line-height:70px;">&nbsp;</td>
          </tr>
          <tr>
                <td align="center" valign="top"><table width="70" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center" valign="top"></td>
                  </tr>

                </table></td>
              </tr>
          <tr>
            <td align="center" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

          <tr>
                <td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
              </tr>
              @foreach($actualizacion as $actualizacion)
              <tr>
                <td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000000; font-weight:normal; line-height:40px;" mc:edit="bm16-03"><multiline><h2>Hola, {{$actualizacion->nombres}} </h2></multiline></td>
              </tr>
              
                <tr>
                <td height="5" align="center" valign="top" style="font-size:5px; line-height:5px;">&nbsp;</td>
              </tr>

              <tr>
                <td align="center" valign="top" style="font-family:'Open Sans', sans-serif, Verdana; font-size:15px; color:#4c4c4c; font-weight:normal; line-height:24px;" mc:edit="bm16-04"><multiline>

                    <h2></h2><br>

<p>Este espacio es exclusivo para subir los documentos realcinado al vehículo con placa <span style="color:red">{{$actualizacion->placa}}</span> y número de contrato <span style="color:red">{{$actualizacion->contrato}}</span>, Gracias por aportar en nuestro proceso.</p><br>

<p><label for="avatar">Carátula Póliza:</label>
<br><br>
<form action="#">
<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" required /></p><br>

<p><label for="avatar">Certificado Aseguradora:</label>
<br><br>
<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" required /></p><br>

<p><label for="avatar">Certificado de Pago</label>
<br><br>
<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" required /></p><br>
<br>
<button type="submit" class="" style="background: green;color:#fff;padding: 20px;border: none;">Enviar Documentos</button><br><br>
</form>
</p>Si tienes alguna duda, no dudes en contactarnos.</p><br>

</p>Saludos,</p>
<br>


Renault Plan Rombo<br>


                </multiline></td>
              </tr>
              @endforeach
              <tr>
                <td height="20" align="center" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top"><table width="190" border="0" align="center" cellpadding="0" cellspacing="0">
              
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="60" align="center" valign="top" style="font-size:60px; line-height:60px;">&nbsp;</td>
          </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
      <td align="center" valign="top" bgcolor="#f4b502" style="font-family:'Open Sans', sans-serif, Verdana; font-size:12px; color:#FFF; font-weight:normal; line-height:20px; padding:30px 50px; -moz-border-radius:0px 0px 25px 25px; border-radius:0px 0px 25px 25px;" mc:edit="bm16-06"><multiline>Una buena opción de autofinanciamiento para adquirir vehículo.</multiline></td>
      </tr>

    </table></td>
  </tr>
</table>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
        <td align="center" valign="top"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
          <tr>
            <td height="35" align="center" valign="top" style="font-size:35px; line-height:35px;">&nbsp;</td>
          </tr>

          <tr>
            <td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FFF; font-weight:normal; line-height:28px;" mc:edit="bm16-07"><multiline>Copyright &copy; 2025 www.planrombo.com.co </multiline>  <b></b>  <multiline> <b>- <a href="https://www.planrombo.com.co/helpdesk/servicio-al-cliente-1" style="text-decoration:none; color:#FFF;">PQRS</a></b></multiline></td>
          </tr>
          <tr>
            <td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#FFF; font-weight:bold; line-height:28px;"></td>
          </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tr>
        <td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
    
    
    </td>
  </tr>
</table>

<!--Main Table End-->

</body>
</html>