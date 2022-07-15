<?php

$arr = [
    [
    'id' => 1,
    'title' => 'Какая-то новость 1',
    'date' => '13.07.2022',
    'image_url' => './img/news1.jpg',
    ],
    [
        'id' => 2,
        'title' => 'Какая-то новость 2',
        'date' => '14.07.2022',
        'image_url' => './img/news2.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Какая-то новость 3',
        'date' => '20.07.2022',
        'image_url' => './img/news3.jpg',
    ]
];

    foreach($arr as $news): ?>

            <div>
                  <div>
                    <div>
                      <img src="<?=$news['image_url']; ?>" />
                      <p><?=$news['date']; ?></p>
                      <span><?=$news['title']; ?></span>
                    </div>
                  </div>
            </div>
        <?php endforeach; ?>

