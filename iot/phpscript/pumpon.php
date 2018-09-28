  <?php
if (isset($_POST['LightON']))
{
shell_exec("sudo python /var/www/html/iot/pyscript/pumpon.py");
echo("on");
}
if (isset($_POST['LightOFF']))

?>
