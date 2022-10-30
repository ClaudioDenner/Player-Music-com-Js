<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Music</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/65f22fe718.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="infos">
            
            <div class="infos-file">
                <audio  id="audio">
                   
                </audio> 
                <div id="title"></div> 

            
              
                 
               
                
            </div>
            
            <div class="directory">
                <?php
                $directorio = "mp3/";
                $comando = dir($directorio);
                $comando2 = dir($directorio);
                ?>
                <script> filesMp3 = [];
                <?php 
                    while( $arquivo = $comando ->read()){
                        if($arquivo =="." ||$arquivo ==".."  ){} else { echo "filesMp3.push('.$arquivo.');";}

                    };
                 
                 ?>
                 </script>
                <?php
                
                while( $arquivo2 = $comando2 ->read()){
                    
                    if($arquivo2 =="." ||$arquivo2 ==".."  ){} else {echo "<div class='ficheiro' "."onclick='ficheiroValor(\"".$arquivo2."\")'>".$arquivo2."</div>"; } 
                    
                
                    
                   
                    
                    
                };
                
                ?>
                

            </div>

        </div>
        
    </div>
    <div class="bottom">

        <div class="controls">
            <div class="percent">
                <div class="barra-progress" id="barra-progress"></div>
                
            </div>
            <div class="ButtonController">
                <span class="material-symbols-outlined" id="back">skip_previous</span>
                <span class="material-symbols-outlined" id="play">play_arrow</span>
                <span class="material-symbols-outlined" id="next">skip_next</span>
                
            </div>
        </div>

    </div>
    
    
    
    <script src="MusicApp.js"></script>
</body>
</html>