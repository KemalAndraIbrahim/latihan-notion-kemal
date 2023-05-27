<?= $this->extend('admin/base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create New Product</h5>
                </div>
                <div class="card-body">
                    <form action="/product" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="example-product-name">Product Name</label>
                            <input type="text" class="form-control" id="example-product-name" placeholder="Enter product name" required name="name">
                        </div>

                        <div class="form-group">
                            <label for="example-product-stock">Stock</label>
                            <input type="number" min="1" class="form-control" id="example-product-stock" placeholder="Enter product stock" required name="stock">
                        </div>

                        <div class="form-group">
                            <label for="example-product-price">Price</label>
                            <input type="number" min="1" class="form-control" id="example-product-price" placeholder="Enter product price" required name="price">
                        </div>

                        <div class="form-group">
                            <label for="example-product-category">Category</label>
                            <select class="form-control" name="category" id="example-product-category">
                                <option value="fiksi">Fiksi</option>
                                <option value="nonfiksi">Non-Fiksi</option>
                                <option value="novel">Novel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="example-product-photo">Photo</label>
                            <input type="file" class="form-control-file" id="example-product-photo" aria-describedby="photoHelp" name="photo">
                            <small id="photoHelp" class="form-text text-muted">Upload product photo</small>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
