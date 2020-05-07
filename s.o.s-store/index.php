<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js" integrity="sha256-ZafrO8ZXERYO794Tx1hPaAcdcXNZUNmXufXOSe0Hxj8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Store</title>
</head>

<body>
    <div class="hide cover">
    </div>
    <h1 class="text-center">GestioneMagazzini</h1>
    <div class="container wrap">
        <div class="form-group">
            <i class="fas fa-search"></i>
            <input type="search" class="search" placeholder="search">
            <a class="btn filter" href="#">Cerca</a>
        </div>
        <h2>Risultati</h2>
        <div class="wrap-results container">

        </div>
    </div>
    <!-- template magazzini -->
    <script id="entry-template" type="text/x-handlebars-template">


        <div class="item">
       <h2>{{name}}</h2>
       <p>{{description}}</p>
      <button value = "{{{id}}}" class="btn btn-green"> Cta</button>
    </div>
<!-- template dati overlay  -->
</script>
    <script id="entry-template2" type="text/x-handlebars-template">
        <div class="item d-flex justify-content-between ">
     <h2>{{name}}</h2>
     <p>Distanza {{distance}}</p>
     <input type="hidden" class="idProduct" name="idProduct" value="{{{idProduct}}}">
     <input type="hidden" class="qtyOrder" name="qtyOrder" value="{{{qtyOrder}}}">
    <button value = "{{{id}}}" class="btn  btn-magazine"> Cta</button>
  </div>
</script>
    <!-- template overlay -->
    <script id="overlay" type="text/x-handlebars-template">
        <div class="item overlay box-magazine">
        <h1>Ordine Effettuato</h1>
        <h2>Id Prodotto : {{idProduct}}</h2>
       <h2>Luogo:{{name}}</h2>
       <p>Quantità:{{qtyOrder}}</p>
      <button class="closed btn-danger">Chiudi</button>  
    </div>
</script>
    <script src="script.js"></script>
    <script src="stores.js"></script>
</body>

</html>