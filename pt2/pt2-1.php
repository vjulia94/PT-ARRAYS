<!DOCTYPE html>
<html lang="ca">
  <head>
      <title>A2 - Arrays multidimensionals</title>
      <meta charset="UTF-8" />
  </head>
  <body>
      <?php
    
                $valor = 5;
        $arrayM = CrearArray($valor);
        ArrayTaula($arrayM);
        echo "<br/>";
        $arrayInvers = ArrayInversa($arrayM);
        ArrayTaula($arrayInvers);
    
        function CrearArray($n) {
                      
          $array;
          
          for($i = 0; $i < $n; $i++) {                        
            
            for($n = 0; $n < $n; $n++) {
              
              if($i == $n) {
               $array[$i][$n] = "*"; 
              }             
              
              if($n < $i) {
                $array[$i][$n] = rand(10, 20); 
              }
              
              if($n > $i) {
                $array[$i][$n] = $i + $n; 
              }
              
            }                        
            
          }
          
          return $array;
          
        }    
    
        function ArrayTaula($array) {
          
          echo "<table border=1>";
          
          for($i = 0; $i < count($array); $i++) {                        
            
            echo "<tr>";
            
            for($n = 0; $n < count($array); $n++) {
              
              echo "<td width=50 height=50 align=center>";
              echo $array[$i][$n];
              echo "</td>";
              
            }            
            
            echo "</tr>";
            
          }
          
          echo "</table>";
                             
        }        
        
        function ArrayInversa($array) {
          
          $reversedArray;
          
          for ($i = 0; $i < count($array); $i++) {
            
            for($n = 0; $n < count($array); $n++) {
              
              $reversedArray[$i][$n] = $array[$n][$i];
              
            }
            
          }
          
          return $reversedArray;
          
        }
    
      ?>      
  </body>
</html>