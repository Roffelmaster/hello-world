
?>
0a1,34
> <form action="" method="post">
> <table>
> <tr>
> <td>Tempratuur:</td><td><input type="number" name="numberone"></td> 
> <tr>
> <tr>
> <td><input type="submit" value="Submit" /></td>
> </tr>
> </table>
> </form>
> 
> <?php
> $one = $_POST['numberone'];
> 
> if ($one < 5 && $one != NULL)
> {
> echo "Het is veel te koud om buiten te spelen";
> }
> elseif ($one >= 18 && $one < 28)
> {
> echo "De korte broek kan uit de kast";
> }
> elseif ($one >= 28 && $one != NULL )
> {
> echo "Pak de koelbox maar in we gaan naar het strand of niet dan";
> }
> 
> else
> {
> echo "Wat is PHP toch leuk";
> }
> 
> 
> ?>
\ No newline at end of file
