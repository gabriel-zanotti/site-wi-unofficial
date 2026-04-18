<section class="hero-section py-4">
    <div class="container py-lg-3">
        <div id="vmHeroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="6000" data-bs-wrap="true" data-bs-pause="false">
            <div class="carousel-indicators hero-indicators">
                <button type="button" data-bs-target="#vmHeroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#vmHeroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#vmHeroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="hero-progress-track" aria-hidden="true">
                <span class="hero-progress-bar" id="heroProgressBar"></span>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center g-4 hero-slide">
                        <div class="col-lg-6">
                            <p class="hero-overline">VENDING MACHINE INDUSTRIAL</p>
                            <h1 class="display-5 mb-4">Controle total de EPI e MRO com rastreabilidade por usuário.</h1>
                            <p class="lead mb-4">Automatize a distribuição, reduza desperdícios e mantenha os itens críticos disponíveis para operação.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="<?= $urlFor('acesso'); ?>" class="btn hero-btn-secondary btn-lg">Solicitar demonstração</a>
                                <a href="<?= $urlFor('modelos'); ?>" class="btn hero-btn-primary btn-lg">Ver modelos</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-image-wrap">
                                <img src="<?= $assetFor('img/carousel-slide-1.jpg'); ?>" class="img-fluid hero-image" alt="Operador em linha industrial com EPI">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row align-items-center g-4 hero-slide">
                        <div class="col-lg-6">
                            <p class="hero-overline">ANÁLISE E PREVISIBILIDADE</p>
                            <h2 class="display-5 mb-4">Dados em tempo real para reduzir custo de consumo improdutivo.</h2>
                            <p class="lead mb-4">Dashboards mostram retirada por setor, turno e colaborador para melhorar o planejamento de compras.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="<?= $urlFor('beneficios'); ?>" class="btn hero-btn-secondary btn-lg">Ver benefícios</a>
                                <a href="<?= $urlFor('funcionalidades'); ?>" class="btn hero-btn-primary btn-lg">Explorar recursos</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-image-wrap">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80" class="img-fluid hero-image" alt="Profissionais analisando indicadores de operação">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row align-items-center g-4 hero-slide">
                        <div class="col-lg-6">
                            <p class="hero-overline">DEPLOY RÁPIDO</p>
                            <h2 class="display-5 mb-4">Modelos modulares para cada planta e perfil de estoque.</h2>
                            <p class="lead mb-4">Escolha entre Locker, Carrossel e Gabinete Smart para escalar conforme sua demanda operacional.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="<?= $urlFor('modelos'); ?>" class="btn hero-btn-secondary btn-lg">Comparar modelos</a>
                                <a href="<?= $urlFor('contato'); ?>" class="btn hero-btn-primary btn-lg">Falar com especialista</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-image-wrap">
                                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80" class="img-fluid hero-image" alt="Centro logístico com operação organizada">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero-mini-stats row g-3 mt-2">
            <div class="col-md-4">
                <div class="mini-stat-pill">Retirada por crachá, senha, biometria e RFID</div>
            </div>
            <div class="col-md-4">
                <div class="mini-stat-pill">Alerta de reposição com gatilho de estoque mínimo</div>
            </div>
            <div class="col-md-4">
                <div class="mini-stat-pill">Exportação de dados para ERP e BI</div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
            <h2 class="mb-0">Funcionalidades em destaque</h2>
            <p class="text-muted mb-0">Gestão integrada para supply chain interno e externo.</p>
        </div>
        <div class="row g-4 justify-content-md-center justify-content-xl-start">
            <div class="col-md-6 col-xl-4">
                <article class="feature-card h-100 reveal-on-scroll">
                    <h3>Controle por usuário</h3>
                    <p>Libere retirada via crachá, senha, biometria ou RFID com níveis de permissão por centro de custo.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="feature-card h-100 reveal-on-scroll">
                    <h3>Reposição automática</h3>
                    <p>Monitoramento de estoque em tempo real com pontos de reposição e alertas configuráveis.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="feature-card h-100 reveal-on-scroll">
                    <h3>Portal analítico</h3>
                    <p>Dashboards com consumo por setor, turno e item para melhorar decisão e reduzir desperdícios.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
            <h2 class="mb-0">Interações da plataforma</h2>
            <p class="mb-0 text-muted">Navegue por cenários comuns de operação.</p>
        </div>

        <ul class="nav nav-pills vm-pills mb-4" id="vmScenarios" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="consumo-tab" data-bs-toggle="pill" data-bs-target="#consumo" type="button" role="tab" aria-controls="consumo" aria-selected="true">Consumo crítico</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="auditoria-tab" data-bs-toggle="pill" data-bs-target="#auditoria" type="button" role="tab" aria-controls="auditoria" aria-selected="false">Auditoria</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="abastecimento-tab" data-bs-toggle="pill" data-bs-target="#abastecimento" type="button" role="tab" aria-controls="abastecimento" aria-selected="false">Abastecimento</button>
            </li>
        </ul>

        <div class="tab-content vm-tab-content reveal-on-scroll" id="vmScenariosContent">
            <div class="tab-pane fade show active" id="consumo" role="tabpanel" aria-labelledby="consumo-tab" tabindex="0">
                <h3>Limites por perfil e centro de custo</h3>
                <p>Defina regra por colaborador, turno e item para limitar consumo fora do padrão operacional.</p>
            </div>
            <div class="tab-pane fade" id="auditoria" role="tabpanel" aria-labelledby="auditoria-tab" tabindex="0">
                <h3>Tabela de trilha de eventos</h3>
                <p>Consulte retirada, devolução, bloqueio e ajustes com data/hora e identificação de usuário.</p>
            </div>
            <div class="tab-pane fade" id="abastecimento" role="tabpanel" aria-labelledby="abastecimento-tab" tabindex="0">
                <h3>Reposição orientada por nível mínimo</h3>
                <p>Ative alertas para abastecedor e priorize itens de maior giro com base na curva de uso.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="kpi-card reveal-on-scroll">
                    <span class="kpi-number" data-target="25" data-decimals="0" data-prefix="" data-suffix="%">0%</span>
                    <p>Redução média de consumo improdutivo nos primeiros 6 meses.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="kpi-card reveal-on-scroll">
                    <span class="kpi-number" data-target="99.5" data-decimals="1" data-prefix="" data-suffix="%">0%</span>
                    <p>Disponibilidade dos equipamentos para operação contínua.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="kpi-card reveal-on-scroll">
                    <span class="kpi-number" data-target="100" data-decimals="0" data-prefix="" data-suffix="%">0%</span>
                    <p>Rastreabilidade de retiradas para auditoria e compliance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
            <h2 class="mb-0">FAQ rápido</h2>
            <p class="mb-0 text-muted">Dúvidas comuns sobre implementação da vending machine.</p>
        </div>

        <div class="accordion vm-accordion reveal-on-scroll" id="faqVm">
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                        Quanto tempo leva para implantar a solução?
                    </button>
                </h3>
                <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqVm">
                    <div class="accordion-body">O prazo típico varia de 2 a 6 semanas, dependendo do volume de itens, integrações e regras de autorização.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                        A plataforma integra com ERP já existente?
                    </button>
                </h3>
                <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqVm">
                    <div class="accordion-body">Sim. A integração pode ser feita por arquivos estruturados ou API para sincronizar cadastros e consumo.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                        Quais modelos atendem itens de maior volume?
                    </button>
                </h3>
                <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqVm">
                    <div class="accordion-body">Para kits, ferramentas e itens maiores, o Locker VM e o Gabinete Smart VM são os modelos mais indicados.</div>
                </div>
            </div>
        </div>
    </div>
</section>
