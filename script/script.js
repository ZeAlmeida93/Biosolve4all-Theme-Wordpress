// Language switcher + geolocation
document.addEventListener('DOMContentLoaded', function () {
    const switcher = document.querySelector('[data-language-switcher]');
    if (!switcher) {
        return;
    }

    const storageKey = 'biosolve_lang';
    const cookieKey = 'biosolve_lang';
    const ptUrl = switcher.dataset.langUrlPt || '';
    const enUrl = switcher.dataset.langUrlEn || '';
    const buttons = switcher.querySelectorAll('[data-lang]');

    const normalizeUrl = (url) => {
        if (!url) {
            return null;
        }
        try {
            const parsed = new URL(url, window.location.origin);
            return parsed.origin + parsed.pathname.replace(/\/+$/, '/');
        } catch (error) {
            return null;
        }
    };

    const currentPath = window.location.origin + window.location.pathname.replace(/\/+$/, '/');
    const normalizedEn = normalizeUrl(enUrl);
    const normalizedPt = normalizeUrl(ptUrl);

    const getCookie = (name) => {
        const cookieString = document.cookie || '';
        const match = cookieString.split('; ').find(item => item.startsWith(name + '='));
        return match ? decodeURIComponent(match.split('=').slice(1).join('=')) : null;
    };

    const setCookie = (name, value, maxAgeSeconds) => {
        const maxAge = maxAgeSeconds ? `; max-age=${maxAgeSeconds}` : '';
        document.cookie = `${name}=${encodeURIComponent(value)}${maxAge}; path=/; SameSite=Lax`;
    };

    const getStoredLang = () => {
        try {
            return localStorage.getItem(storageKey) || getCookie(cookieKey);
        } catch (error) {
            return getCookie(cookieKey);
        }
    };

    const setStoredLang = (lang) => {
        try {
            localStorage.setItem(storageKey, lang);
        } catch (error) {
            // Ignore localStorage failures.
        }
        setCookie(cookieKey, lang, 60 * 60 * 24 * 365);
    };

    const getCurrentLang = () => {
        const urlLang = new URLSearchParams(window.location.search).get('lang');
        if (urlLang === 'en' || urlLang === 'pt') {
            return urlLang;
        }
        if (normalizedEn && currentPath.startsWith(normalizedEn)) {
            return 'en';
        }
        if (normalizedPt && currentPath.startsWith(normalizedPt)) {
            return 'pt';
        }
        const docLang = (document.documentElement.lang || '').toLowerCase();
        if (docLang.startsWith('pt')) {
            return 'pt';
        }
        if (docLang.startsWith('en')) {
            return 'en';
        }
        return null;
    };

    const setActiveButton = (lang) => {
        buttons.forEach(button => {
            const isActive = button.dataset.lang === lang;
            button.classList.toggle('active', isActive);
            button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        });
    };

    const redirectToLang = (lang) => {
        const targetUrl = lang === 'pt' ? ptUrl : enUrl;
        const normalizedTarget = normalizeUrl(targetUrl);
        if (!targetUrl || !normalizedTarget) {
            return;
        }
        if (!currentPath.startsWith(normalizedTarget)) {
            window.location.href = targetUrl;
        }
    };

    const getFallbackLang = () => {
        const browserLang = (navigator.language || '').toLowerCase();
        return browserLang.startsWith('pt') ? 'pt' : 'en';
    };

    const storedLang = getStoredLang();
    const currentLang = getCurrentLang();
    const isHomeLangPath = currentPath === normalizedEn || currentPath === normalizedPt;

    if (storedLang) {
        setActiveButton(storedLang);
        if (storedLang !== currentLang && isHomeLangPath) {
            redirectToLang(storedLang);
        }
    } else {
        setActiveButton(currentLang || getFallbackLang());
        fetch('https://ipapi.co/country/', { cache: 'no-store' })
            .then(response => response.text())
            .then(countryCode => {
                const geoLang = countryCode.trim().toUpperCase() === 'PT' ? 'pt' : 'en';
                setStoredLang(geoLang);
                setActiveButton(geoLang);
                if (geoLang !== currentLang && isHomeLangPath) {
                    redirectToLang(geoLang);
                }
            })
            .catch(() => {
                const fallbackLang = currentLang || getFallbackLang();
                setStoredLang(fallbackLang);
                setActiveButton(fallbackLang);
            });
    }

    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            const lang = button.dataset.lang;
            if (!lang) {
                return;
            }
            event.preventDefault();
            setStoredLang(lang);
            setActiveButton(lang);
            const targetUrl = button.getAttribute('href') || (lang === 'pt' ? ptUrl : enUrl);
            if (targetUrl) {
                window.location.href = targetUrl;
                return;
            }
            redirectToLang(lang);
        });
    });
});

