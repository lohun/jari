<div class="container">
    <div class="card">
        <div class="card-body">
            <h4>View Mail</h4>
            <p>This mail was sent by <?= $message->name ?> on <?= $message->date ?></p>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Title</label>
                    <input type="text" class="form-control" readonly value="<?= $message->subject ?>">
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="exampleCheck1">Message</label>
                    <textarea readonly class="form-control" rows="10"><?= $message->msg ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>