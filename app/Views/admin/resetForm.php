<div class="card mx-auto my-4" style="width: 25rem">
    <div class="container">
        <h4>Please login to the admin section</h4>

        <form method="post" action="<?= base_url("auth/reset_password/".$code) ?>">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                <input type="password" name="confirmPassword" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>