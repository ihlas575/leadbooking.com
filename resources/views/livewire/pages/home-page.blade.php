<div>
    <!-- Hero Section -->
    <section class="hero_single version_2">
        <div class="wrapper">
            <div class="container">
                <h3>Book unique experiences</h3>
                <p>Expolore top rated tours, hotels and restaurants around the world</p>
                <form>
                    <div class="row g-0 custom-search-input-2">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Hotel, City...">
                                <i class="icon_pin_alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="dates" placeholder="When..">
                                <i class="icon_calendar"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel-dropdown">
                                <a href="#">Guests <span class="qtyTotal">1</span></a>
                                <div class="panel-dropdown-content">
                                    <!-- Quantity Buttons -->
                                    <div class="qtyButtons">
                                        <label>Adults</label>
                                        <input type="text" name="qtyInput" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <label>Childrens</label>
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                    <!-- /row -->
                </form>
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <div class="container container-custom margin_80_0">

        <!-- Places Section -->
        <section>
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Our Popular Tours</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <livewire:components.hotel-info-card />
                <livewire:components.hotel-info-card />
                <livewire:components.hotel-info-card />
                <livewire:components.hotel-info-card />
                <livewire:components.hotel-info-card />
                <livewire:components.hotel-info-card />
                <livewire:components.hotel-info-card />
            </div>
            <!-- /carousel -->
            <p class="btn_home_align"><a href="Javascript::void(0)" class="btn_1 rounded">View all Tours</a></p>
            <hr class="large">
        </section>
        <!-- End of Places Section -->

    </div>

    <!-- Call Us Section -->
    <section class="call_section">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-end wow position-relative" data-wow-offset="250">
                <div class="block-reveal">
                    <div class="block-vertical"></div>
                    <div class="box_1">
                        <h3>Enjoy a GREAT travel with us</h3>
                        <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                        <a href="Javascript::void(0)" class="btn_1 rounded">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End od Call Us Section -->
</div>
