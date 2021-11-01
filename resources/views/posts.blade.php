<!doctype html>

<title>Hello there</title>
<link rel="stylesheet" href="{{asset("css/app.css")}}">
<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <h1><?= $post->title; ?></h1>
    </article>
    <?php endforeach; ?>
</body>