//Toggle Mobile

document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.querySelector('.mobile-menu .checkbox');
    const lines = document.querySelectorAll('.mobile-menu .hamburger-lines .line');
    const mobileMenu = document.querySelector('.mobile-menu-container .nav-links'); // Ensure this exists
    const modal = document.querySelector('.modal'); // Ensure this exists
    const closeModalButton = document.querySelector('.modal .close-button'); // Ensure this exists
    const modalLinks = document.querySelectorAll('.modal-content li'); // Ensure this exists
  
    function toggleMenu() {
        if (mobileMenu) {
            mobileMenu.classList.toggle('active');
        }
        lines.forEach(line => line.classList.toggle('active'));
        if (modal) {
            modal.classList.toggle('active');
        }
    }
  
    checkbox.addEventListener('change', toggleMenu); // Fix: added 'change' event
  
    if (closeModalButton) {
        closeModalButton.addEventListener('click', () => {
            if (modal) {
                modal.classList.remove('active');
            }
        });
    }

    // Add event listener to each li inside .modal-content
    modalLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (modal) {
                modal.classList.remove('active');
            }
            lines.forEach(line => line.classList.remove('active')); // Remove active class from lines
        });
    });
});

//GSAP Smooth

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      const offset = 121; // Adjust according to your navbar height
      const targetPosition = target.getBoundingClientRect().top + window.scrollY - offset;
  
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    });
  });

  //navbar-script
/*
  document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.querySelector('.mobile-menu .checkbox');
    const lines = document.querySelectorAll('.mobile-menu .hamburger-lines .line');
    const mobileMenu = document.querySelector('.mobile-menu-container .nav-links');
    const navLinks = document.querySelectorAll('.mobile-menu-container .nav-links a');

    function toggleMenu() {
        mobileMenu.classList.toggle('active');
        lines.forEach(line => line.classList.toggle('active'));
        checkbox.checked = !checkbox.checked;  // Uncheck the checkbox if it was checked
    }

    checkbox.addEventListener('change', toggleMenu);

    navLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });
});

*/


  document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section"); // Adjust if using different section tags
    const navLinks = document.querySelectorAll("nav ul li a"); // Adjust based on your navigation structure

    const observerOptions = {
        root: null, // Uses the viewport as the container
        rootMargin: "-50% 0px -50% 0px", // Triggers when the section is in the middle of the screen
        threshold: 0
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Remove .active from all links
                navLinks.forEach(link => link.parentElement.classList.remove("active"));

                // Find the corresponding link and add .active
                const id = entry.target.getAttribute("id");
                const activeLink = document.querySelector(`nav ul li a[href="#${id}"]`);

                if (activeLink) {
                    activeLink.parentElement.classList.add("active");
                }
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
});


  
  


