<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col">
            <h1>Aplikasi Todo List</h1>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#">Todo App</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Todo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Doing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Done</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="col-md-5 mt-2">
                <form action="<?= base_url('todo/input'); ?>" method="post" class="row">
                    <div class="form-group col-md-9">
                        <input class="form-control" type="text" name="input" id="input" placeholder="input todo">
                    </div>
                    <div class="form-group col-md  d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="form-group mt-2">
            <form class="col-md" action="<?= base_url('todo/update'); ?>" method="post">
                <ul class="list-group col-md-5">
                    <?php
                    if (!$todolist)
                        echo "List masih kosong!";
                    foreach ($todolist as $val) {
                        $el_name = "list-" . $val['id'];
                        $ar_id[] = $val['id'];
                    ?>
                        <li class="list-group-item  d-flex">
                            <div class="col-md">
                                <input class="form-check-input" type="checkbox" <?= ($val['status'] == 1 ? 'checked' : ''); ?> value="1" name="<?= $val['id']; ?>" id="<?= $el_name; ?>">
                                <label for="<?= $el_name; ?>"><?= $val['judul']; ?></label>
                            </div>
                            <div class="col-md">
                                <a href="<?= base_url('todo/delete/') . $val['id']; ?>" class="btn btn-danger btn-sm float-end">Delete</a>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                    <input type="hidden" name="all_id" value="<?= implode(',', $ar_id); ?>">
                </ul>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary ">Save</button>
                </div>
            </form>
        </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>