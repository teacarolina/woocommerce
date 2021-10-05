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
                <div class="col-md-5 border border-secondary mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-7 mt-3 custom-contact-form">
                            <!--<h3 class="text-left">Kontakta oss</h3>-->
                            <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1" ]'); ?>
                        </div>
                        <p class="contact-phone">Vi gå även att nås på <i>tel: 08 123 45 678</i>
                            mellan
                            kl <b>09:00-16:00</b>
                        </p>
                    </div>
                </div>

                <!--<div class="content-wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1" ]'); ?></div>-->
                <!-- <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <h1>Kontakt</h1>
                        <form>
                            <label>Välj ett ärende:</label>
                            <select name="drop_down">
                                <option>Kontakt</option>
                                <option>Reklamation</option>
                                <option>Faktura</option>
                            </select>

                            <label>Namn</label>
                            <input type="text" />
                            <label>E-post</label>
                            <input type="email" />
                            <label>Meddelande</label>
                            <textarea class="textArea" cols="25" rows="10"></textarea>
                            <input type="submit" value="Skicka" />
                        </form>
                    <!-- < </div>
            <!-- add shot position here-->
                <!--</div>
        </div>-->
    </section>
</main>

<?php
get_footer();
?>