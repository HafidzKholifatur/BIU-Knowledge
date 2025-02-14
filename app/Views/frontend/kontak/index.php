<?= $this->extend('frontend/layout/template'); ?>
<?= $this->section('content'); ?>

<section id="content-wrap" class="site-page">
    <div class="row">
        <div class="col-twelve">
            <section>
                <!-- <div class="content-media">
                    <div id="map-wrap">
                        <div id="map-container"></div>
                        <div id="map-zoom-in"></div>
                        <div id="map-zoom-out"></div>
                    </div>
                </div> -->
                <div class="primary-content">
                    <h1 class="entry-title add-bottom">Kontak Kami.</h1>
                    <p class="lead">Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim aliquip Ut incididunt amet ut cupidatat.</p>
                    <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>
                    <div class="row">
                        <div class="col-six tab-full">
                            <h4>Cari Kami di Sini</h4>
                            <p>
                                1600 Amphitheatre Parkway<br>
                                Mountain View, CA<br>
                                94043 US
                            </p>
                        </div>
                        <div class="col-six tab-full">
                            <h4>Info Kontak</h4>
                            <p>someone@abstractwebsite.com<br>
                                info@abstractwebsite.com <br>
                                Phone: (+63) 555 1212
                            </p>
                        </div>
                    </div>
                    <form name="cForm" id="cForm" method="post" action="">
                        <fieldset>
                            <div class="form-field">
                                <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                            </div>
                            <div class="form-field">
                                <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                            </div>
                            <div class="form-field">
                                <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value="">
                            </div>
                            <div class="message form-field">
                                <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>
                        </fieldset>
                    </form> <!-- end form -->
            </section>
        </div> <!-- end col-twelve -->
    </div> <!-- end row -->
</section> <!-- end content -->


<?= $this->endSection(); ?>