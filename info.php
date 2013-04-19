<?php
if(!empty($_POST['namn']))
{
  $fil = fopen("data.html", "a");
  $namn = $_POST['namn'] . ";";
  $message = $_POST['message'];
  $webside = $_POST['text'] . ";";
  $date = $_POST['text'] . ";";
  $addres = $_POST['text'] . ";";
  $email = $_POST['text'] . ";";
  fwrite($fil, "<center>\n");
  $lDate = date('F j, Y, g:i a');
  fwrite($fil, "Date: $lDate\n");
  fwrite($fil, "Message: $message \n");
  fwrite($fil, "webside: $webside \n");
  fwrite($fil, "date: $date \n");
  fwrite($fil, "din addres: $addres \n");
  fwrite($fil, "din mail addres: $email \n");
  fwrite($fil, "</center>\n");
  fclose($fil);
  }
echo "<TABLE BORDER=0>
<TR>
<TD BACKGROUND=../images/images/untitled-1.gif>
<TABLE BORDER=0>
<TR>
<TD BACKGROUND=../rund-images.gif>";
echo "<center>";
echo "$message<br><br>";
echo "inskickat av $namn";
echo "webside: $webside";
echo "date: $date";
echo "din addres: $addres";
echo "din mail addres: $email";
echo "</center>";
echo "</TD></TR></TABLE></TD></TR></TABLE>";
?>
klick <A HREF="contakt.html">here</A> for contakt.html