document.addEventListener("DOMContentLoaded", function() {
    var heroSlider = new Flickity('#custom-slider', {
        cellAlign: 'center',
        contain: true,
        autoPlay: 4000,
        wrapAround: true,
        prevNextButtons: false,
        pageDots: false,
        imagesLoaded: true
    });

    heroSlider.resize(); // Force Flickity to recalculate image sizes

    // Synchronize desktop navigation
    document.querySelectorAll('.navigator li').forEach((li, index) => {
        li.addEventListener('click', function() {
            heroSlider.select(index);
            updateNavigation(index);
        });
    });

    // Sync mobile navigator when slider changes
    heroSlider.on('change', function(index) {
        updateNavigation(index);
    });

    function updateNavigation(index) {
        document.querySelectorAll('.navigator li, .mobile-navigator li').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.navigator li')[index].classList.add('active');
        document.querySelectorAll('.mobile-navigator li')[index].classList.add('active');
    }

    // Initial state update
    updateNavigation(0);
});





document.addEventListener("DOMContentLoaded", function () {
    var flkty = new Flickity('.carousel', {
        cellAlign: 'center',
        contain: true,
        prevNextButtons: true,
        pageDots: false,
        wrapAround: false, // Disable wrapAround for better performance
        autoPlay: 5000 // Time in milliseconds (5 seconds)
    });
});

//card-script-animation
/*
document.addEventListener("DOMContentLoaded", function () {
    const cardData = [
        [
            { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "" },
            { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "" },
            { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "" },
            { title: "04.", subtitle: "I&D CONSULTADORIA", details: "" }
        ],
        [
            { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "ANTIBACTERIANOS<br>ANTIFÚNGICOS<br>ANTIVÍRICOS" },
            { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "" },
            { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "" },
            { title: "04.", subtitle: "I&D CONSULTADORIA", details: "" }
        ],
        [
            { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "" },
            { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "CITOTOXICIDADE<br>TOXICIDADE<br>HEMOCOMPATIBILIDADE" },
            { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "" },
            { title: "04.", subtitle: "I&D CONSULTADORIA", details: "" }
        ],
        [
            { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "" },
            { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "" },
            { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "BIODEGRADABILIDADE<br>OXIDATIVOS<br>ODOR" },
            { title: "04.", subtitle: "I&D CONSULTADORIA", details: "" }
        ],
        [
            { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "" },
            { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "" },
            { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "" },
            { title: "04.", subtitle: "I&D CONSULTADORIA", details: "I&D DE PRODUTOS<br>I&D DE PROCESSOS<br>I&D DE TECNOLOGIAS<br>FORMAÇÃO<br>CONFORMIDADE REGULAMENTAR" }
        ]
    ];

    let currentState = 0;
    let animationInterval;
    let isHovered = false;
    
    const cards = document.querySelectorAll(".desktop-card");

    function updateCardContent(index) {
        // Reset all cards before applying changes
        cards.forEach((card, i) => {
            const h1 = card.querySelector("h1");
            const h3 = card.querySelector("h3");
            let details = card.querySelector(".card-content");

            if (!details) {
                details = document.createElement("p");
                details.classList.add("card-content");
                card.appendChild(details);
            }

            if (i !== index) {
                // Reset cards that are NOT the active one
                h1.innerHTML = cardData[0][i].title;
                h3.innerHTML = cardData[0][i].subtitle;
                details.innerHTML = cardData[0][i].details;
            }
        });

        // Update only the active card
        const activeCard = cards[index];
        const h1 = activeCard.querySelector("h1");
        const h3 = activeCard.querySelector("h3");
        let details = activeCard.querySelector(".card-content");

        // Apply fade-out + slide down effect only to the changing card
        h1.classList.add("fade-out-text");
        h3.classList.add("fade-out-text");
        details.classList.add("fade-out-text");

        setTimeout(() => {
            h1.innerHTML = cardData[currentState][index].title;
            h3.innerHTML = cardData[currentState][index].subtitle;
            details.innerHTML = cardData[currentState][index].details;

            // Apply fade-in + slide up only to the updated card
            h1.classList.remove("fade-out-text");
            h3.classList.remove("fade-out-text");
            details.classList.remove("fade-out-text");

            h1.classList.add("fade-in-text");
            h3.classList.add("fade-in-text");
            details.classList.add("fade-in-text");

            // Remove fade-in effect after animation completes
            setTimeout(() => {
                h1.classList.remove("fade-in-text");
                h3.classList.remove("fade-in-text");
                details.classList.remove("fade-in-text");
            }, 500);
        }, 400);
    }

    function updateCards() {
        if (!isHovered) {
            updateCardContent(currentState % cards.length);
            currentState = (currentState + 1) % cardData.length;
        }
    }

    function startAnimation() {
        animationInterval = setInterval(updateCards, 4000);
    }

    function stopAnimation() {
        clearInterval(animationInterval);
    }

    // Start animation on page load
    updateCards();
    startAnimation();

    // Hover Effect: Stop animation & reveal full content
    cards.forEach((card, index) => {
        card.addEventListener("mouseenter", () => {
            isHovered = true;
            stopAnimation();
            
            // Instantly show full content for the hovered card
            const h1 = card.querySelector("h1");
            const h3 = card.querySelector("h3");
            let details = card.querySelector(".card-content");

            if (cardData[cardData.length - 1] && cardData[cardData.length - 1][index]) {
                h1.innerHTML = cardData[cardData.length - 1][index].title;
                h3.innerHTML = cardData[cardData.length - 1][index].subtitle;
                details.innerHTML = cardData[cardData.length - 1][index].details;
            }
            
            card.classList.add("hovered");
        });

        card.addEventListener("mouseleave", () => {
            isHovered = false;
            card.classList.remove("hovered");
            startAnimation();
        });
    });
});
*/

