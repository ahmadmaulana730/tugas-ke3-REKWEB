<div class="container">
    <div class="row">
        <div class="col-md-18">

            <h2 class="mt-3">List Peoples</h2>

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