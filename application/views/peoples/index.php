<div class="container">
    <h2 class="mt-3">List Peoples</h2>

    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="Search Keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" name="submit">Searching</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-18">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                foreach ($peoples as $people) : ?>
                    <tbody>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $people['name']; ?></td>
                            <td><?= $people['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">Detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>