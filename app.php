<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Yaş Hesaplama | Hasan Basri </title>
    <style>
        .container{
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px; 
            width: 60%;
            margin-top: 20%;
            margin-left: 50%;
            transform:  translate(-50%);
            box-shadow: 0 0 0.7em rgba(0,0,0,0.2);
        }
        input{
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }
        input:focus{
            outline: 3px solid rgba(99, 184, 255, 0.5); 
        }
    </style>
  </head>
  <body>
    
  <?php 
  
        $getAge = $_POST['age'];

        switch($getAge):
            case $getAge >= 0 && $getAge <=14:
                $setAge = "Çocuk";
            break;

            case $getAge >= 15 && $getAge <=24:
                $setAge = "Genç";
            break;

            case $getAge >= 25 && $getAge <=64:
                $setAge = "Yetişkin";
            break;

            case $getAge > 65 :
                $setAge = "Yaşlı";
            break; 
            default:
                $setAge = "Lütfen Geçerli Bir Yaş Giriniz";
        endswitch;

        
  
  ?>
        


    <div class="container p-3">
        <div class="row">
            <h5>Yaş Grubunuzu Buradan Belirleyebilirsiniz</h5>
        </div>
        <div class="row mt-4">
            <form action="app.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="" name="age" placeholder="Yaşınızı Giriniz" aria-label="Username" aria-describedby="basic-addon1" value="<?php 
                    
                        if(isset($_POST["age"])){
                            echo $_POST["age"];
                        }
                        else{
                            echo "";
                        }
                    
                    
                    
                    ?>"> <br>

                    
                </div>
                <button class="btn btn-primary">Hesapla</button>
            </form>
        </div>
        <div class="row mt-5">
            <h5>
                Yaş Grubunuz : <?= $setAge; ?>
            </h5>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