document.addEventListener("DOMContentLoaded", function () {
    const localizedCardData = {
        en: {
            default: [
                { title: "01.", subtitle: "ANTIMICROBIAL TESTS", details: "" },
                { title: "02.", subtitle: "BIOCOMPATIBILITY TESTS", details: "" },
                { title: "03.", subtitle: "CHEMICAL TESTS", details: "" },
                { title: "04.", subtitle: "R&D CONSULTING", details: "" }
            ],
            hover: [
                { title: "01.", subtitle: "ANTIMICROBIAL TESTS", details: "ANTIBACTERIAL<br>ANTIFUNGAL<br>ANTIVIRAL" },
                { title: "02.", subtitle: "BIOCOMPATIBILITY TESTS", details: "CYTOTOXICITY<br>TOXICITY<br>HEMOCOMPATIBILITY" },
                { title: "03.", subtitle: "CHEMICAL TESTS", details: "BIODEGRADABILITY<br>OXIDATIVE<br>ODOR" },
                { title: "04.", subtitle: "R&D CONSULTING", details: "PRODUCT R&D<br>PROCESS R&D<br>TECHNOLOGY R&D<br>TRAINING<br>REGULATORY COMPLIANCE" }
            ]
        },
        pt: {
            default: [
                { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "" },
                { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "" },
                { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "" },
                { title: "04.", subtitle: "I&D CONSULTADORIA", details: "" }
            ],
            hover: [
                { title: "01.", subtitle: "ENSAIOS ANTIMICROBIANOS", details: "ANTIBACTERIANOS<br>ANTIFÚNGICOS<br>ANTIVÍRICOS" },
                { title: "02.", subtitle: "ENSAIOS BIOCOMPATIBILIDADE", details: "CITOTOXICIDADE<br>TOXICIDADE<br>HEMOCOMPATIBILIDADE" },
                { title: "03.", subtitle: "ENSAIOS BIOQUÍMICOS", details: "BIODEGRADABILIDADE<br>OXIDATIVOS<br>ODOR" },
                { title: "04.", subtitle: "I&D CONSULTADORIA", details: "I&D DE PRODUTOS<br>I&D DE PROCESSOS<br>I&D DE TECNOLOGIAS<br>FORMAÇÃO<br>CONFORMIDADE REGULAMENTAR" }
            ]
        }
    };

    const locale = (window.LOCALE || document.documentElement.lang || "pt").toLowerCase();
    const data = locale.startsWith("en") ? localizedCardData.en : localizedCardData.pt;
    const cards = document.querySelectorAll(".desktop-card");

    cards.forEach((card, index) => {
        card.addEventListener("mouseenter", () => {
            const h1 = card.querySelector("h1");
            const h3 = card.querySelector("h3");
            let details = card.querySelector(".card-content");

            if (!details) {
                details = document.createElement("p");
                details.classList.add("card-content");
                card.appendChild(details);
            }

            // Apply fade-out effect before updating content
            h1.classList.add("fade-out-text");
            h3.classList.add("fade-out-text");
            details.classList.add("fade-out-text");

            setTimeout(() => {
                h1.innerHTML = data.hover[index].title;
                h3.innerHTML = data.hover[index].subtitle;
                details.innerHTML = data.hover[index].details;

                // Apply fade-in effect after content update
                h1.classList.remove("fade-out-text");
                h3.classList.remove("fade-out-text");
                details.classList.remove("fade-out-text");
                
                h1.classList.add("fade-in-text");
                h3.classList.add("fade-in-text");
                details.classList.add("fade-in-text");

                // Remove fade-in effect after animation completes
                setTimeout(() => {
                    h1.classList.remove("fade-in-text");
                    h3.classList.remove("fade-in-text");
                    details.classList.remove("fade-in-text");
                }, 500);
            }, 300);
        });

        card.addEventListener("mouseleave", () => {
            const h1 = card.querySelector("h1");
            const h3 = card.querySelector("h3");
            let details = card.querySelector(".card-content");

            if (!details) {
                details = document.createElement("p");
                details.classList.add("card-content");
                card.appendChild(details);
            }

            // Reset content to default state
            h1.innerHTML = data.default[index].title;
            h3.innerHTML = data.default[index].subtitle;
            details.innerHTML = data.default[index].details;
        });
    });
});



