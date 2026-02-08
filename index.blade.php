@extends('layouts.app')

@section('content')

<div class="article-<?= $custom_value ?>">
    <!--
	WANT TO HELP US MAKE STUFF LIKE THIS?
	EMAIL it@dailyorange.com
    -->
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Libre+Franklin:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Updated Font Awesome to version 6.5.1 for X/Twitter icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syracuse Lacrosse: Season Preview 2026 | The Daily Orange</title>

    <style>
        /* Required CSS to hide WordPress elements */
                footer {display: none;}
                            .ftr-container {display: none;}
                            .deals-container {display: none;}
                                        /* Hide header */


                .main-hdr, #main-nav {
                    display: none !important; }


                #content {
                    max-width: none;
                    margin: 0px;
                }
                #masthead-ad{
                    display: none;
                }
        .trending-content {
        display:none !important;
        }
        .flytead {
            display: none !important;
        }
        .trending-container {
            display: none !important;
        }
        #masthead-ad {
            display: none !important;
        }
        .periodic-banner {
            display: none !important;
        }

        header{
            display: none !important;
        }

        /* ============================================
        FONT IMPORTS & BASE SETUP
        ============================================ */

                @font-face {
                    font-family: 'bentonsansregular';
                    src: url('bentonsans-regular-webfont.woff2') format('woff2'),
                        url('bentonsans-regular-webfont.woff') format('woff');
                    font-weight: normal;
                    font-style: normal;
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                html {
                    scroll-behavior: smooth;
                    font-size: 16px;
                    overflow-x: hidden;
                }

                body {
                    font-family: 'Libre Franklin', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                    line-height: 1.7;
                    color: #121212;
                    background-color: #ffffff;
                    margin: 0;
                    padding: 0;
                    overflow-x: hidden;
                    width: 100%;
                }

                /* ============================================
                TOP NAVIGATION BAR
                ============================================ */

                .top-nav {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 40px;
                    background-color: #ffffff;
                    border-bottom: 1px solid #e6e6e6;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 0 15px;
                    z-index: 1000;
                    font-family: 'Libre Franklin', sans-serif;
                }

                .nav-center{
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                    display: flex;
                    align-items: center;
                    height: 100%;
                }

                .nav-logo{
                    height: clamp(24px, 5vw, 30px);
                    width: auto;
                }

                .nav-date {
                    font-size: clamp(10px, 2vw, 12px);
                    font-weight: 600;
                    color: #121212;
                    letter-spacing: 0.5px;
                    white-space: nowrap;
                }

                .nav-social {
                    display: flex;
                    gap: clamp(10px, 2vw, 18px);
                }

                .nav-social a {
                    color: #121212;
                    font-size: clamp(12px, 2vw, 14px);
                    transition: color 0.2s ease;
                    text-decoration: none;
                }

                .nav-social a:hover {
                    color: #1493B3;
                }

                /* ============================================
                MASTHEAD
                ============================================ */

                .masthead {
                    margin-top: 40px;
                    padding: 30px 0 20px;
                    text-align: center;
                    border-bottom: 2px solid #121212;
                    background-color: #ffffff;
                }

                .masthead-logo img {
                    height: 60px;
                    filter: brightness(0);
                }

                /* ============================================
                EDITION BANNER
                ============================================ */

                .edition-banner {
                    text-align: center;
                    padding: 50px 20px 40px;
                    background: linear-gradient(135deg, #A1D6F7 0%, #C7EDAF 100%);
                    border-bottom: 4px double #1493B3;
                }

                .edition-label {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 11px;
                    font-weight: 700;
                    letter-spacing: 2px;
                    color: #1493B3;
                    margin-bottom: 15px;
                    text-transform: uppercase;
                }

                .edition-title {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(3rem, 7vw, 5rem);
                    font-weight: 900;
                    color: #121212;
                    margin-bottom: 10px;
                    letter-spacing: -1px;
                }

                .edition-subtitle {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
                    font-weight: 400;
                    color: #333;
                    font-style: italic;
                    margin-bottom: 25px;
                }

                .edition-divider {
                    width: 60px;
                    height: 2px;
                    background-color: #32AD7E;
                    margin: 0 auto;
                }

                /* ============================================
                HERO SECTION
                ============================================ */

                .hero-section {
                    width: 100%;
                    margin: 60px auto;
                    padding: 0 20px;
                }

                .hero-container {
                    display: grid;
                    grid-template-columns: 1fr;
                    gap: 40px;
                }

                .hero-image {
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    overflow: hidden;
                }

                .hero-image img {
                    max-height: 80vh;
                    max-width: 100%;
                    width: auto;
                    height: auto;
                    display: block;
                    border: 1px solid #e6e6e6;
                }

                .hero-content {
                    padding: 20px 0;
                }

                .hero-kicker {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 13px;
                    font-weight: 700;
                    color: #1493B3;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;
                    margin-bottom: 15px;
                }

                .hero-headline {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(2rem, 4.5vw, 3rem);
                    font-weight: 700;
                    line-height: 1.2;
                    color: #121212;
                    margin-bottom: 20px;
                    letter-spacing: -0.5px;
                }

                .hero-dek {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: clamp(1.05rem, 2vw, 1.25rem);
                    line-height: 1.6;
                    color: #333;
                    margin-bottom: 25px;
                }

                .hero-byline {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                    align-items: center;
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 14px;
                    color: #666;
                    margin-bottom: 30px;
                    padding-bottom: 20px;
                    border-bottom: 1px solid #e6e6e6;
                }

                .byline-text {
                    font-weight: 600;
                    color: #121212;
                }

                .byline-divider {
                    color: #ccc;
                }

                .byline-date {
                    color: #666;
                }

                .hero-cta {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 14px;
                    font-weight: 600;
                    color: #1493B3;
                    text-decoration: none;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    transition: all 0.3s ease;
                    padding: 12px 24px;
                    border: 2px solid #1493B3;
                    background-color: transparent;
                }

                .hero-cta:hover {
                    background-color: #1493B3;
                    color: #ffffff;
                }

                .hero-cta i {
                    font-size: 12px;
                }

                /* ============================================
                COUNTDOWN TIMER SECTION
                ============================================ */

                .countdown-section {
                    margin: 40px 0;
                    padding: 40px 30px;
                    background: linear-gradient(135deg, #A1D6F7 0%, #C7EDAF 100%);
                    border-radius: 8px;
                    border: 2px solid #1493B3;
                }

                .countdown-container {
                    text-align: center;
                }

                .countdown-title {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(1.5rem, 3vw, 2rem);
                    font-weight: 700;
                    color: #121212;
                    margin-bottom: 30px;
                    letter-spacing: -0.5px;
                }

                .countdown-display {
                    display: flex;
                    justify-content: center;
                    gap: clamp(20px, 4vw, 40px);
                    flex-wrap: wrap;
                }

                .countdown-unit {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    min-width: 80px;
                }

                .countdown-number {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(2.5rem, 6vw, 4rem);
                    font-weight: 900;
                    color: #1493B3;
                    line-height: 1;
                    margin-bottom: 8px;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
                }

                .countdown-label {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: clamp(0.75rem, 1.5vw, 0.9rem);
                    font-weight: 700;
                    color: #121212;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;
                }

                /* ============================================
                LETTER FROM EDITOR SECTION
                ============================================ */

                .letter-section {
                    background-color: #f8f8f8;
                    padding: 60px 20px;
                    border-top: 1px solid #e6e6e6;
                    border-bottom: 1px solid #e6e6e6;
                }

                .letter-container {
                    width: 100%;
                    margin: 0 auto;
                }

                .letter-label {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 11px;
                    font-weight: 700;
                    letter-spacing: 2px;
                    color: #32AD7E;
                    text-transform: uppercase;
                    text-align: center;
                    margin-bottom: 30px;
                }

                .letter-content {
                    display: grid;
                    grid-template-columns: 2fr 1fr;
                    gap: 50px;
                    align-items: start;
                }

                .letter-heading {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: 2.5rem;
                    font-weight: 700;
                    color: #121212;
                    margin-bottom: 10px;
                }

                .letter-author {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 14px;
                    font-weight: 600;
                    color: #666;
                    margin-bottom: 25px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                .letter-text p {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 1.05rem;
                    line-height: 1.8;
                    color: #333;
                    margin-bottom: 20px;
                }

                .letter-signature {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: 1.2rem;
                    font-style: italic;
                    color: #121212;
                    margin-top: 30px;
                }

                .letter-image {
                    position: sticky;
                    top: 80px;
                }

                .letter-image img {
                    width: 100%;
                    height: auto;
                    border: 1px solid #e6e6e6;
                    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                }

                /* ============================================
                MAIN CONTENT GRID
                ============================================ */

                .content-grid {
                    width: 100%;
                    margin: 60px auto;
                    padding: 0 20px;
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 50px 40px;
                }

                /* ============================================
                STORY CARDS
                ============================================ */

                .story {
                    border-bottom: 1px solid #e6e6e6;
                    padding-bottom: 30px;
                }

                .story-lead {
                    grid-column: 1 / -1;
                    padding-bottom: 50px;
                    border-bottom: 2px solid #121212;
                }

                .story-feature {
                    grid-column: 1 / -1;
                    padding-bottom: 50px;
                    border-bottom: 2px solid #e6e6e6;
                }

                .story-kicker {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 12px;
                    font-weight: 700;
                    color: #1493B3;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;
                    margin-bottom: 12px;
                }

                .story-headline {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(1.8rem, 3vw, 2.5rem);
                    font-weight: 700;
                    line-height: 1.2;
                    color: #121212;
                    margin-bottom: 15px;
                    letter-spacing: -0.5px;
                }

                .story-headline-secondary {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(1.3rem, 2.5vw, 1.6rem);
                    font-weight: 700;
                    line-height: 1.3;
                    color: #121212;
                    margin-bottom: 12px;
                    letter-spacing: -0.3px;
                }

                .story-dek {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 1.05rem;
                    line-height: 1.6;
                    color: #333;
                    margin-bottom: 15px;
                }

                .story-byline {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 13px;
                    color: #666;
                    margin-bottom: 25px;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 8px;
                }

                .story-byline span {
                    display: inline-block;
                }

                .byline-divider {
                    color: #ccc;
                }

                .story-figure {
                    margin: 25px 0;
                    width: 100%;
                    overflow: hidden;
                }

                .story-image {
                    width: 100%;
                    max-width: 100%;
                    height: auto;
                    display: block;
                    border: 1px solid #e6e6e6;
                    transition: opacity 0.3s ease;
                }

                .story-image:hover {
                    opacity: 0.9;
                }

                .story-caption {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 13px;
                    line-height: 1.5;
                    color: #666;
                    margin-top: 10px;
                    font-style: italic;
                }

                .story-link {
                    display: inline-block;
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 14px;
                    font-weight: 600;
                    color: #1493B3;
                    text-decoration: none;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    margin-top: 15px;
                    transition: color 0.2s ease;
                }

                .story-link:hover {
                    color: #32AD7E;
                }

                /* ============================================
                FEATURE QUOTE
                ============================================ */

                .feature-quote {
                    grid-column: 1 / -1;
                    background: linear-gradient(135deg, #C7EDAF 0%, #A1D6F7 100%);
                    padding: 50px;
                    border-left: 4px solid #32AD7E;
                    margin: 20px 0;
                }

                .feature-quote blockquote {
                    margin: 0;
                }

                .feature-quote p {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(1.5rem, 3vw, 2rem);
                    line-height: 1.5;
                    font-weight: 400;
                    color: #121212;
                    font-style: italic;
                    margin-bottom: 20px;
                }

                .feature-quote cite {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 14px;
                    font-weight: 600;
                    color: #333;
                    font-style: normal;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                /* ============================================
                SPONSORS SECTION
                ============================================ */

                .sponsors-section {
                    background-color: #ffffff;
                    padding: 60px 20px;
                    border-top: 1px solid #e6e6e6;
                    border-bottom: 1px solid #e6e6e6;
                }

                .sponsors-title {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: clamp(1.8rem, 3vw, 2.5rem);
                    font-weight: 700;
                    color: #121212;
                    text-align: center;
                    margin-bottom: 40px;
                }

                .sponsors-container {
                    width: 100%;
                    margin: 0 auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 60px;
                    flex-wrap: wrap;
                }

                .sponsor-logo {
                    display: block;
                    transition: transform 0.3s ease, opacity 0.3s ease;
                }

                .sponsor-logo:hover {
                    transform: translateY(-5px);
                    opacity: 0.8;
                }

                .sponsor-logo img {
                    height: auto;
                    width: clamp(150px, 25vw, 250px);
                    max-width: 100%;
                    display: block;
                }

                /* ============================================
                CREDITS SECTION
                ============================================ */

                .credits-section {
                    background-color: #f8f8f8;
                    padding: 60px 20px;
                    border-top: 2px solid #e6e6e6;
                }

                .credits-container {
                    margin: 0 auto;
                }

                .credits-title {
                    font-family: 'Playfair Display', Georgia, serif;
                    font-size: 2rem;
                    font-weight: 700;
                    color: #121212;
                    text-align: center;
                    margin-bottom: 40px;
                }

                .credits-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 30px;
                }

                .credits-column p {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 14px;
                    line-height: 1.8;
                    color: #333;
                    margin-bottom: 10px;
                }

                .credits-column strong {
                    color: #121212;
                    font-weight: 600;
                }

                /* ============================================
                FOOTER
                ============================================ */

                .site-footer {
                    background-color: #121212;
                    color: #ffffff;
                    padding: 40px 20px;
                    text-align: center;
                }

                .footer-content p {
                    font-family: 'Libre Franklin', sans-serif;
                    font-size: 13px;
                    line-height: 1.8;
                    margin-bottom: 5px;
                }

                /* ============================================
                RESPONSIVE DESIGN
                ============================================ */

                @media (max-width: 900px) {
                    .content-grid {
                        grid-template-columns: 1fr;
                        gap: 40px;
                    }
                    
                    .letter-content {
                        grid-template-columns: 1fr;
                        gap: 30px;
                    }
                    
                    .letter-image {
                        position: static;
                        max-width: 400px;
                        margin: 0 auto;
                    }
                    
                    .credits-grid {
                        grid-template-columns: 1fr;
                    }
                    
                    .countdown-display {
                        gap: 20px;
                    }
                    
                    .sponsors-container {
                        gap: 40px;
                    }
                }

                @media (max-width: 600px) {
                    .top-nav {
                        height: 40px;
                        padding: 0 10px;
                    }
                    
                    .nav-date {
                        font-size: 10px;
                    }
                    
                    .nav-logo {
                        height: 22px;
                    }
                    
                    .nav-social {
                        gap: 8px;
                    }
                    
                    .nav-social a {
                        font-size: 12px;
                    }
                    
                    .masthead {
                        padding: 20px 0 15px;
                    }
                    
                    .masthead-logo img {
                        height: 45px;
                    }
                    
                    .edition-banner {
                        padding: 40px 15px 30px;
                    }
                    
                    .hero-section {
                        margin: 40px auto;
                        padding: 0 10px;
                    }
                    
                    .hero-content {
                        padding: 15px 0;
                    }
                    
                    .countdown-section {
                        padding: 30px 15px;
                        margin: 30px 0;
                    }
                    
                    .countdown-display {
                        gap: 15px;
                    }
                    
                    .countdown-unit {
                        min-width: 60px;
                    }
                    
                    .letter-section {
                        padding: 40px 10px;
                    }
                    
                    .content-grid {
                        margin: 40px auto;
                        padding: 0 10px;
                        gap: 35px;
                    }
                    
                    .story {
                        padding-bottom: 25px;
                    }
                    
                    .sponsors-container {
                        gap: 30px;
                    }
                    
                    .sponsor-logo img {
                        width: clamp(120px, 40vw, 200px);
                    }
                    .feature-quote {
                        padding: 30px 20px;
                    }
                    
                    .credits-section {
                        padding: 40px 15px;
                    }
                }

                /* ============================================
                EXTRA SMALL MOBILE (320px and below)
                ============================================ */

                @media (max-width: 400px) {
                    .top-nav {
                        padding: 0 8px;
                    }
                    
                    .nav-date {
                        font-size: 9px;
                        letter-spacing: 0.3px;
                    }
                    
                    .nav-logo {
                        height: 20px;
                    }
                    
                    .nav-social {
                        gap: 6px;
                    }
                    
                    .nav-social a {
                        font-size: 11px;
                    }
                    
                    .hero-section {
                        padding: 0 8px;
                    }
                    
                    .letter-section {
                        padding: 40px 8px;
                    }
                    
                    .content-grid {
                        padding: 0 8px;
                    }
                    
                    .countdown-section {
                        padding: 25px 10px;
                    }
                    
                    .countdown-unit {
                        min-width: 50px;
                    }
                }

                /* ============================================
                PRINT STYLES
                ============================================ */

                @media print {
                    .top-nav,
                    .hero-cta,
                    .story-link {
                        display: none;
                    }
                    
                    body {
                        background-color: white;
                    }
                    
                    .story {
                        page-break-inside: avoid;
                    }
                }

                /* ============================================
                UTILITY CLASSES
                ============================================ */

                .text-center {
                    text-align: center;
                }

                .mb-small {
                    margin-bottom: 15px;
                }

                .mb-medium {
                    margin-bottom: 30px;
                }

                .mb-large {
                    margin-bottom: 50px;
                }
    </style>

</head>

    <div class="article-header">
 
      <div class="hgroup">
 
      </div>
    </div>
 
 
    <div id="post-<?php the_ID(); ?>">
      <article style="width: 100%">

                <!-- Top Navigation Bar -->
                <nav class="top-nav">
                    <div class="nav-date">January 29, 2026</div>
                    <div class="nav-center">
                        <a href="https://www.dailyorange.com" target="_blank">
                            <img alt="The Daily Orange" class="nav-logo" src="http://dailyorange.s3.amazonaws.com/wp-content/uploads/2023/11/01230943/DO_Anniversary_Logo_IG_black.png">
                        </a>
                    </div>
                    <div class="nav-social">
                        <a href="https://www.instagram.com/dailyorange/?hl=en" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/thedailyorange" target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/dailyorange" target="_blank" aria-label="X (Twitter)">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.overlooked.com/@sports_dailyorange" target="_blank" aria-label="Newsletter">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </nav>

                <!-- Hero Feature -->
                <section class="hero-section">
                    <div class="hero-container">
                        <div class="hero-image">
                            <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28185351/LAX-GUIDE-BANNER-02-1.png" alt="Syracuse Lacrosse 2026">
                        </div>
                        <div class="hero-content">
                            <div class="hero-kicker">2026 Season Preview</div>
                            <h2 class="hero-headline">Upward trajectory for Syracuse lacrosse</h2>
                            <p class="hero-dek">Though in different spots, both Orange lacrosse teams enter the 2026 season with the pieces they need to aim for the national championship.</p>
                            <div class="hero-byline">
                                <span class="byline-text">By The Daily Orange Sports Staff</span>
                                <span class="byline-date">Jan. 29, 2026</span>
                            </div>

                            <!-- Countdown Timer Section -->
                            <section class="countdown-section">
                                <div class="countdown-container">
                                    <h2 class="countdown-title">Time Until First Faceoff</h2>
                                    <div class="countdown-display" id="countdown-display">
                                        <div class="countdown-unit">
                                            <div class="countdown-number" id="days">0</div>
                                            <div class="countdown-label">DAYS</div>
                                        </div>
                                        <div class="countdown-unit">
                                            <div class="countdown-number" id="hours">0</div>
                                            <div class="countdown-label">HOURS</div>
                                        </div>
                                        <div class="countdown-unit">
                                            <div class="countdown-number" id="minutes">0</div>
                                            <div class="countdown-label">MINUTES</div>
                                        </div>
                                        <div class="countdown-unit">
                                            <div class="countdown-number" id="seconds">0</div>
                                            <div class="countdown-label">SECONDS</div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <a href="#LFE" class="hero-cta">Continue Reading <i class="fas fa-arrow-down"></i></a>
                        </div>
                    </div>
                </section>

                <!-- Letter from Editor -->
                <section class="letter-section" id="LFE">
                    <div class="letter-container">
                        <div class="letter-label">A Letter from the Editor</div>
                        <div class="letter-content">
                            <div class="letter-text">
                                <h3 class="letter-heading">On the Brink</h3>
                                <p class="letter-author">Nicholas Alumkal, Sports Editor</p>
                                <p>Syracuse lacrosse enters the 2026 season on the brink.</p><br>
                                <p>The men's side tasted the Final Four for the first time in 12 years in 2025. Now, the Orange aim to advance further and claim their first national title since 2009. Why is this the year they might do it? The acclaimed 2022 recruiting class is now seniors. The face of that class was Joey Spallina. But he's not alone. Fellow senior defender Riley Figueiras guides SU's defense, while sophomore Payton Anderson is set to step into a bigger attacking role.</p><br>
                                <p>As for the women, this season begins a new era. The team is led by first-year head coach Regy Thorpe, who returns to his alma mater and where he served 10 years as an assistant coach for the women's team. His squad is made up of key returners in defender Coco Vandiver and highly-touted newcomers in freshman Mackenzie Borbi. Thorpe now aims to lead the Orange to a first-ever national championship.</p><br>
                                <p>The Daily Orange's 2026 Lacrosse Guide has everything you need to know ahead of Syracuse men's and women's lacrosse's consequential seasons.</p><br>
                                <br>
                                <p class="letter-signature">— Thanks for reading,</p>
                                <p class="letter-signature">Nicholas Alumkal | Sports Editor</p>
                                <br>
                                <a href="#stories" class="hero-cta">Continue Reading <i class="fas fa-arrow-down"></i></a>
                            </div>
                            <div class="letter-image">
                                <img src="http://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/29010142/NicholasAlumkal_Headshot-scaled.jpg" alt="Nicholas Alumkal Sports Editor Photo">
                            </div>
                        </div>
                    </div>
                </section>
        <!-- Main Content Grid -->
            <div class="content-grid" id="stories">
                
                <!-- Feature Block Quote -->
                <aside class="feature-quote">
                    <blockquote>
                        <p>"Putting a 2026 championship banner up in the Dome is the only thing I really give a s— about."</p>
                        <cite>— Joey Spallina, Syracuse Men's Lacrosse Attack</cite>
                    </blockquote>
                </aside>

                <!-- Two Column Stories -->
                <!-- A1 -->
                <article class="story">
                    <div class="story-kicker">Men's Lacrosse</div>
                    <h3 class="story-headline-secondary">LEGACY DEFINING</h3>
                    <p class="story-dek">The only thing on Joey Spallina's mind is winning a national championship</p>
                    <div class="story-byline">
                        <span>By: Zak Wolf | Senior Staff Writer</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28225052/22-Joey-Spallina-19-1-scaled.jpg" alt="Joey Spallina" class="story-image">
                        <figcaption class="story-caption">Joey Spallina enters his final collegiate season as the preeminent Tewaaraton favorite. He stands just 61 points away from breaking Mikey Powell's Syracuse points record. But after losing to Maryland in last season's Final Four, the only goal on his mind is a national championship.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/joey-spallina-winning-national-championship/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- A2 -->
                <article class="story">
                    <div class="story-kicker">Women's Lacrosse</div>
                    <h3 class="story-headline-secondary">BUILT FOR THIS</h3>
                    <p class="story-dek">Regy Thorpe helped build Syracuse's standard. As head coach, he can fulfill it.</p>
                    <div class="story-byline">
                        <span>By: Harris Pemberton | Asst. Sports Editor</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28205039/2025-08-25-WLAX-First-Practice-2-scaled-e1769651497945.jpg" alt="Regy Thorpe" class="story-image">
                        <figcaption class="story-caption">In June, Syracuse hired former Florida associate head coach Regy Thorpe to be the women's lacrosse program's fourth head coach. Thorpe built Syracuse women's lacrosse into a powerhouse in his decade as assistant coach from 2010-2019. In his first year as head coach, Thorpe wants to lead Syracuse back to Championship Weekend for the first time in two years.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/syracuse-womens-lacrosse-regy-thorpe-first-season-syracuse-standard/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- A3 -->
                <article class="story">
                    <div class="story-kicker">Men's Lacrosse</div>
                    <h3 class="story-headline-secondary">NO HIBERNATION</h3>
                    <p class="story-dek">Everyone calls Payton Anderson Bear. His drive to improve doesn't hibernate.</p>
                    <div class="story-byline">
                        <span>By: Nicholas Alumkal | Sports Editor</span>
                    </div>
                    <figure class="story-figure">
                        <center><img style="max-height: 50vh; width: auto;" src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/29020352/88-Payton-Anderson-9-square.jpg" alt="Strategy" class="story-image"></center>
                        <figcaption class="story-caption">Syracuse attack Payton Anderson spent hours improving his craft working out with his father, Rob. Through the process, due to his energy and size, at age 6, Anderson gained the nickname "Bear." Anderson's drive to improve never slept, leading to him making an impact as a freshman for the Orange in 2025. He's set to be on the hunt again this season.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/syracuse-mens-lacrosse-payton-anderson-bear/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- A4 -->
                <article class="story">
                    <div class="story-kicker">Women's Lacrosse</div>
                    <h3 class="story-headline-secondary">EYES ON HER</h3>
                    <p class="story-dek">Overlooked her whole career, Coco Vandiver is now everyone's focus</p>
                    <div class="story-byline">
                        <span>By: Jordan Kimball | Asst. Sports Editor</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28202345/LGA4_EMBED_16-Coco-Vandiver-14-5-scaled-e1769649852207.jpg" alt="Schedule" class="story-image">
                        <figcaption class="story-caption">Coco Vandiver joined Syracuse four years ago as an unranked, unknown, unpopular recruit. She wasn't even sure what position she'd play. Now, in her senior season, she's SU's defense's centerpiece as it aims to return to Championship Weekend.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/syracuse-womens-lacrosse-coco-vandiver-overlooked-focus-defense/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- Feature Block Quote -->
                <aside class="feature-quote">
                    <blockquote>
                        <p>"It's Syracuse lacrosse. Expectations are always gonna be high, but I think the kids know that. That's why they're here. You come to Syracuse to play on Memorial Day weekend."</p>
                        <cite>— Regy Thorpe, Syracuse Women's Lacrosse Head Coach</cite>
                    </blockquote>
                </aside>

                <!-- A5 -->
                <article class="story">
                    <div class="story-kicker">Men's Lacrosse</div>
                    <h3 class="story-headline-secondary">'SILENT KILLER'</h3>
                    <p class="story-dek">There's only 1 way for Riley Figueiras to live up to Syracuse's No. 11 legacy</p>
                    <div class="story-byline">
                        <span>By: Mauricio Palmar | Asst. Sports Editor</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28221711/11-Riley-Figueiras-23-scaled.jpg" alt="Riley Figueiras" class="story-image">
                        <figcaption class="story-caption">Historically, the No. 11 has belonged to some of Syracuse's best defenders. Nine players have donned it over the past two decades, and seven of them were All-Americans. In his fourth year with the number, a national championship is the only way for Riley Figueiras to live up to that legacy.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/riley-figueiras-syracuse-no-11-legacy/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- A6 -->
                <article class="story">
                    <div class="story-kicker">Women's Lacrosse</div>
                    <h3 class="story-headline-secondary">'BIG DOG'</h3>
                    <p class="story-dek">Mackenzie Borbi furthers South Jersey's esteemed draw specialist pipeline</p>
                    <div class="story-byline">
                        <span>By: Jason Glick | Asst. Digital Editor</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28213214/LGA6_EMBED_45-Mackenzie-Borbi-10-scaled-e1769653974378.jpg" alt="Mackenzie Borbi" class="story-image">
                        <figcaption class="story-caption">Over the past several years, southern New Jersey has produced a strong lineage of draw control specialists, with players like McKenzie Blake and Delaney Jackson hailing from the region. As Syracuse's top recruit in the class of 2025, Mackenzie Borbi is hoping to continue that lineage.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/syracuse-womens-lacrosse-mackenzie-borbi-draw-control-specialist/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- A7 -->
                <article class="story">
                    <div class="story-kicker">Men's Lacrosse</div>
                    <h3 class="story-headline-secondary">Beat writers' predictions</h3>
                    <div class="story-byline">
                        <span>By: Daily Orange Sports Staff</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28225157/LGA7_h2_JacobHalsema_SP_MLAX%40Princeton_January-28-2020_0018-scaled.jpg" alt="Syracuse Men's Lacrosse players grouped on the field" class="story-image">
                        <figcaption class="story-caption">Syracuse men's lacrosse came two games shy of claiming the national championship 2025, snapping a 12-year Final Four drought but falling hard to Maryland in the semifinal. Now, after a near taste of glory, the Orange enter 2026 with a single mandate — championship or bust. Ranked No. 3 nationally behind Maryland and Princeton, Syracuse faces a brutal schedule and even heavier pressure to finish the job.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/syracuse-mens-lacrosse-season-beat-writers-predictions/" class="story-link" target="_blank">Read More →</a>
                </article>

                <!-- A8 -->
                <article class="story">
                    <div class="story-kicker">Women's Lacrosse</div>
                    <h3 class="story-headline-secondary">Beat writers' predictions</h3>
                    <div class="story-byline">
                        <span>By: Daily Orange Sports Staff</span>
                    </div>
                    <figure class="story-figure">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/28213432/LGA8_LeonardoEriman_AVE_WLAXvsUVAFullGame_03292025-069-e1769654390172.jpg" alt="Syracuse Women's Lacrosse players grouped on the field" class="story-image">
                        <figcaption class="story-caption">After a program-record nine losses and a second-round NCAA Tournament exit, Syracuse women's lacrosse entered the 2026 offseason amid sweeping change. Head coach Kayla Treanor departed for Penn State, key contributors left via graduation and the portal and the program was forced to reset quickly. With new head coach Regy Thorpe in place, the standard hasn't budged — Championship Weekend remains the goal.</figcaption>
                    </figure>
                    <a href="https://dailyorange.com/2026/01/syracuse-womens-lacrosse-beat-writers-predict-regy-thorpe-first-year/" class="story-link" target="_blank">Read More →</a>
                </article>


            </div>

            <!-- Sponsors Section -->
            <section class="sponsors-section">
                <h3 class="sponsors-title">Thank You To Our Sponsors</h3>
                <div class="sponsors-container">
                    <a class="sponsor-logo" href = "https://www.apexentertainment.com/syracuse/" target="_blank">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/29014527/ApexSYC_Vertical_Color_Logo-01-1.png" alt="Apex Entertainment">
                    </a>
                    <a class="sponsor-logo" href = "https://skytopliquors.com/" target="_blank">
                        <img src="https://dailyorange.s3.amazonaws.com/wp-content/uploads/2026/01/29014514/skytop-logo.png" alt="Skytop Liquors">
                    </a>
                </div>
            </section>

            <!-- Credits Section -->
            <section class="credits-section">
                <div class="credits-container">
                    <h3 class="credits-title">Credits</h3>
                    <div class="credits-grid">
                        <div class="credits-column">
                            <p><strong>Sports Editor:</strong> Nicholas Alumkal</p>
                            <p><strong>Editor-in-Chief:</strong> Kendall Luther</p>
                            <p><strong>Managing Editor:</strong> Rosina Boehm</p>
                            <p><strong>Digital Managing Editor:</strong> Griffin Uribe Brown</p>
                        </div>
                        <div class="credits-column">
                            <p><strong>Social Media Editor:</strong> Charlotte Price</p>
                            <p><strong>IT Manager:</strong> Davis Hood</p>
                            <p><strong>Assistant Sports Editors:</strong> Jordan Kimball, Mauricio Palmar, Harris Pemberton</p>
                        </div>
                        <div class="credits-column">
                            <p><strong>Assistant Digital Editors:</strong> Spencer Brod, Jason Glick</p>
                            <p><strong>Assistant Copy Editors:</strong> Fiona McHugh, Peter Radosh</p>
                            <p><strong>Presentation Director:</strong> Ilana Zahavy</p>
                            <p><strong>Digital Design Directors:</strong> Sophia Burke, Katie Crews</p>
                        </div>
                        <div class="credits-column">
                            <p><strong>Illustration Editor:</strong> Hannah Mesa</p>
                            <p><strong>Photo Editor:</strong> Avery Magee</p>
                        </div>
                    </div>
                </div>
                <center><p>&copy; 2026 The Daily Orange. All rights reserved.</p></center>
            </section>

            <!-- JavaScript for Real-Time Countdown -->
            <script>
                function updateCountdown() {
                    // Game date: February 1, 2026 at 1:00 PM EST
                    const gameDate = new Date('2026-02-01T13:00:00-05:00');
                    const now = new Date();
                    
                    // Calculate difference in milliseconds
                    const difference = gameDate - now;
                    
                    if (difference <= 0) {
                        // Game has started or is over - clear display and show message
                        document.getElementById('countdown-display').innerHTML = '<div class="countdown-number" style="font-size: clamp(2.5em, 6vw, 4em);">It\'s Game Time!</div>';
                        return;
                    }
                    
                    // Calculate time units
                    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((difference % (1000 * 60)) / 1000);
                    
                    // Update the display
                    document.getElementById('days').textContent = days;
                    document.getElementById('hours').textContent = hours;
                    document.getElementById('minutes').textContent = minutes;
                    document.getElementById('seconds').textContent = seconds;
                }
                
                // Update countdown on page load
                updateCountdown();
                
                // Update countdown every second for real-time updates
                setInterval(updateCountdown, 1000);
            </script>    

        </article>
    </div>
  </div>
@endsection