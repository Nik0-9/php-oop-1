<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Movie.php";
include __DIR__ . "/Models/Book.php";

$categories = Category::fetchCategories();

$movies = Movie::fetchMovies();
$books = Book::fetchBooks();


?>
<main class="container">
    <section>
        <h2>Movies</h2>
        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $movie->cover ?>" class="card-img-top" alt="<?= $movie->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->title ?></h5>
                            <div class="d-flex justify-content-between ">
                                <h6 class="card-text">
                                    <?= $movie->language ?>
                                </h6>
                                <div>
                                    <?= $movie->getVote() ?>
                                </div>
                            </div>
                            <p>
                                <?= $movie->price ?>
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section>
        <h2>Book</h2>
        <div class="row">
            <?php foreach ($books as $book) { ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $book->cover ?>" class="card-img-top" alt="<?= $book->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $book->title ?></h5>

                            <h6 class="card-text">
                                <?= $book->numPages ?>
                            </h6>
                            <p>
                                <?= $book->category?->cate_name ?>
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

</main>