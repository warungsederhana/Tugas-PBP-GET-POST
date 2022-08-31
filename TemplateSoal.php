<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h2 class="number"><?= $_GET['id']?></h2>

        <section>
            <div class="question-text">
                <h2><?= $_GET['soal']?> </h2>
            </div>
    
            <div class="option-list">
                <div class="option">
                    <input type="radio" name="pilihan" value="<?= $_GET['pilihan1'] ?>"><?= $_GET["pilihan1"] ?></input><br/>
                </div>
                <div class="option">
                    <input type="radio" name="pilihan" value="<?= $_GET['pilihan2'] ?>"><?= $_GET["pilihan2"] ?></input><br/>
                </div>
                <div class="option">
                    <input type="radio" name="pilihan" value="<?= $_GET['pilihan3'] ?>"><?= $_GET["pilihan3"] ?></input><br/>
                </div>
                <div class="option">
                    <input type="radio" name="pilihan" value="<?= $_GET['pilihan4'] ?>"><?= $_GET["pilihan4"] ?></input><br/>   
                </div>
            </div>        
            
        </section>
    </div>
    
</body>
</html>