//Mobile dropdowns

function toggleDropdown(id) {
    const card = document.getElementById(`card-${id}`);
    card.classList.toggle("active");
  }
  



// Autoplay video
document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("processVideo");

    if (!video) return;

    video.setAttribute("muted", "true"); // FORCE mute (mandatory)
    video.setAttribute("playsinline", "true");
    video.setAttribute("autoplay", "true");

    let playTimeout;

    function playVideo() {
        clearTimeout(playTimeout); // Clear any previous timeouts
        playTimeout = setTimeout(() => {
            video.play().then(() => {
                console.log("Autoplay success after delay!");
            }).catch(error => {
                console.warn("Autoplay blocked, retrying...");
                setTimeout(() => video.play(), 500);
            });
        },200); // 0.3s delay before play
    }

    // Force play when scrolling into viewport with delay
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                playVideo();
            } else {
                video.pause();
                video.currentTime = 0; // Reset when out of viewport
            }
        });
    }, { threshold: 0.6 });

    observer.observe(video);

    // Force play on user interaction (backup for extreme cases)
    document.addEventListener("click", playVideo);
    document.addEventListener("touchstart", playVideo);
    document.addEventListener("scroll", () => {
        if (video.paused) playVideo();
    });

    console.log("Autoplay script loaded with 0.7s delay.");
});






//Lottie Animation Script



document.addEventListener("DOMContentLoaded", function () {
    var lottieContainer = document.getElementById("lottie-news");

    var animation = lottie.loadAnimation({
        container: lottieContainer, // The div where it will render
        renderer: "svg", // 'svg' provides better quality
        loop: false, // Play only once
        autoplay: false, // Don't play immediately
        path: "assets/lottie-animations/news-green.json" // Path to your JSON file
    });

    // Function to check if the div is in the viewport
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animation.play(); // Play the animation when in viewport
                observer.unobserve(lottieContainer); // Stop observing after playing
            }
        });
    }

    

    // Create an Intersection Observer
    var observer = new IntersectionObserver(handleIntersection, {
        root: null, // Observe relative to the viewport
        threshold: 1 // Trigger when 50% of the div is visible
    });

    observer.observe(lottieContainer); // Start observing the Lottie div
});






