<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/font-awesome.min.css">
<title>ecomerce</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
* {
 box-sizing: border-box;
}


body {

 margin: 0;
}


.header {
padding: 60px;
background-color: #D5D5D5;
}

.navbar {
overflow: hidden;
background-color: #f8f9fa;
}


.navbar a {
float: left;
display: block;
color: white;
text-align: center;
padding: 14px 20px;
}


.navbar a.right {
float: right;
}


.navbar a:hover {
background-color: #ddd;
color: black;
}
.dropdown {
float: left;
overflow: hidden;
}

.dropdown .dropbtn {
font-size: 16px; 
border: none;
outline: none;
color: white;
padding: 14px 16px;
background-color: inherit;
font-family: inherit;
margin: 0;
}

.row { 
display: flex;
-ms-flex-wrap: wrap; 
flex-wrap: wrap;
}


.side {
-ms-flex: 30%; 
flex: 30%;
background-color: #6c757d;
padding: 20px;
float: left;
color: white;
text-align: left;
padding: 10px 20px;
overflow: hidden;
 
}
.side a {
float: left;
display: block;
color: black;
text-align: center;
padding: 10px 20px;

}


.side a:hover {
background-color: #ddd;
color: white;
}



.main { 
margin: 20px auto;
width:1300px;
height:1000px;
background-color:#fff;
display:grid;
grid-template-columns: 200px 200px;
grid-row: auto auto;
grid-column-gap: 20px;
grid-row-gap: 20px;
}


.card{
 width:296px;
 height:296px;
}
.imagem{
height:296px;
 width:100px;
}
.conteudo{
height:296px;
width:296px;
}




.footer {
padding: 60px;
text-align: center;
background: black;
color:white;
}
</style>
</head>
<body>

<div class="header">

</div>

<div class="navbar">
 
<br>
 <button class="btn"><i class="fa fa-home"></i>Página Inicial</button>
<button type="button" class="btn btn-light">Anuncie seu produto</button>
<button class="btn"><i class="fa fa-bars"></i> Catálogo</button>
 
<button type="button" class="btn btn-light">Sobre</button>
<button type="button" class="btn btn-light">Contato</button>
 

<br>
<br>
<input type="search" id="site-search" name="q">
<button type="button" class="btn btn-success">Pesquisar produto</button>

</div>

<div class="row">
 <div class="side">
 <h3><b>Categorias</b></h3> 
<br>
<br>
<br>
 <button type="button" class="btn btn-secondary">Livros e Revistas</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Saúde e Beleza</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Esportes e Lazer</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Relógios</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Pet's</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Computadores e Acessórios</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Celulares e Smartphones</button>
<br>
<br>
<button type="button" class="btn btn-secondary">TV's</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Consoles e Jogos</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Brinquedos e Hobbies</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Bolsas e Mochilas</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Eletrodomésticos</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Móveis e Decoração</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Peças para Automóveis</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Sapatos e Tênis</button>
<br>
<br>
<button type="button" class="btn btn-secondary">Antiguidades</button>
<br>
<br>



</div>
 <div class="main">
 <div class="card">
<div class="imagem"></div>
<div class="conteudo"></div>
</div>
<br>

<div class="card">
 <div class="imagem"></div>
<div class="conteudo"></div>
</div>
 <br>

 <div class="card">
<div class="imagem"></div>
 <div class="conteudo"></div>
</div>
<br>

 <div class="card">
 <div class="imagem"></div>
<div class="conteudo"></div>
 </div>
 <br>


</div>

<div class="footer">
 
</div>

</body>
</html>
