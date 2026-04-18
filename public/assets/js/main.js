document.addEventListener('DOMContentLoaded', function () {
    var yearElement = document.getElementById('currentYear');
    var revealElements = document.querySelectorAll('.reveal-on-scroll');
    var backToTopButton = document.getElementById('backToTop');
    var kpiNumbers = document.querySelectorAll('.kpi-number');
    var heroCarousel = document.getElementById('vmHeroCarousel');
    var heroProgressBar = document.getElementById('heroProgressBar');

    if (yearElement) {
        yearElement.textContent = String(new Date().getFullYear());
    }

    if (heroCarousel) {
        var manualCarouselTrigger = false;
        var parsedInterval = parseInt(heroCarousel.getAttribute('data-bs-interval') || '6000', 10);
        var carouselInterval = Number.isFinite(parsedInterval) && parsedInterval > 0 ? parsedInterval : 6000;
        var manualTriggerHandler = function () {
            manualCarouselTrigger = true;
        };

        var clearHeroEnterClasses = function () {
            heroCarousel.querySelectorAll('.carousel-item').forEach(function (item) {
                item.classList.remove('hero-enter-auto', 'hero-enter-manual-left', 'hero-enter-manual-right');
            });
        };

        var restartProgress = function () {
            if (!heroProgressBar) {
                return;
            }

            heroProgressBar.style.setProperty('--hero-progress-duration', carouselInterval + 'ms');
            heroProgressBar.classList.remove('is-running');
            void heroProgressBar.offsetWidth;
            heroProgressBar.classList.add('is-running');
        };

        if (window.bootstrap && window.bootstrap.Carousel) {
            window.bootstrap.Carousel.getOrCreateInstance(heroCarousel, {
                interval: carouselInterval,
                wrap: true,
                pause: false,
                touch: true
            }).cycle();
        }

        heroCarousel.classList.add('carousel-auto');
        heroCarousel.querySelectorAll('[data-bs-slide], [data-bs-slide-to]').forEach(function (control) {
            control.addEventListener('click', manualTriggerHandler);
        });

        heroCarousel.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                manualCarouselTrigger = true;
            }
        });

        heroCarousel.addEventListener('slide.bs.carousel', function (event) {
            var incomingItem = event.relatedTarget;

            clearHeroEnterClasses();
            heroCarousel.classList.remove('carousel-auto', 'carousel-manual');
            heroCarousel.classList.add(manualCarouselTrigger ? 'carousel-manual' : 'carousel-auto');

            if (incomingItem) {
                if (manualCarouselTrigger) {
                    incomingItem.classList.add(event.direction === 'right' ? 'hero-enter-manual-right' : 'hero-enter-manual-left');
                } else {
                    incomingItem.classList.add('hero-enter-auto');
                }
            }
            restartProgress();
        });

        heroCarousel.addEventListener('slid.bs.carousel', function () {
            manualCarouselTrigger = false;
            clearHeroEnterClasses();
        });

        document.addEventListener('visibilitychange', function () {
            if (!document.hidden) {
                restartProgress();
            }
        });

        window.setTimeout(restartProgress, 80);
    }

    if (revealElements.length > 0 && 'IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        revealElements.forEach(function (element) {
            revealObserver.observe(element);
        });
    } else {
        revealElements.forEach(function (element) {
            element.classList.add('is-visible');
        });
    }

    if (kpiNumbers.length > 0 && 'IntersectionObserver' in window) {
        var animateKpi = function (element) {
            var targetValue = parseFloat(element.dataset.target || '0');
            var decimals = parseInt(element.dataset.decimals || '0', 10);
            var prefix = element.dataset.prefix || '';
            var suffix = element.dataset.suffix || '';
            var duration = 1200;
            var start = null;

            var render = function (timestamp) {
                if (!start) {
                    start = timestamp;
                }

                var progress = Math.min((timestamp - start) / duration, 1);
                var currentValue = targetValue * progress;
                element.textContent = prefix + currentValue.toFixed(decimals).replace('.', ',') + suffix;

                if (progress < 1) {
                    window.requestAnimationFrame(render);
                }
            };

            window.requestAnimationFrame(render);
        };

        var kpiObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    entry.target.dataset.animated = 'true';
                    animateKpi(entry.target);
                    kpiObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        kpiNumbers.forEach(function (numberElement) {
            kpiObserver.observe(numberElement);
        });
    }

    if (backToTopButton) {
        var toggleBackToTop = function () {
            if (window.scrollY > 280) {
                backToTopButton.classList.add('is-visible');
            } else {
                backToTopButton.classList.remove('is-visible');
            }
        };

        window.addEventListener('scroll', toggleBackToTop, { passive: true });
        toggleBackToTop();

        backToTopButton.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
