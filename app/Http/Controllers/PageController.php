<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $staff = [
            ['name' => 'Лариса Волкова',  'position' => 'Уборщица офисов',       'image' => 'staff-1.jpg'],
            ['name' => 'Дмитрий Орлов',   'position' => 'Специалист по коврам',  'image' => 'staff-2.jpg'],
            ['name' => 'Анна Морозова',   'position' => 'Мастер по окнам',       'image' => 'staff-3.jpg'],
        ];

        $testimonials = [
            ['image' => 'person_1.jpg', 'name' => 'Ольга Смирнова',   'position' => 'Менеджер по маркетингу'],
            ['image' => 'person_2.jpg', 'name' => 'Андрей Кузнецов',  'position' => 'Директор компании'],
            ['image' => 'person_3.jpg', 'name' => 'Наталья Попова',   'position' => 'Владелец квартиры'],
        ];

        $works = [
            ['image' => 'work-1.jpg', 'title' => 'Уборка дома'],
            ['image' => 'work-2.jpg', 'title' => 'Мытьё окон'],
            ['image' => 'work-3.jpg', 'title' => 'Чистка бассейна'],
            ['image' => 'work-4.jpg', 'title' => 'Уборка офиса'],
            ['image' => 'work-5.jpg', 'title' => 'Чистка ковров'],
            ['image' => 'work-6.jpg', 'title' => 'Уборка сада'],
            ['image' => 'work-7.jpg', 'title' => 'Чистка ковров'],
            ['image' => 'work-8.jpg', 'title' => 'Чистка бассейна'],
        ];

        $latestPosts = [
            ['image' => 'image_1.jpg', 'author_image' => 'person_2.jpg', 'title' => '10 советов по уходу за окнами'],
            ['image' => 'image_2.jpg', 'author_image' => 'person_3.jpg', 'title' => 'Как выбрать клининговую компанию'],
            ['image' => 'image_3.jpg', 'author_image' => 'person_1.jpg', 'title' => 'Экологичные средства для уборки'],
        ];

        return view('home', compact('staff', 'testimonials', 'works', 'latestPosts'));
    }

    public function about()
    {
        $staff = [
            ['name' => 'Лариса Волкова',  'position' => 'Уборщица офисов',       'image' => 'staff-1.jpg'],
            ['name' => 'Дмитрий Орлов',   'position' => 'Специалист по коврам',  'image' => 'staff-2.jpg'],
            ['name' => 'Анна Морозова',   'position' => 'Мастер по окнам',       'image' => 'staff-3.jpg'],
        ];

        $testimonials = [
            ['image' => 'person_1.jpg', 'name' => 'Ольга Смирнова',   'position' => 'Менеджер по маркетингу'],
            ['image' => 'person_2.jpg', 'name' => 'Андрей Кузнецов',  'position' => 'Директор компании'],
            ['image' => 'person_3.jpg', 'name' => 'Наталья Попова',   'position' => 'Владелец квартиры'],
        ];

        return view('about', compact('staff', 'testimonials'));
    }

    public function services()
    {
        $services = [
            ['icon' => 'flaticon-workplace', 'title' => 'Уборка офиса',    'description' => 'Профессиональная уборка офисных помещений любой площади с использованием современного оборудования.'],
            ['icon' => 'flaticon-pool',      'title' => 'Чистка бассейна', 'description' => 'Профессиональная чистка и дезинфекция бассейнов. Поддерживаем идеальную чистоту воды и стен.'],
            ['icon' => 'flaticon-rug',       'title' => 'Чистка ковров',   'description' => 'Глубокая чистка ковров и ковровых покрытий. Удаляем пятна, пыль и аллергены эффективно.'],
            ['icon' => 'flaticon-kitchen',   'title' => 'Уборка кухни',    'description' => 'Тщательная уборка кухни: плита, духовка, холодильник, шкафы и все поверхности до блеска.'],
            ['icon' => 'flaticon-garden',    'title' => 'Уборка сада',     'description' => 'Уборка территории, вывоз мусора, уход за газоном и садовыми дорожками круглый год.'],
            ['icon' => 'flaticon-balcony',   'title' => 'Мытьё окон',      'description' => 'Профессиональное мытьё окон любой сложности: от квартир до высотных зданий.'],
        ];

        $plans = [
            ['icon' => 'flaticon-sprayer',       'title' => 'Стартовый', 'price' => '2 990', 'active' => false],
            ['icon' => 'flaticon-vacuum-cleaner', 'title' => 'Стандарт', 'price' => '4 990', 'active' => true],
            ['icon' => 'flaticon-tap',            'title' => 'Премиум',  'price' => '7 490', 'active' => false],
            ['icon' => 'flaticon-cleaning',       'title' => 'Платинум', 'price' => '9 990', 'active' => false],
        ];

        return view('services', compact('services', 'plans'));
    }

    public function portfolio()
    {
        $works = [
            ['image' => 'work-1.jpg', 'title' => 'Уборка дома'],
            ['image' => 'work-2.jpg', 'title' => 'Мытьё окон'],
            ['image' => 'work-3.jpg', 'title' => 'Чистка бассейна'],
            ['image' => 'work-4.jpg', 'title' => 'Уборка офиса'],
            ['image' => 'work-5.jpg', 'title' => 'Чистка ковров'],
            ['image' => 'work-6.jpg', 'title' => 'Уборка сада'],
            ['image' => 'work-7.jpg', 'title' => 'Чистка ковров'],
            ['image' => 'work-8.jpg', 'title' => 'Чистка бассейна'],
        ];

        return view('portfolio', compact('works'));
    }

    public function pricing()
    {
        $plans = [
            ['icon' => 'flaticon-sprayer',       'title' => 'Стартовый', 'price' => '2 990', 'active' => false],
            ['icon' => 'flaticon-vacuum-cleaner', 'title' => 'Стандарт', 'price' => '4 990', 'active' => true],
            ['icon' => 'flaticon-tap',            'title' => 'Премиум',  'price' => '7 490', 'active' => false],
            ['icon' => 'flaticon-cleaning',       'title' => 'Платинум', 'price' => '9 990', 'active' => false],
        ];

        return view('pricing', compact('plans'));
    }

    public function blog()
    {
        $posts = [
            ['image' => 'image_1.jpg', 'author_image' => 'person_2.jpg', 'title' => '10 советов по уходу за окнами'],
            ['image' => 'image_2.jpg', 'author_image' => 'person_3.jpg', 'title' => 'Как выбрать клининговую компанию'],
            ['image' => 'image_3.jpg', 'author_image' => 'person_1.jpg', 'title' => 'Экологичные средства для уборки'],
            ['image' => 'image_4.jpg', 'author_image' => 'person_2.jpg', 'title' => 'Генеральная уборка: с чего начать'],
            ['image' => 'image_5.jpg', 'author_image' => 'person_3.jpg', 'title' => 'Уборка после ремонта: советы профи'],
            ['image' => 'image_6.jpg', 'author_image' => 'person_1.jpg', 'title' => 'Как сохранить чистоту надолго'],
        ];

        return view('blog', compact('posts'));
    }

    public function blogSingle()
    {
        $comments = [
            ['name' => 'Мария Петрова',  'text' => 'Очень полезная статья! Давно искала советы по уходу за окнами. Обязательно попробую.'],
            ['name' => 'Сергей Козлов',  'text' => 'Спасибо за информацию. Не знал, что нужно мыть окна так часто.'],
            ['name' => 'Елена Новикова', 'text' => 'Отличные советы! Ваша компания действительно профессионалы своего дела.'],
        ];

        $categories = ['Чистка бассейна', 'Уборка офиса', 'Чистка ковров', 'Уборка кухни', 'Уборка сада', 'Мытьё окон', 'Уборка дома'];

        $recentPosts = [
            ['image' => 'image_1.jpg', 'title' => '10 советов по уходу за окнами'],
            ['image' => 'image_2.jpg', 'title' => 'Как выбрать клининговую компанию'],
            ['image' => 'image_3.jpg', 'title' => 'Экологичные средства для уборки'],
        ];

        $tags = ['уборка', 'дом', 'окна', 'ковры', 'офис', 'сад', 'чистота', 'клининг'];

        return view('blog-single', compact('comments', 'categories', 'recentPosts', 'tags'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Handle contact form submission here (e.g. send mail)

        return back()->with('success', 'Ваше сообщение отправлено, спасибо!');
    }
}
