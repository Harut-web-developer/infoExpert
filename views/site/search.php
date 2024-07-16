<?php
if ($language == 'am') {
    $lan_b = 'page_name_am';
    $lan_l = 'lesson_name_am';
    $les = 'Դասընթացներ';
    $blg = 'Բլոգներ';
    $res = 'Ոչ մի արդյունք չի գտնվել։';
}
elseif ($language == 'ru'){
    $lan_b = 'page_name_ru';
    $lan_l = 'lesson_name_ru';
    $les = 'Курсы';
    $blg = 'Блоги';
    $res = 'Результатов не найдено.';
}
elseif ($language == 'en'){
    $lan_b = 'page_name_en';
    $lan_l = 'lesson_name_en';
    $les = 'Courses';
    $blg = 'Blogs';
    $res = 'No results found.';
}
?>
<?php if (!empty($blogs) || !empty($lessons)): ?>
    <div class="searchResult">
        <div class="lessonSearchContent">
            <span class="lesTitle"><?= $les ?></span>
            <?php if (!empty($lessons)){foreach ($lessons as $key => $lesson){?>
                <a href="/lessons/lesson?id=<?= $lesson['id'] ?>" class="searchText"><?= $lesson[$lan_l] ?></a>
            <?php }} ?>
        </div>
        <div class="blogSearchContent">
            <span class="blgTitle"><?= $blg ?></span>
            <?php if (!empty($blogs)){foreach ($blogs as $key => $blog){?>
                <a href="/blog/categorie?id=<?= $blog['id'] ?>" class="searchText"><?= $blog[$lan_b] ?></a>
            <?php }} ?>
        </div>
    </div>
<?php else: ?>
    <span class="searchRes"><?= $res ?></span>
<?php endif; ?>