    <div class="container">
        <h4>All Products</h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Product
        </button>
        <!-- Portfolio grid -->
        <div class="grid">
            <div class="grid-sizer"></div>
            <?php foreach ($media as $row) : ?>
                <div class="grid-item tractors interior isolation">
                    <img alt="" src="<?= base_url($row->thumbnail) ?>">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="<?= base_url($row->media) ?>" data-fancybox="gallery" data-caption="<?= $row->description ?>">
                            <?php if (strpos($row->type, "video")) : ?>
                                <span class="fa fa-play"></span>
                            <?php else : ?>
                                <span class="fa fa-search"></span>
                            <?php endif; ?>
                        </a>
                        <a href="<?= base_url("admin/deletemedia/" . $row->id) ?>">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div><!-- Portfolio grid end -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="<?= base_url("admin/media") ?>">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thumbnail</label>
                            <input class="form-control" name="thumbnail" type="file" required>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Media</label>
                            <input class="form-control" name="mediafile" type="file" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" required value="<?= set_value("description") ?>">
                        </div>

                        <button type="submit" class="btn w-100 btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>