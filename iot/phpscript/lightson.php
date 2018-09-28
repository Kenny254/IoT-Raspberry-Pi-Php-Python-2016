  <?php
if (isset($_POST['LightON']))
{
shell_exec("sudo python /var/www/html/iot/pyscript/lightsoff.py");
echo("on");
}
if (isset($_POST['LightOFF']))

?>
