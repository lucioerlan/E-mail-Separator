<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8" />
      <title>Separador de E-mails</title>
      <meta name="author" content="Erlan Lucio">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
      <link rel="icon" href="images/fav.ico" type="image/x-icon" />
      <link href="styles/bootstrap.css" rel='stylesheet' type='text/css'>
      <link href="styles/animate.css" rel='stylesheet' type='text/css'>
      <link href='styles/form.css' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="styles/font-awesome.min.css">
   </head>
   <style type="text/css">
      @font-face {
      font-family: BebasNeue;
      src: url(fonts/BebasNeueThin.otf);
      }
      #down {
      margin: 20px;
      }
   </style>
   <body>
      <form align="center" method="POST">
         <div id="down" class="animated bounceInDown" id="formulario">
               <table class="display" id="example">
                  <i style="font-size:180px;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i><br>
                  <span style="font: 50px BebasNeue, serif;">Separador de E<b>-</b>mails</span>
                  <div class="form-inline">
                     <textarea name="list" id="down" class="btn btn-success" placeholder="E-MAILS" cols="58" rows="8" class="form-control" style=" cursor: auto;"></textarea>
                     <div class="form-inline">
                        <button type="submit" name="start" onclick="start()" class="fcbtn btn btn-warning btn-outline btn-1e btn-squared">Iniciar</button>
               </table>
            </div>
      </form>
      <!-- Copyright -->
      <div id="down" class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://www.linkedin.com/in/erlanlucio/" target="_blank" rel="noreferrer noopener"> Erlan Lucio</a>
      </div>
      </div>
      <!-- Copyright -->
   </body>
</html>

<?php
if (isset($_POST['start'])) {

    echo '
   		   <center><label>Gmail</label><br>
           <textarea  class="btn btn-danger" style="cursor: Text;"  id="gmail" cols="50" rows="4" ></textarea>
           </center>

           <center><label>Hotmail</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="hotmail" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Outlook</label> <br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="outlook" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Live</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="live"  cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Globo</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="globo" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Uol</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="uol" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>BOl</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="bol" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Zipmail</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="zipmail" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Terra</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="terra" cols="50" rows="4" ></textarea>
   	       </center>

           <center><label>Yahoo</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="yahoo" cols="50" rows="4" ></textarea>
           </center>

           <center><label>Oi</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="oi" cols="50" rows="4" ></textarea>
   		   </center>

           <center><label>Ig</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;"  id="ig" cols="50" rows="4" ></textarea>
   	       </center>

           <center><label>Outros Não Identificados</label><br>
           <textarea class="btn btn-danger" style="cursor: Text;" id="outros" cols="50" rows="4" ></textarea>
   		   </center>
       ';
}

?>
<?php
error_reporting(0);
set_time_limit(0);
if (isset($_POST['start'])) {
    flush();
    $list = $_POST['list'];
    $list = trim($list);
    $list = str_replace(',', '.', $list);
    $list = explode("\r\n", $list);
    for ($i = 0; $i < count($list); $i++) {
        $email = $list[$i];
        $email = strtolower($list[$i]);
        list($user, $server) = explode("@", $email);
        list($server, $resto) = explode(".", $server);
        if ($server == "gmail") {
            echo '<script>$("#gmail").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "hotmail") {
            echo '<script>$("#hotmail").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "ig") {
            echo '<script>$("#ig").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "outlook") {
            echo '<script>$("#outlook").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "live") {
            echo '<script>$("#live").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "globo") {
            echo '<script>$("#globo").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "uol") {
            echo '<script>$("#uol").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "bol") {
            echo '<script>$("#bol").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "zipmail") {
            echo '<script>$("#zipmail").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "terra") {
            echo '<script>$("#terra").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "yahoo") {
            echo '<script>$("#yahoo").append("' . $list[$i] . '\n");</script>';
        } elseif ($server == "oi") {
            echo '<script>$("#oi").append("' . $list[$i] . '\n");</script>';
        } else {
            echo '<script>$("#outros").append("' . $list[$i] . '\n");</script>';
        }
    }
}

?>