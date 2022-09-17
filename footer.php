<hr>
<footer id="main-footer">

    <div class="cta">

        <div class="icon-wrappers">
            <div class="footer-icons">
                <a href="https://www.instagram.com/falcharts/" target="_blank" rel="noopener noreferrer" class="flex-center">



                    <i class="svg-icon">
                        <?php echo file_get_contents(get_template_directory() . '/static/icons/instagram.svg'); ?>
                    </i>

                    <p>
                        <?php esc_html_e('Instagram', 'falch-text'); ?>
                    </p>


                </a>
            </div>

            <div class="footer-icons">

                <a href="mailto:info@falcharts.com" target="_blank" class="flex-center">

                    <i class="svg-icon">
                        <?php echo file_get_contents(get_template_directory() . '/static/icons/message.svg'); ?>
                    </i>

                    <p>
                        <?php esc_html_e('E-mail us', 'falch-text'); ?>
                    </p>


                </a>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5ZK9LL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_footer(); ?>


</body>

</html>