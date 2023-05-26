<?php

function apt_section($array,$order = false)
{
  $last = $order == true ? 'lg:order-last': '';

  return '
  <div class="relative overflow-hidden pt-12 pb-16 md:pt-24 lg:pt-48">
   <div class="max-w-screen-xl w-full mx-auto px-5 grid gap-12 lg:grid-cols-2 ">
     <div class="flex justify-center items-center '.$last.'">
       <img src="./' . $array['img'] . '" alt="">
     </div>
     <div class="w-full flex justify-center items-center">
       <div class="sm:max-w-[480px]">
         <h2 class="text-4xl font-bold md:text-5xl">' . $array['title'] . '</h2>
          ' . $array['content'] . '
          <br />  <br>
         ' . $array['button'] . '
       </div>
     </div>
   </div>
 </div>';
}


$allsection = [[
  'img' => 'framwork.svg',
  'title' => 'One Framework, Many Flavors',
  'content' => 'Build robust, full-stack applications in PHP using Laravel and    serve as a robust backend API for your Next.js application, mobile application, or other frontend. Either way, our starter kits will have you productive in minutes. ',
  'button' =>  apt_button('Empower Your Frontend', 'sdfhskjdhfjks', true),
  'order' => 0
] , [
  'img' => 'code.svg',
  'title' => 'Write code for the joy of it.',
  'content' => 'Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience. ',
  'button' =>  apt_button('START LEARNING', 'sdfhskjdhfjks', true),
  'order' => 1

],
[
  'img' => 'framwork.svg',
  'title' => 'One Framework, Many Flavors',
  'content' => 'Build robust, full-stack applications in PHP using Laravel and    serve as a robust backend API for your Next.js application, mobile application, or other frontend. Either way, our starter kits will have you productive in minutes. ',
  'button' =>  apt_button('Empower Your Frontend', 'sdfhskjdhfjks', true),
  'order' => 0
] , [
  'img' => 'code.svg',
  'title' => 'Write code for the joy of it.',
  'content' => 'Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience. ',
  'button' =>  apt_button('START LEARNING', 'sdfhskjdhfjks', true),
  'order' => 1

]
];


foreach ($allsection as $section) {
   echo apt_section($section, $section['order']);
}

