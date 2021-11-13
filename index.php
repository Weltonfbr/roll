<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Blog Top Nerd</title>
    <style>
      body {
        background: #211902 }
    section {
        /*background: #C94A33;*/
        border-style: solid;
        border-color: #C94A33;
        color: #C94A33;
        border-radius: 1em;
        padding: 3em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        text-align: center;
        transform: translate(-50%, -50%) 
      }
      .logo{
        margin-bottom: 2em
      }
      .redes-sociais{
        margin-top: 2em;
        color: #FCD227;
        radius: 10%;
      }
    </style>
  </head>
  <body>
  <section>
    <h2>ROLADOR DE DADOS</h2>
    <div class="row redes-sociais">
      <div class="col">
      <form action="calc.php" method="post"> 
      <div class="form-group">
    <label for="exampleInputEmail1">Quantas Faces</label>
    <select name="select">
  <option value="d4">D4</option>
  <option value="d6" selected>D6</option>
  <option value="d10">D10</option>
  <option value="d20">D20</option>
  <option value="d100">D100</option>
</select><br><br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantos Dados</label>
    <input type="number" class="form-control" name="quantosDados" placeholder="Quantos dados" required>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
  </div>
  </section> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>