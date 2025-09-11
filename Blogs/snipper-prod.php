<?php
/**
 * Aimze Studio — Our Blogs archive (with blue + lilac safe bands and CTA)
 */
add_action('wp_enqueue_scripts', function () {
    if (!(is_home() || is_page('our-blogs'))) {
        return;
    }

    $bg    = esc_url('https://www.aimzestudio.com/wp-content/uploads/2025/08/1-scaled.png');
    $blue  = '#dbeafe';   // blue band (top strip)
    $lilac = '#f2f0fe';   // lilac band (below blue)

    $css = <<<CSS
/* === 0) WIDTH & SIDE PADDING (archive only) === */
.blog .site-content > .ast-container {
    max-width: 1200px !important;
    margin: 0 auto !important;
    padding-left: 16px !important;
    padding-right: 16px !important;
}
@media (min-width: 768px) {
    .blog .site-content > .ast-container {
        padding-left: 24px !important;
        padding-right: 24px !important;
    }
}
@media (min-width: 1025px) {
    .blog .site-content > .ast-container {
        padding-left: 32px !important;
        padding-right: 32px !important;
    }
}

/* === 1) ARCHIVE BANNER === */
.blog .ast-archive-entry-banner {
    position: relative;
    background: url('{$bg}') center/cover no-repeat;
    padding-top: 160px !important;
    padding-bottom: 24px !important;
    margin-top: 0 !important;
    border-bottom: 4px solid #b99247;
}

/* 1a) MOBILE-ONLY SAFE BANDS */
.blog .ast-archive-entry-banner::before,
.blog .ast-archive-entry-banner::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    display: none;
}
@media (max-width: 767px) {
    /* Blue strip (top 40px) */
    .blog .ast-archive-entry-banner::after {
        top: -170px;
        height: 40px;
        background: {$blue};
        display: block;
    }
    /* Lilac band (130px) */
    .blog .ast-archive-entry-banner::before {
        top: -130px;
        height: 130px;
        background: {$lilac};
        display: block;
    }
}

/* 1b) TITLE IN BANNER */
.blog .ast-archive-entry-banner .ast-archive-title,
.blog .ast-archive-entry-banner :where(h1, h2, h3, h4, h5, h6) {
    color: #ffffff !important;
    text-shadow: 0 2px 12px rgba(0, 0, 0, .25);
}
.blog .ast-archive-entry-banner .ast-archive-title {
    margin: 0 !important;
    text-align: center;
    font-weight: 800;
    line-height: 1.2;
    font-size: 26px !important; /* Always force 26px on mobile */
}
@media (min-width: 768px) {
    .blog .ast-archive-entry-banner {
        padding-top: 36px !important;
        padding-bottom: 36px !important;
    }
    .blog .ast-archive-entry-banner .ast-archive-title {
        font-size: 2rem !important;
    }
}
@media (min-width: 1025px) {
    .blog .ast-archive-entry-banner {
        padding-top: 48px !important;
        padding-bottom: 48px !important;
    }
    .blog .ast-archive-entry-banner .ast-archive-title {
        font-size: 2rem !important;
    }
}

/* Override Astra global rule */
.ast-archive-entry-banner[data-post-type="post"] .ast-container h1 {
    font-size: 26px !important;
}

/* 1c) SPACE BELOW BANNER BEFORE POSTS */
.blog .ast-archive-entry-banner + .site-content .ast-container,
.blog .ast-archive-entry-banner + .ast-container {
    margin-top: 40px !important;
}
@media (min-width: 1025px) {
    .blog .ast-archive-entry-banner + .site-content .ast-container,
    .blog .ast-archive-entry-banner + .ast-container {
        margin-top: 48px !important;
    }
}

/* === 2) GRID / CARDS === */
.blog #secondary { display: none !important; }
.blog .content-area { width: 100% !important; }

.blog #primary.ast-blog-layout-6-grid #main.site-main > .ast-row,
.blog [class*="ast-blog-layout"] .ast-row {
    row-gap: 28px !important;
    column-gap: 18px !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
}
@media (min-width: 1025px) {
    .blog #primary.ast-blog-layout-6-grid #main.site-main > .ast-row,
    .blog [class*="ast-blog-layout"] .ast-row {
        row-gap: 36px !important;
        column-gap: 24px !important;
    }
}
.blog .post-thumb img,
.blog .post-thumb-img-content img {
    width: 100%;
    aspect-ratio: 3/2;
    object-fit: cover;
    border-radius: 14px;
    box-shadow: 0 10px 22px rgba(0, 0, 0, .08);
}
.blog .entry-title { margin-top: 10px !important; }
.blog .entry-summary { margin-top: 6px !important; }

/* === 3) FULL-WIDTH CTA (end of page) === */
#aimze-blog-cta {
    width: 100vw;
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    margin-top: 36px;
    background: #3e1b56;
    border-top: 3px solid #b99247;
    border-bottom: 3px solid #b99247;
    color: #fff;
}
#aimze-blog-cta .cta-wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 28px 16px;
}
#aimze-blog-cta h2 {
    margin: 0 0 14px 0;
    color: #fff !important;
    font-size: 24px;
    line-height: 1.25;
    font-weight: 800;
    text-align: center;
}
#aimze-blog-cta .cta-actions {
    display: flex;
    justify-content: center;
}
#aimze-blog-cta .cta-btn {
    display: inline-block;
    text-decoration: none;
    background: #d4af37;
    color: #2b1640;
    font-weight: 800;
    padding: 14px 22px;
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, .18);
}
@media (min-width: 768px) {
    #aimze-blog-cta .cta-wrap { padding: 36px 24px; }
    #aimze-blog-cta h2 { font-size: 28px; }
}
CSS;

    // Attach after Astra styles so our rules win
    $handle = wp_style_is('astra-theme-css', 'enqueued')
        ? 'astra-theme-css'
        : (wp_style_is('astra-style', 'enqueued') ? 'astra-style' : 'aimze-inline');

    if ($handle === 'aimze-inline') {
        wp_register_style($handle, false);
        wp_enqueue_style($handle);
    }

    wp_add_inline_style($handle, $css);
}, 99);


/**
 * Inject a full-width CTA at the very end of the archive.
 * Button: WhatsApp "Book Appointment"
 */
add_action('wp_footer', function () {
    if (!(is_home() || is_page('our-blogs'))) {
        return;
    }

    $wa = 'https://wa.me/19058635955?text=Hi%20Aimze%20Studio!%20I%E2%80%99d%20like%20to%20book%20an%20appointment.';
    ?>
    <div id="aimze-blog-cta" role="region" aria-label="Call for bookings">
        <div class="cta-wrap">
            <h2>Call For Bookings and Appointments</h2>
            <div class="cta-actions">
                <a class="cta-btn" href="<?php echo esc_url($wa); ?>" target="_blank" rel="noopener">
                    Book Appointment
                </a>
            </div>
        </div>
    </div>
    <?php
});