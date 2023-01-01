<div class="page-heading">
    <h3><?= $data['title']; ?></h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row text-center">
                <div class="col-sm-12 col-md-4">
                    <div class="card shadow rounded text-bg-primary">
                        <div class="card-body px-4 py-3">
                            <p class="fs-3"><strong class="me-2">Users: </strong><?= $data['users']['data']['count']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card shadow rounded text-bg-success">
                        <div class="card-body px-4 py-3">
                            <p class="fs-3"><strong class="me-2">Hotels: </strong><?= $data['hotels']['data']['count']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card shadow rounded text-bg-warning">
                        <div class="card-body px-4 py-3">
                            <p class="fs-3"><strong class="me-2">Tours: </strong><?= $data['tours']['data']['count']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card shadow rounded text-bg-info">
                        <div class="card-body px-4 py-3">
                            <p class="fs-3"><strong class="me-2">Tour Guides: </strong><?= $data['tourGuides']['data']['count']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card shadow rounded text-bg-danger">
                        <div class="card-body px-4 py-3">
                            <p class="fs-3"><strong class="me-2">Transportations: </strong><?= $data['transportations']['data']['count']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow rounded">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>