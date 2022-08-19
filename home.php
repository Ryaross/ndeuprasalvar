<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLibrary</title>
    <link rel="stylesheet" href="src/assets/css/home.css">
</head>
<body>
   <!-- header start --> 
   <header class="header">
        <a href="#" class="logo">LOGO</a>
        <nav class="navbar">
            <a href="#"><img src="https://avatars.githubusercontent.com/u/79985842?v=4" id="imgPerfil" alt=""></a>
            <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</a>
        </nav>
   </header>

    <main class="main">
        <!-- SearchBar -->
        <div class="searchBox">
            <div class="searchBar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="search" id="search" placeholder="Search">
                <select name="filtros" id="filtros" class="select">
                    <option value="none">Filtros</option>
                    <option value="Nome">Nome</option>
                    <option value="autor">Autor</option>
                    <option value="genero">Gênero</option>
                </select>
            </div>
        </div>

        <section class="main__section">
            <div class="containerBook">
                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button">Ver mais</a>
                </div> 

                <div class="card">
                    <div class="like"></div>
                    <img class="product"
                        src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/7ba73aaa-3da9-4cf1-abf2-ccc85dea5875/uid_3117369/paraiso.png" alt="Foto do produtos"/>
                    <h4 class="title">Nome do Livro</h4>
                    <div class="rating">
                    </div>
                    <a class="button" id="open-modal">Sinopse</a>

                    <div id="fade" class="hide"></div>
    
                    <div id="modal" class="hide">
                      <div class="modal-header">
                        <h2>Este é o Modal</h2>
                        <button id="close-modal">Fechar</button>
                      </div>
                      <div class="modal-body">
                        <p>O livro relata a viagem de Dante ao Inferno, ao Purgatório e ao Paraíso. O poeta Virgílio o acompanha tanto ao inferno – um vale nas entranhas da terra – como ao Purgatório, local onde as almas se purificam dos pecados capitais. Beatriz, a musa de Dante, o conduz ao Paraíso, formado por nove céus. No último dos céus, o poeta encara um importante exame de fé.</p>
                        <p>
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius alias
                          voluptate doloremque, totam inventore autem quis non error! Earum
                          ullam fuga, officiis voluptates pariatur unde et adipisci ducimus non
                          obcaecati.
                        </p>
                      </div>
                    </div>
                    
                </div> 
            </div>
        </section>
    </main>

    <footer>
        <div class="logo">
        <a class="logo" href="">© 2022 VirtualLibrary, Inc.</a>
        </div>
        <div class="containerFooter">
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
            <a href="#">Security</a>
            <a href="#">Status</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
        </div>
    </footer>

    <script src="../src/scripts/app.js"></script>

    <script src="https://kit.fontawesome.com/07cc412226.js" crossorigin="anonymous"></script>
</body>
</html>