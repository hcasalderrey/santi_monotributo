<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];

 

        //$array = array("tipo" => $tipo, "valor" => $valor);




        $jsonString = file_get_contents('./data/valor.json');
        $data = json_decode($jsonString, true);


       
        foreach ($data as $key => $entry) {
            
            if ($entry['tipo'] == $tipo) {
                $data[$key]['valor'] = $valor;
            }
            
        }

        $newJsonString = json_encode($data);
        file_put_contents('./data/valor.json', $newJsonString);

       

        echo '<script>alert("El valor se guardo correctamente.")</script>';
        echo '<script> 
            window.location.href = "https://monotributo.net/backend"
          </script>';


         
    
    }
?>