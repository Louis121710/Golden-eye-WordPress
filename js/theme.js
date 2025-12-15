/**
 * Golden Eye Security Theme JavaScript
 *
 * Handles all interactive functionality including:
 * - Mobile menu toggle and navigation
 * - Smooth scrolling
 * - Form validation
 * - User feedback messages
 *
 * @package Golden_Eye_Security
 * @since 1.0.0
 */

(function() {
	'use strict';

	// Wait for DOM to be fully loaded
	document.addEventListener('DOMContentLoaded', function() {
		initMobileMenu();
		initSmoothScroll();
		initForms();
		initMessages();
	});

	function initMobileMenu() {
		// Mobile menu toggle
		const menuToggle = document.querySelector('.menu-toggle');
		const navigation = document.querySelector('.main-navigation');
		const menuOverlay = document.querySelector('.mobile-menu-overlay');
		const menuClose = document.querySelector('.menu-close');
		const body = document.body;

		if (!menuToggle || !navigation) {
			console.warn('Mobile menu elements not found');
			return; // Exit if elements don't exist
		}

		function openMenu() {
			if (navigation && menuOverlay && menuToggle) {
				navigation.classList.add('active');
				menuOverlay.classList.add('active');
				menuToggle.classList.add('active');
				body.classList.add('menu-open');
				body.style.overflow = 'hidden';
				menuToggle.setAttribute('aria-expanded', 'true');
			}
		}

		function closeMenu() {
			if (navigation && menuOverlay && menuToggle) {
				navigation.classList.remove('active');
				menuOverlay.classList.remove('active');
				menuToggle.classList.remove('active');
				body.classList.remove('menu-open');
				body.style.overflow = '';
				menuToggle.setAttribute('aria-expanded', 'false');
			}
		}

		menuToggle.addEventListener('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			if (navigation.classList.contains('active')) {
				closeMenu();
			} else {
				openMenu();
			}
		});

		if (menuClose) {
			menuClose.addEventListener('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
				closeMenu();
			});
		}

		if (menuOverlay) {
			menuOverlay.addEventListener('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
				closeMenu();
			});
		}

		// Close menu when clicking on a link
		const menuLinks = navigation.querySelectorAll('a');
		menuLinks.forEach(link => {
			link.addEventListener('click', function() {
				// Small delay to allow navigation
				setTimeout(closeMenu, 300);
			});
		});

		// Close menu on escape key
		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && navigation && navigation.classList.contains('active')) {
				closeMenu();
			}
		});

		// Close menu when window is resized to desktop size
		window.addEventListener('resize', function() {
			if (window.innerWidth > 768 && navigation.classList.contains('active')) {
				closeMenu();
			}
		});
	}

	function initSmoothScroll() {
		// Smooth scroll for anchor links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				const href = this.getAttribute('href');
				if (href !== '#' && href.length > 1) {
					const target = document.querySelector(href);
					if (target) {
						e.preventDefault();
						target.scrollIntoView({
							behavior: 'smooth',
							block: 'start'
						});
					}
				}
			});
		});
	}

	function initForms() {
		// Form validation and feedback
		const contactForm = document.querySelector('.contact-form form');
		const quoteForm = document.querySelector('.quote-form form');

		if (contactForm) {
			contactForm.addEventListener('submit', function(e) {
				// Basic validation can be added here
				// WordPress handles the actual submission
			});
		}

		if (quoteForm) {
			quoteForm.addEventListener('submit', function(e) {
				// Basic validation can be added here
				// WordPress handles the actual submission
			});
		}
	}

	function initMessages() {
		// Show success/error messages
		const urlParams = new URLSearchParams(window.location.search);
		if (urlParams.get('contact') === 'success') {
			alert('Thank you! Your message has been sent successfully.');
		} else if (urlParams.get('contact') === 'error') {
			alert('Sorry, there was an error sending your message. Please try again.');
		}

		if (urlParams.get('quote') === 'success') {
			alert('Thank you! Your quote request has been submitted successfully.');
		} else if (urlParams.get('quote') === 'error') {
			alert('Sorry, there was an error submitting your quote request. Please try again.');
		}
	}

})();

