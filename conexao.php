 <?php
$host = "localhost";
$user ="root";
$pass ="";
$dbname = "celke";
$port = 3306; 
try{
$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user,$pass);
//echo " Conexão com banco de dados realizado com sucesso";

}catch(PDOException $err){
    echo"Erro: conexão com banco de dados não realizado com sucesso. Erro gerado "
    . $err ->getMessage();
}
?>