<?php
/*Template Name: Contact*/
get_header();?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-5 mb-5 welcome-text">
                    <h1>Välkommen att <br />kontakta oss</h1>
                    <i class="infotext"> Fyll i kontaktformuläret till höger så återkommer vi inom 24h</i>



                </div>
                <div class="col-md-5 border border-secondary mt-5 mb-5 inner-contact-form">
                    <div class="row">
                        <div class="col-md-7 mt-3 custom-contact-form">

                            <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1" ]'); ?>
                        </div>
                        <p class="contact-phone">Vi gå även att nås på <i>tel: 08 123 45 678</i>
                            mellan
                            kl <b>09:00-16:00</b>
                        </p>
                    </div>
                </div>

    </section>
</main>

<?php
get_footer();
?>