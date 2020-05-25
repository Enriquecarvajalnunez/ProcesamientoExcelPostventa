<body>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?= URL?>assets/mp4/bg.mp4" type="video/mp4">
    </video>
    <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="masthead-content text-white py-5 py-md-0">
                        <h1 class="mb-3">Procesamiento de datos !</h1>
                        <p class="mb-5">Procese los datos del archivo de excel a archivo de texto plano !</p>

                        <form action="Home/upload" method="post">                            

                            <div class="input-group input-group-newsletter">
                                <input type="email" class="form-control" placeholder="Cargar Archivo..." aria-label="Enter email..." aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">PROCESAR !</button>
                                </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= URL?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= URL?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= URL?>/js/coming-soon.min.js"></script>
</body>