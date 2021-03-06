<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@solomein.ru',
            'password' => '$2y$10$xI8P6zOhaD7sGYuURe1CGOORXU6JFRsyYx1HPVC6H4vyhNFXVtPK6',
        ]);

        DB::table('articles')->insert([
            'title' => 'Статья без description',
            'description' => '',
            'content' => '<p>Эта статья без description, поэтому будет взяты первые строки из столбца Content. Человек может создать кастомный description при добавлении статьи.</p>',
        ]);


        DB::table('articles')->insert([
            'title' => 'Статья с description',
            'description' => 'А это description, который человек написал при добавлении статьи',
            'content' => '<p>Эта статья без description, поэтому будет взяты первые строки из столбца Content. Человек может создать кастомный description при добавлении статьи.</p>',
        ]);

        DB::table('articles')->insert([
            'title' => 'Laravel без комплексов. Краткое пособие',
            'description' => 'Идейные соображения высшего порядка, а также рамки и место обучения кадров позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям.',
            'content' => '<p>Идейные соображения высшего порядка, а также консультация с широким активом позволяет выполнять важные задания по разработке дальнейших направлений развития. Повседневная практика показывает, что реализация намеченных плановых заданий позволяет выполнять важные задания по разработке направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации направлений прогрессивного развития. Разнообразный и богатый опыт консультация с широким активом позволяет выполнять важные задания по разработке дальнейших направлений развития. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание системы обучения кадров, соответствует насущным потребностям.</p>
                            <p>С другой стороны новая модель организационной деятельности требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Товарищи! сложившаяся структура организации способствует подготовки и реализации систем массового участия.</p>
                            <p>Таким образом укрепление и развитие структуры играет важную роль в формировании дальнейших направлений развития. Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. С другой стороны начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.</p>
                            <p>Равным образом рамки и место обучения кадров представляет собой интересный эксперимент проверки соответствующий условий активизации. Не следует, однако забывать, что сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Задача организации, в особенности же консультация с широким активом представляет собой интересный эксперимент проверки соответствующий условий активизации.</p>
                            <p>Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании новых предложений. Не следует, однако забывать, что рамки и место обучения кадров способствует подготовки и реализации систем массового участия. Повседневная практика показывает, что консультация с широким активом позволяет выполнять важные задания по разработке форм развития.</p>',
        ]);

        DB::table('articles')->insert([
            'title' => 'Laravel в домашних условиях: записки кота',
            'description' => 'Товарищи! Укрепление и развитие структуры влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий!',
            'content' => '<img src="http://www.xrest.ru/schemes/00/0f/39/63/%D0%9D%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE%D0%B4%D0%BD%D0%B8%D0%B9%20%D0%BA%D0%BE%D1%82%D0%B8%D0%BA-1.jpg">
                            <p>Значимость этих проблем настолько очевидна, что новая модель организационной деятельности играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что новая модель организационной деятельности требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач.</p>
                            <p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции в значительной степени обуславливает создание систем массового участия. Повседневная практика показывает, что начало повседневной работы по формированию позиции позволяет оценить значение направлений прогрессивного развития.</p>
                            <p>Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки дальнейших направлений развития. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий. Не следует, однако забывать, что реализация намеченных плановых заданий позволяет выполнять важные задания по разработке существенных финансовых и административных условий. Не следует, однако забывать, что начало повседневной работы по формированию позиции способствует подготовки и реализации новых предложений. Повседневная практика показывает, что новая модель организационной деятельности требуют от нас анализа форм развития.</p>
                            <p>Задача организации, в особенности же начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки новых предложений. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития. С другой стороны консультация с широким активом в значительной степени обуславливает создание соответствующий условий активизации. Повседневная практика показывает, что начало повседневной работы по формированию позиции требуют от нас анализа новых предложений.</p>
                            <p>Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности играет важную роль в формировании форм развития. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание соответствующий условий активизации. Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Задача организации, в особенности же начало повседневной работы по формированию позиции требуют от нас анализа системы обучения кадров, соответствует насущным потребностям.</p>',
        ]);

    }
}
