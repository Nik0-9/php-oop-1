<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Movie.php";
include __DIR__ . "/Models/Book.php";

$movies = [
    //public function __construct($language, $id, $name, $img, $description, $rating)
    new Movie(
        "en",
        "9381",
        "Babylon A.D.",
        "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg",
        "A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.",
        "5.601"
    ),
    new Movie(
        "en",
        "9381",
        "Babylon A.D.",
        "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg",
        "A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.",
        "5.601"
    ),
];
$books = [
    //public function __construct($language, $id, $name, $img, $description, $rating)
    new Book(
        "416",
        "1",
        "Unlocking Android",
        "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",
        "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.",
        "5.601"
    ),
    new Book(
        "416",
        "1",
        "Unlocking Android",
        "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",
        "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.",
        "5.601"
    ),
];



?>
<main class="container">
    <section>
        <h2>Movies</h2>
        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $movie->img ?>" class="card-img-top" alt="<?= $movie->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->name ?></h5>
                            <div class="d-flex justify-content-between ">
                                <h6 class="card-text">
                                    <?= $movie->language ?>
                                </h6>
                                <div>
                                    <?= $movie->getVote() ?>
                                </div>
                            </div>
                            <p>
                                <?= $movie->description ?>
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
                        <img src="<?= $book->img ?>" class="card-img-top" alt="<?= $book->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $book->name ?></h5>

                            <h6 class="card-text">
                                <?= $book->numPages ?>
                            </h6>


                            <p>
                                <?= $book->description ?>
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

</main>