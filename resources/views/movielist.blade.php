<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchlist</title>
    <link rel="stylesheet" href="/resources/css/watchList.css">
    <style>
        /* General Styles */
body.body-bg {
    background-color: #f3f4f6;
    color: #1f2937;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Header */
.header {
    background-color: #fbbf24;
    padding: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header-title {
    color: white;
    font-weight: bold;
    font-size: 1.5rem;
}
.header-buttons {
    display: flex;
    gap: 16px;
}
.header-btn {
    color: white;
    background: none;
    border: none;
    font-size: 1rem;
    cursor: pointer;
}
.header-lang-btn {
    background-color: white;
    color: #fbbf24;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: bold;
}

/* Main Content */
.main-container {
    max-width: 1024px;
    margin: 24px auto;
    padding: 16px;
}
.watchlist-section {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 24px;
}
.watchlist-header {
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 16px;
    margin-bottom: 16px;
}
.watchlist-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 8px;
}
.watchlist-meta,
.watchlist-description {
    color: #6b7280;
    font-size: 0.875rem;
}

/* Movie List */
.movie-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.movie-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    background-color: #f9fafb;
    padding: 16px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.movie-image {
    width: 80px;
    height: 120px;
    border-radius: 4px;
}
.movie-title {
    font-size: 1rem;
    font-weight: bold;
}
.movie-meta,
.movie-description,
.movie-director {
    color: #6b7280;
    font-size: 0.875rem;
    margin-top: 4px;
}
.movie-info-btn {
    margin-left: auto;
    color: #2563eb;
    font-size: 1rem;
    cursor: pointer;
    background: none;
    border: none;
}

/* Recently Seen */
.recently-seen {
    margin-top: 24px;
}
.recently-seen-title {
    font-size: 1.25rem;
    font-weight: bold;
}
.recently-seen-description {
    color: #6b7280;
    font-size: 0.875rem;
}

/* Footer */
.footer {
    background-color: #000;
    color: white;
    padding: 16px;
}
.footer-container {
    max-width: 1024px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer-social {
    display: flex;
    gap: 16px;
    align-items: center;
}
.footer-link {
    color: white;
    text-decoration: underline;
    font-size: 0.875rem;
}
.footer-app-btn {
    background-color: white;
    color: black;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: bold;
}

    </style>
</head>
<body class="body-bg">
    <!-- Header -->
    <header class="header">
        <div class="header-title">CHAs</div>
        <div class="header-buttons">
            <button class="header-btn">Watchlist</button>
            <button class="header-btn">Namn</button>
            <button class="header-lang-btn">SWE</button>
        </div>
    </header>

    <!-- Watchlist Section -->
    <main class="main-container">
        <section class="watchlist-section">
            <div class="watchlist-header">
                <h1 class="watchlist-title">Your Watchlist</h1>
                <p class="watchlist-meta">Created 23 hours ago • Modified 21 hours ago</p>
                <p class="watchlist-description">
                    Your Watchlist is the place to track the titles you want to watch. You
                    can sort your Watchlist by the CHAs rating, popularity score and
                    arrange your titles in the order you want to see them.
                </p>
            </div>

            <div class="movie-list">
                @foreach ([
                    ['title' => 'Recep Ivedik 3', 'year' => '2010', 'duration' => '1hr 53min'],
                    ['title' => 'Sky Force', 'year' => '2025', 'duration' => '2hr 5min'],
                    ['title' => 'Rush Hour', 'year' => '2007', 'duration' => '1hr 31min'],
                    ['title' => '22 Jump Street', 'year' => '2014', 'duration' => '2hr 12min']
                ] as $index => $movie)
                <div class="movie-item">
                    <img
                        src="https://via.placeholder.com/80x120?text={{ $movie['title'] }}"
                        alt="{{ $movie['title'] }}"
                        class="movie-image"
                    />
                    <div>
                        <h2 class="movie-title">
                            {{ $index + 1 }}. {{ $movie['title'] }}
                        </h2>
                        <p class="movie-meta">
                            {{ $movie['year'] }} • {{ $movie['duration'] }}
                        </p>
                        <p class="movie-description">
                            Description of the movie goes here. This is placeholder text.
                        </p>
                        <p class="movie-director">
                            Regisser: Placeholder Director Names
                        </p>
                    </div>
                    <button class="movie-info-btn">i</button>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Recently Seen -->
        <section class="recently-seen">
            <h2 class="recently-seen-title">Nyligen Sett</h2>
            <p class="recently-seen-description">Du har inte nyligen tittat på sidor</p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-social">
                <span>Följ CHAs på sociala:</span>
                <a href="#" class="footer-link">TikTok</a>
                <a href="#" class="footer-link">Instagram</a>
                <a href="#" class="footer-link">YouTube</a>
                <a href="#" class="footer-link">Facebook</a>
            </div>
            <div>
                <a href="#" class="footer-app-btn">Få appen CHAs</a>
            </div>
        </div>
    </footer>
</body>
</html>
