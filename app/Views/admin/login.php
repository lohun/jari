<div class="card mx-auto my-4" style="width: 20rem">
    <div class="container">
        <h4>Please login to the admin section</h4>

        <form method="post" action="<?= base_url("admin/submitLogin") ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <span>Forgot password? <a href="<?= base_url("admin/forgot") ?>">Click Here</a></span>
    </div>
</div>