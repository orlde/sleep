<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Website</title>
</head>
<body>

    <header>
        <h1>Welcome to Your PHP Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <section>
        <h2>Latest News</h2>

        <?php
            // Example PHP code to display news dynamically
            $news = [
                ['title' => 'New Feature Released', 'date' => '2023-11-19', 'content' => 'We are excited to announce the release of our latest feature.'],
                ['title' => 'Upcoming Event', 'date' => '2023-11-25', 'content' => 'Join us for an upcoming event on November 25th.'],
            ];

            foreach ($news as $article) {
                echo "<article>
                        <h3>{$article['title']}</h3>
                        <p><em>{$article['date']}</em></p>
                        <p>{$article['content']}</p>
                      </article>";
            }
        ?>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> PHP DEV HOST</p>
    </footer>

</body>
</html>
