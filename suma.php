$suma = 0;
$numar = 0;
 
while ($numar <= 10)
{
    if ($numar % 2 == 1)
    {
        $suma = $suma + $numar;
    }
    $numar++;
}
 
echo $suma;
 
?>
