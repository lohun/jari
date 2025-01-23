<div class="card my-2">
    <div class="container">
        <div class="card-body">
            <h4>View All Users</h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add User
            </button>
            <table id="myTable" class="table display table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user->first_name ?></td>
                            <td><?= $user->last_name ?></td>
                            <td><?= $user->email ?></td>
                            <td><a class="btn btn-outline-danger" href="<?= base_url("admin/deleteuser/" . $user->id) ?>">Delete User</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url("admin/register") ?>">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">First Name</label>
                        <input type="text" name="firstName" class="form-control" required value="<?= set_value("firstName") ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" required value="<?= set_value('lastName') ?>">
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required value="<?= set_value("email") ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                        <input type="password" name="confirmPassword" class="form-control" required>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="group" value="1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Is an Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="2" name="group" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Is a Member
                        </label>
                    </div>

                    <button type="submit" class="btn w-100 btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>