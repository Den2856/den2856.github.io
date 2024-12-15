<html>
<head>
	<title>Мой блог</title>
	<link rel="stylesheet" href="../../static/css/blog.css"  media="all">
    <script defer src="../../static/js/topfix.js"></script> 
    
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../../media/image/2023/header-logo.jpg" alt="Логотип" class="logo-image">
                <span class="logo-text">Техно</span>
            </div>
            <nav class="navigation">
                <a href="#about">О нас</a>
                <a href="#services">Услуги</a>
                <a href="#contacts">Контакты</a>
            </nav>
            <button class="contact-button">Связаться с нами</button>
        </header>
    </div>
    
    <div class="bg-video">
        <img class="bg-video-tag" src="../../media/image/2023/mesh-gradient.png">
        <div class="text-about">
            <a class="title">Технологии Будущего</a><br>
            <a class="text-b">Мы создаем решения, которые меняют мир. Присоединяйтесь к нам!</a><br>
            <button class="learn-more">Узнать больше</button>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax-content"> 
            <div class="news-block">
                <h2>Последние Новости</h2>
                <?php
                include '../../../config/db.php';
                $query = "SELECT title, date, description, image_url FROM newsblock";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $newsItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="row">
                <?php foreach ($newsItems as $item): ?>
                    <div class="news-card">
                        <img class="card-image" src="<?= htmlspecialchars($item['image_url']); ?>">
                        <a class="news"><?= htmlspecialchars($item['title']); ?></a>
                        <a class="news-date"><?= htmlspecialchars($item['date']); ?></a>
                        <p class="news-desc"><?= htmlspecialchars($item['description']); ?></p>
                        <button class="about-btn">Узнать</button>
                    </div>
                <?php endforeach; ?>       
                </div>
            </div>
        </div>
    </div>

    <div class="clients">
        <div class="stats-container">
            <div class="stats-block">
                <div class="stats-number">150</div>
                <div class="stats-text">Счастливых клиентов</div>
            </div>
            <div class="stats-block">
                <div class="stats-number">20</div>
                <div class="stats-text">Премий получено</div>
            </div>
            <div class="stats-block">
                <div class="stats-number">5</div>
                <div class="stats-text">Лет на рынке</div>
            </div>
        </div>        
    </div>

    <img class="parallax-pic" src="../../media/image/2023/pods.jpg">

    <div class="our-info">
        <h2 class="our-title">Мы - команда, которая меняет<br> мир технологий!</h2>
        <p class="our-desc">
            Вас когда-нибудь интересовал вопрос, как сделать мир лучше с помощью технологий?
            Мы тоже! Наша команда - это не просто разработчики, это настоящие маги,
            которые превращают идеи в реальность.
            <br>
            <br>
            Мы верим, что технологии могут изменить жизнь к лучшему. Наша миссия - создавать 
            инновационные решения,которые помогут бизнесу расти и развиваться. Мы не просто
            пишем код, мы создаем будущее!
            <br>
            <br>
            Присоединяйтесь к нам в этом увлекательном путешествии, и давайте вместе сделаем мир ярче и умнее!
        </p>
    </div>

    <div class="reviews-section">
        <h2>Отзывы</h2>
        <?php
        $query = "SELECT text, author, avatar FROM rewiewers";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $rewiewItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="reviews-container">
        <?php foreach ($rewiewItems as $item): ?>
            <div class="review-card">
                <p class="review-text"><?= htmlspecialchars($item['text']) ?></p>
                <img src="<?= htmlspecialchars($item['avatar']) ?>" alt="ava" class="review-avatar">
                <p class="review-author"><?= htmlspecialchars($item['author']) ?></p>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <div class="team-section">
        <?php
        $query = "SELECT name, position, wayto FROM staff";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $staffItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <h2>Наша Команда</h2>
        <div class="team-container">
        <?php foreach ($staffItems as $item): ?>
            <div class="team-card">
                <img src="<?= htmlspecialchars($item['wayto'])?>" alt="<?= htmlspecialchars($item['name']) ?>" class="team-photo">
                <h3><?= htmlspecialchars($item['name']) ?></h3>
                <p><?= htmlspecialchars($item['position']) ?></p>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <section class="faq-section">
        <?php
        $query = "SELECT question, answer FROM faq";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $faqItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <h2 class="faq-title">Часто задаваемые вопросы</h2>
        <div class="faq-container">
        <?php foreach ($faqItems as $item): ?>
            <div class="faq-item">
                <a href="#" class="faq-question"><?= htmlspecialchars($item['question']) ?></a>
                <div class="faq-answer">
                    <p><?= htmlspecialchars($item['answer']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>

    <section class="subscribe-section">
        <h2 class="subscribe-title">Подпишитесь на наши обновления!</h2>
        <form class="subscribe-form">
            <input type="email" class="subscribe-input" placeholder="Ваш email" required/>
            <button type="submit" class="subscribe-button">Подписаться сейчас</button>
        </form>
    </section>

    <section class="marquee-section">
        <div class="marquee">
            <p class="marquee-text">
                Современные технологии для вашего бизнеса * Креативные решения, которые вдохновляют *
            </p>
        </div>
    </section>
    
    <section class="video-block">
    <!-- Блок с видео -->
        <video autoplay muted loop>
        <source src="../../media/image/2023/video.mp4" type="video/mp4" />
        Ваш браузер не поддерживает видео.
        </video>
    </section>

    <section class="social-media">
        <h2 class="social-title">Следите за нами в соцсетях</h2>
        <div class="social-icons">
            <a href="#" class="icon-link">
                <img src="../../static/icons/facebook.svg" alt="Facebook" />
            </a>
            <a href="#" class="icon-link">
                <img src="../../static/icons/twitter.svg" alt="X" />
            </a>
            <a href="#" class="icon-link">
                <img src="../../static/icons/instagram.svg" alt="Instagram" />
            </a>
            <a href="#" class="icon-link">
                <img src="../../static/icons/linkedin.svg" alt="LinkedIn" />
            </a>
            <a href="#" class="icon-link">
                <img src="../../static/icons/twitch.svg" alt="Twitch" />
            </a>
        </div>
    </section>

    <section class="contact-form">
        <h2>Свяжитесь с нами</h2>
        <div class="input-group">
            <input type="text" placeholder="Имя" />
            <input type="email" placeholder="Email" />
        </div>
        <textarea placeholder="Сообщение" rows="3"></textarea>
        <button>Отправить</button>
    </section>

    <section class="contact-info">
        <div class="contact-details">
            <h2 class="contact-title">Контакты</h2>
            <p>Телефон: +7 (123) 456-78-90</p>
            <p>Email: info@itcompany.ru</p>
            <p>Адрес: Moscow Russian Federation</p>
            <p>Часы работы: Пн-Пт: 9:00 - 18:00</p>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.8579301817314!2d-73.98784708459355!3d40.74844097932885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259af4e16fefd%3A0x5eb6b7a7c2c5d7f0!2s350%205th%20Ave%2C%20New%20York%2C%20NY%2010118%2C%20USA!5e0!3m2!1sen!2sru!4v1702600000000!5m2!1sen!2sru"
            width="960"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
        ></iframe>
    </section>
    <footer class="footer">
        <div class="footer-container">
    
        <ul class="footer-links">
                <li><a href="#about">О нас</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#contacts">Контакты</a></li>
                <li><a href="#support">Поддержка</a></li>
            </ul>
            <p class="footer-copyright"> &copy; 2024 IT Company. Все права защищены.</p>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
</body>
</html>