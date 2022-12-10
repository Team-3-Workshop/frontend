<!-- Basic card section start -->
<section id="content-types">
    <div class="row">
        <?php foreach ($data['hotels']['data'] as $hotel) : ?>
            <div class="col-md-6 col-sm-12">
                <div class="card shadow rounded">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="<?= BASEURL; ?>/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title"><?= $hotel['name']; ?></h4>
                            <p class="card-text text-wrap">
                                <?= $hotel['description']; ?>
                            </p>
                            <a href="<?= BASEURL; ?>/hotels/detail">See More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Basic Card types section end -->