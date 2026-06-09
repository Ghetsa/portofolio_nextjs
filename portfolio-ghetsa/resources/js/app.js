import './bootstrap';

import gsap from 'gsap';

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const setupMobileMenu = () => {
    const button = document.querySelector('[data-menu-toggle]');
    const panel = document.querySelector('[data-menu-panel]');

    if (!button || !panel) {
        return;
    }

    button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', String(!expanded));
        panel.classList.toggle('hidden');
    });

    panel.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            button.setAttribute('aria-expanded', 'false');
            panel.classList.add('hidden');
        });
    });
};

const setupSmoothScroll = () => {
    document.querySelectorAll('[data-scroll-to]').forEach((trigger) => {
        trigger.addEventListener('click', (event) => {
            const targetId = trigger.getAttribute('href');
            if (!targetId || !targetId.startsWith('#')) {
                return;
            }

            const target = document.querySelector(targetId);
            if (!target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth', block: 'start' });
        });
    });
};

const setupProjectFilter = () => {
    const filters = document.querySelectorAll('[data-project-filter]');
    const cards = document.querySelectorAll('[data-project-card]');

    if (!filters.length || !cards.length) {
        return;
    }

    const activateFilter = (value) => {
        filters.forEach((filter) => {
            const isActive = filter.getAttribute('data-project-filter') === value;
            filter.setAttribute('aria-pressed', String(isActive));
            filter.classList.toggle('is-active', isActive);
        });

        cards.forEach((card) => {
            const categories = (card.getAttribute('data-categories') || '').split(' ');
            const visible = value === 'all' || categories.includes(value);

            gsap.killTweensOf(card);

            if (visible) {
                card.hidden = false;
                gsap.fromTo(
                    card,
                    { autoAlpha: 0, y: 18 },
                    {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.4,
                        ease: 'power2.out',
                    }
                );
                return;
            }

            gsap.to(card, {
                autoAlpha: 0,
                y: 14,
                duration: 0.28,
                ease: 'power2.out',
                onComplete: () => {
                    card.hidden = true;
                },
            });
        });
    };

    filters.forEach((filter) => {
        filter.addEventListener('click', () => activateFilter(filter.getAttribute('data-project-filter') || 'all'));
    });

    activateFilter('all');
};

const setupScrollReveal = () => {
    if (prefersReducedMotion) {
        document.querySelectorAll('[data-animate]').forEach((element) => {
            element.classList.add('is-visible');
        });
        return;
    }

    const revealElements = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const element = entry.target;
                element.classList.add('is-visible');

                const staggerChildren = element.querySelectorAll('[data-stagger-child]');
                if (staggerChildren.length) {
                    gsap.fromTo(
                        staggerChildren,
                        { y: 20, autoAlpha: 0 },
                        {
                            y: 0,
                            autoAlpha: 1,
                            duration: 0.7,
                            ease: 'power3.out',
                            stagger: 0.08,
                        }
                    );
                } else {
                    gsap.fromTo(
                        element,
                        { y: 18, autoAlpha: 0 },
                        { y: 0, autoAlpha: 1, duration: 0.7, ease: 'power3.out' }
                    );
                }

                observer.unobserve(element);
            });
        },
        { threshold: 0.18 }
    );

    revealElements.forEach((element) => observer.observe(element));
};

const setupHeroMotion = () => {
    const hero = document.querySelector('[data-hero]');
    const orbit = document.querySelector('[data-hero-orbit]');
    const blob = document.querySelector('[data-hero-blob]');

    if (!hero || prefersReducedMotion) {
        return;
    }

    hero.addEventListener('mousemove', (event) => {
        const bounds = hero.getBoundingClientRect();
        const x = (event.clientX - bounds.left) / bounds.width - 0.5;
        const y = (event.clientY - bounds.top) / bounds.height - 0.5;

        gsap.to(orbit, { x: x * 24, y: y * 24, duration: 0.6, ease: 'power2.out' });
        gsap.to(blob, { x: x * -18, y: y * -18, scale: 1.03, duration: 0.6, ease: 'power2.out' });
    });

    hero.addEventListener('mouseleave', () => {
        gsap.to([orbit, blob], { x: 0, y: 0, scale: 1, duration: 0.8, ease: 'power3.out' });
    });
};

const setupEntrance = () => {
    if (prefersReducedMotion) {
        return;
    }

    const timeline = gsap.timeline({ defaults: { ease: 'power3.out' } });

    timeline
        .from('[data-nav-brand]', { y: -18, autoAlpha: 0, duration: 0.7 })
        .from('[data-nav-link]', { y: -12, autoAlpha: 0, stagger: 0.06, duration: 0.6 }, '-=0.3')
        .from('[data-hero-copy] > *', { y: 28, autoAlpha: 0, stagger: 0.12, duration: 0.8 }, '-=0.15')
        .from('[data-hero-panel]', { y: 26, autoAlpha: 0, scale: 0.98, duration: 0.9 }, '-=0.45');
};

document.addEventListener('DOMContentLoaded', () => {
    setupMobileMenu();
    setupSmoothScroll();
    setupProjectFilter();
    setupScrollReveal();
    setupHeroMotion();
    setupEntrance();
});