document.addEventListener("DOMContentLoaded", function () {
    const lottieContainer = document.querySelector(".lottie-container");

    if (!lottieContainer) {
        console.error("❌ Lottie container not found!");
        return;
    }

    console.log("✅ Lottie container detected, waiting for viewport...");

    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                console.log("🔄 Lottie animation is now in view, adding it to the DOM...");

                // ✅ Remove any existing Lottie element
                lottieContainer.innerHTML = "";

                // ✅ Create a new Lottie element with fixes
                const lottieElement = document.createElement("dotlottie-wc");
                lottieElement.setAttribute("src", "https://lottie.host/5aee6ff8-7809-49ef-a5b0-c522d01e6bcd/FMizGjSp57.lottie");
                lottieElement.setAttribute("speed", "0.75");
                lottieElement.setAttribute("style", "width: 100%; height: 100%; display: block;");
                lottieElement.setAttribute("mode", "forward");
                lottieElement.setAttribute("autoplay", "true");

                lottieContainer.appendChild(lottieElement); // Add the animation to the DOM

                observer.unobserve(lottieContainer); // Stop observing after adding the animation
            }
        });
    }

    // Create an Intersection Observer
    const intersectionObserver = new IntersectionObserver(handleIntersection, {
        root: null, // Observe relative to viewport
        threshold: 0.8 // Trigger when 70% of the div is visible
    });

    intersectionObserver.observe(lottieContainer);
});






//Newsletter Popup
document.addEventListener("DOMContentLoaded", function () {
    const newsletterButton = document.getElementById("brevo-form-overlay");
    const nlPopup = document.getElementById("newsletter-pop-up"); // FIXED: Using ID instead of class
    const mobileNewsletterButton = document.getElementById("mobile-newsletter-menu-overlay");

    if (!nlPopup) {
        console.error("Element with ID 'newsletter-pop-up' not found.");
        return; // Stop execution if the pop-up doesn't exist
    }

    const formContainer = document.querySelector("#sib-container"); // Form container
    let closeBtn = document.querySelector(".close-btn");

    // If close button doesn't exist, create it
    if (!closeBtn) {
        closeBtn = document.createElement("button");
        closeBtn.classList.add("close-btn");
        closeBtn.innerHTML = "&times;";
        nlPopup.appendChild(closeBtn);
    }

    function openPopup() {
        nlPopup.classList.add("active");
    }

    function closePopup() {
        nlPopup.classList.remove("active");
    }

    // ✅ Open pop-up when clicking the button
    if (newsletterButton) {
        newsletterButton.addEventListener("click", function (event) {
            event.preventDefault();
            openPopup();
        });
    } else {
        console.error("Button with ID 'brevo-form-overlay' not found.");
    }

       // ✅ Open pop-up when clicking the mobile newsletter button
       if (mobileNewsletterButton) {
        mobileNewsletterButton.addEventListener("click", function (event) {
            event.preventDefault();
            openPopup();
        });
    } else {
        console.error("Button with ID 'mobile-newsletter-menu-overlay' not found.");
    }

    // ✅ Close pop-up when clicking the close button
    closeBtn.addEventListener("click", closePopup);

    // ✅ Close pop-up when clicking outside the form
    nlPopup.addEventListener("click", function (event) {
        if (!formContainer.contains(event.target)) {
            closePopup();
        }
    });

    // ✅ Close pop-up after form submission (delayed for effect)
    const form = document.getElementById("sib-form");
    if (form) {
        form.addEventListener("submit", function () {
            setTimeout(closePopup, 1500);
        });
    }
});

