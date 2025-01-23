<div class="card mx-auto my-4" style="width: 25rem">
    <div class="container">
        <h4>Please login to the admin section</h4>

        <form method="post" action="<?= base_url("admin/forgotPassword") ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <span>Back to Login? <a href="<?= base_url("admin/login") ?>">Click Here</a></span>
    </div>
</div>