<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <form method="post">
     <div class="fluid-container">
        <div class="row">
            <div class="col-sm-12 bg-primary" style="height: 100px;">
                <h1 style="color:white" align="center"> HTML/CSS/JAVA Script Translator</h1>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 bg-info" style="height: 30px;">
               <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <input type="submit" name="btn1" value="RUN" style="color:red;"/>

                </div>


               </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 bg-warning" style="height: 500px;">

            <textarea name="text1" style=" width:100%; height:500px; font size:40px;">
            <?php
               if(isset($_POST["btn1"]))
                {
                    echo $_POST["text1"];
                }
             ?></textarea>
            
            </div>
            <div class="col-sm-6 bg-danger" style="height: 500px;">
             <h1> 
                <?php
                  if(isset($_POST["btn1"]))
                    {
                    echo $_POST["text1"];
                  }
                 ?>
              
            </h1>   
                 

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 bg-dark" style="height: 45px;">
                
                

            </div>

        </div>
    </div>
    </form>
    
</body>
</html>
    

        
   
    