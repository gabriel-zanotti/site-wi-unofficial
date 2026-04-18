    </main>

    <section class="clients-showcase py-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                <h2 class="mb-0">Clientes que confiam na W&uuml;rth Industry</h2>
                <p class="mb-0 text-muted">Parcerias em diversos segmentos industriais.</p>
            </div>

            <div id="clientsCarousel" class="carousel slide clients-carousel" data-bs-ride="carousel" data-bs-interval="2200" data-bs-pause="false" data-bs-wrap="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3 g-lg-4 justify-content-center">
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-atlascopco.png'); ?>" alt="Logo da Atlas Copco">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-corning.png'); ?>" alt="Logo da Corning">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-dover.png'); ?>" alt="Logo da Dover">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-gilbarco.png'); ?>" alt="Logo da Gilbarco">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3 g-lg-4 justify-content-center">
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-jcb.png'); ?>" alt="Logo da JCB">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-lindsay.png'); ?>" alt="Logo da Lindsay">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="client-logo-card w-100">
                                    <img src="<?= $assetFor('img/clients/logo-wittur.png'); ?>" alt="Logo da Wittur">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev clients-control-prev" type="button" data-bs-target="#clientsCarousel" data-bs-slide="prev" aria-label="Cliente anterior">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next clients-control-next" type="button" data-bs-target="#clientsCarousel" data-bs-slide="next" aria-label="Pr&oacute;ximo cliente">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>

    <footer class="site-footer pt-5 pb-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <p class="mb-1 footer-brand">W&Uuml;RTH GROUP</p>
                    <p class="mb-0 small">&copy; <span id="currentYear"></span> W&uuml;rth Industrie Service GmbH &amp; Co. KG</p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <a class="footer-link" href="<?= $urlFor('contato'); ?>">Contato</a>
                    <a class="footer-link" href="<?= $urlFor('politica-privacidade'); ?>">Pol&iacute;tica de privacidade</a>
                    <a class="footer-link" href="<?= $urlFor('codigo-compliance'); ?>">C&oacute;digo de compliance</a>
                </div>
            </div>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop" aria-label="Voltar ao topo">
        <svg class="back-to-top-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M12 5l7 7-1.41 1.41L13 8.83V20h-2V8.83L6.41 13.41 5 12z"></path>
        </svg>
        <span class="visually-hidden">Voltar ao topo</span>
    </button>

    <script src="<?= $assetFor('vendor/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= $assetFor('js/main.js'); ?>"></script>
</body>
</html>
