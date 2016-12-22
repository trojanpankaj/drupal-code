<?php
echo date("L") . "<br>";
echo 'date("L jS of F Y h:i:s A")' . "<br>";
echo "oct 4 ,2016 was on a" .date("L" , mktime(0,0,0, 4, 10,2016));
$people = array('peter, pankaj, chetan');
echo pos($people) . "<br>";
/**
list fuction
*/
$my_animal = array("dog", "cat", "lion");
list($a, $b, $c) = $my_animal;
print "I have a several animals a $a, a $b a $c." ;
$t= date("pankaj");
if($t> "20");{
echo 'my name is pankaj';
}
$u = date("p");
if($u < "t");
echo'i am not pankaj';
$var = array("20","30");
if($var < "1 ");{
    echo 'it is true';
}
$student = array("ram", "lakhan","sumit");
if(in_array("ram", $student)){
    echo "match found";
}
else
{
    echo "mat ch not found";
}
$student = array("gopal","govind","lakhan");
$gopal = "60";
$govind = "50";
$lakhan = "40";
if($gopal < $govind){
    echo "govind is big";
}
else
{
    echo"gopal is big";
}
$t =date("d");
echo '<p> The day of the december is ' . $t; '<br>';
echo ' and will give the following msg</p>';
if($t > "5"){
    echo 'HP is best';
}
elseif($t < "18"){
    echo'dell is not best';
}
else
{
    echo'both hp and dell are not best';
}
$i = 1;
if($i=='0'){
    echo 'i is 0';
}
elseif($i=='1')
{
    echo'i is 1';
}
else
{
    echo 'i is 2';
}
switch($i){
    case 0:
        echo 'i is 0';
        break;
    case 1:
        echo"i is greter then 1";
        break;
    case 2:
        echo'i is 2';
        break;
}
$pankaj = '8982743619';
switch($pankaj){
    case 'number':
    echo'the number is 8982743619';
    break;
    case 'mobail':
        echo'the number is not found';
        break;
    case '898274361':
        echo'this is right number';
        break;

}
$color = 'red';
switch($color){
    case 'red':
    echo'you are found red';
    break;
    case 'blue':
    echo 'you are found blue';
    break;
    case 'green':
    echo'you are found green';
    break;
}
$tp = 1;
var_dump($tp);
if($tp === 1){
   echo 'triple';
}

if($tp == '1'){
    echo 'double';
}
for ($x =0; $x <=20; $x++){
    echo'the number is' .$x . '<br>';
}
for($pankaj =25; $x <= 100; $pankaj++){
    echo"the number is $pankaj";
}
?>