

<?php
function apt_button($name,$link,$outline = false){

$linkcss = 'group relative inline-flex border focus:outline-none w-full sm:w-auto ';
$linkcss .= $outline == true ? 'border-red-600 ' : ' border-red-500  ';   


$spanclss = 'w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm  text-center font-bold uppercase ring-1 ';

$spanclss .= $outline == true ? 'text-red-600 bg-white ring-red-600 ' : 'text-white bg-red-500  ring-red-500 ring-offset-red-500 ' ;

$spanclss .= 'ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1';



return '<a class="'.$linkcss.'" href=" '.$link.' " target="_blank">

  <span class="'. $spanclss.'">
  '.$name .'
  </span>
</a>
';
}


?>
