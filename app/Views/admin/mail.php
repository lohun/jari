<div class="container">
    <h4>View All Feedback</h4>
    <table id="myTable" class="table display table-hover">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message) : ?>
                <tr>
                    <td><?= $message->date ?></td>
                    <td><?= $message->name ?></td>
                    <td><?= $message->subject ?></td>
                    <td><a class="btn btn-outline-primary" href="<?= base_url("admin/mail/" . $message->id) ?>">View Message</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>