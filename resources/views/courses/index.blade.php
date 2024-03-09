<?php
    $courses = [
        [
            'title' => 'Python Programming ฉบับคนไม่เคยเขียนโปรแกรม',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, deleniti.',
            'author' => 'John Doe',
            'src' => 'https://www.udacity.com/blog/wp-content/uploads/2020/12/Python-Tutorial_Blog-scaled.jpeg',
            'progress' => 0.5,
            'href' => '1'
        ],
        [
            'title' => 'Python Programming ฉบับคนไม่เคยเขียนโปรแกรม',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, deleniti.',
            'author' => 'John Doe',
            'src' => 'https://www.udacity.com/blog/wp-content/uploads/2020/12/Python-Tutorial_Blog-scaled.jpeg',
            'progress' => 0.5,
            'href' => '1'
        ],
        [
            'title' => 'Python Programming ฉบับคนไม่เคยเขียนโปรแกรม',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, deleniti.',
            'author' => 'John Doe',
            'src' => 'https://www.udacity.com/blog/wp-content/uploads/2020/12/Python-Tutorial_Blog-scaled.jpeg',
            'progress' => 0.5,
            'href' => '1'
        ],
        [
            'title' => 'Python Programming ฉบับคนไม่เคยเขียนโปรแกรม',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, deleniti.',
            'author' => 'John Doe',
            'src' => 'https://www.udacity.com/blog/wp-content/uploads/2020/12/Python-Tutorial_Blog-scaled.jpeg',
            'progress' => 0.5,
            'href' => '1'
        ]
    ];

    $suggested = [
        [
            "title" => "Python Programming ฉบับคนไม่เคยเขียนโปรแกรม",
            "author" => "John Doe",
        ],[
            "title" => "Python Programming ฉบับคนไม่เคยเขียนโปรแกรม",
            "author" => "John Doe",
        ],[
            "title" => "Python Programming ฉบับคนไม่เคยเขียนโปรแกรม",
            "author" => "John Doe",
        ],[
            "title" => "Python Programming ฉบับคนไม่เคยเขียนโปรแกรม",
            "author" => "John Doe",
        ],[
            "title" => "Python Programming ฉบับคนไม่เคยเขียนโปรแกรม",
            "author" => "John Doe",
        ]

    ];

    $username = "Supratouch Suwatno";
    $affiliation = "โรงเรียนอนุบาลหมีน้อย";

    $avg_progress = array_reduce($courses, function($carry, $item){
        return $carry + $item['progress'];
    }) / count($courses);

    $profile_src = "https://avatars.githubusercontent.com/u/58824744?v=4";
?>

@vite('resources/css/app.css')

<section class="grid grid-cols-4 rounded-xl bg-white">
    <div class="col-span-3 flex flex-col gap-y-6 px-12 py-16">
        <h1 class="text-5xl font-bold text-[#4369A2] font-noto-thai">
            คอร์สของฉัน
        </h1>
        <form class="space-y-4">
            <div class="w-auto h-auto relative overflow-hidden rounded-2xl">
                <input class="w-full rounded-2xl px-4 py-3 border-2 border-gray-200" type="text" placeholder="ค้นหา...">
                <buton>
                    <img src={{asset('images/icons/magnify.png')}} class="absolute top-1/2 right-4 transform -translate-y-1/2 w-6 h-6 z-10" alt="">
                </buton>
                <div class="w-20 from-[#00476C] to-[#235B9C] bg-gradient-to-b absolute -inset-y-24 -right-5 transform -rotate-45">
                </div>
                <div class="w-20 from-[#3D6EB3] to-[#B4C8E9] bg-gradient-to-t absolute -inset-y-24 -right-5 transform rotate-45 opacity-60">
                </div>
            </div>
            <div class="flex items-center gap-x-4">
                <span class="text-xl font-semibold text-[#6F7979]">filter by</span>
                <select class="rounded-full bg-[#E2EEFB] text-[#7F92B1] px-4 py-2 border-r-8 border-transparent" name="genere">
                    <option value="all">All</option>
                    <option value="fundamental">วิชาพื้นฐาน</option>
                    <option value="design">ดีไซน์</option>
                    <option value="programming">โปรงแกรมมิ่ง</option>
                    <option value="applied">ประยุกต์</option>
                </select>
                <select class="rounded-full bg-[#E2EEFB] text-[#7F92B1] px-4 py-2 border-r-8 border-transparent" name="time">
                    <option value="latest">ใหม่สุด</option>
                    <option value="oldest">เก่าสุด</option>
                </select>
             </div>
        </form>
         <div class="flex flex-col gap-y-4">
            @foreach ($courses as $course)
                <x-CourseCard 
                    title="{{$course['title']}}"
                    description="{{$course['description']}}"
                    author="{{$course['author']}}"
                    src="{{$course['src']}}"
                    progress="{{$course['progress']}}"
                    href="{{$course['href']}}"
                />
            @endforeach
         </div>
    </div>
    <div class="font-noto-thai relative max-h-screen">
        <div class="fixed max-w-full h-full shadow-lg py-16 border-l-2 rounded-xl">
            <div class="flex items-baseline px-8">
                <h2 class="text-xl font-bold text-[#4369A2] ">
                    คอร์สน่าสนใจ
                </h2>
                <a class="ml-auto text-sm text-[#9CD0FD] font-semibold" href="#">
                    ดูทั้งหมด
                </a>
            </div>
            <ul class="list-group flex flex-col gap-y-3 mt-6 pb-10 border-b-2 px-8">
                @foreach ($suggested as $key=>$course)
                    <li class="flex gap-x-2 text-sm font-semibold text-[#6F7881]">
                        <div class="text-sm font-semibold text-[#6F7881]">
                            {{$key+1}}.
                        </div>
                        <div class="flex flex-col">
                            <h5>{{$course['title']}} </h5>
                            <span class="text-sm font-medium text-[#C1C7CE]">
                                สอนโดย {{$course['author']}}
                            </span>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="px-8 py-6 space-y-6">
                <div class="flex flex-col items-center gap-y-1">
                    <h3 class="font-semibold text-[#2A638A]">
                        โปรไฟล์
                    </h3>
                    <div class="w-28 h-28 rounded-full overflow-hidden"><img class="object-fill" src="{{$profile_src}}" alt="profile portriat" ></div>
                    <h3 class="font-semibold text-[#2A638A] mt-2">
                        {{$username}}
                    </h3>
                    <span class="text-[#B8C8D9] text-xs">
                        {{$affiliation}}
                    </span>
                </div>
                <div class="w-full">
                    <span class="text-[#B8C8D9] text-xs">
                        ความคืบหน้า
                    </span>
                    <div class="flex items-center gap-x-4">
                        <div class="flex w-4/5 h-3 bg-[#C7D3EB] rounded-full overflow-hidden" role="progressbar" aria-valuenow="{{$avg_progress * 100}}" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-[#47B2FF] text-xs text-white text-center whitespace-nowrap transition duration-500" style="width: {{$avg_progress * 100}}%"></div>
                        </div>
                        <span class="text-[#A8ACAC]">
                            {{$avg_progress * 100}}%
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>