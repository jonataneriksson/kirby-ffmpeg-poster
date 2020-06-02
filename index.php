<?php

Kirby::plugin('jonataneriksson/kirby-ffmpeg-poster', [
  'hooks' => [
    'file.create:after' => function ($file, $upload) {
      exec( option('thumbs.video.bin'). ' -y -i "' . $file->root() . '" -frames:v 1 "' . $file->parent()->root() . '/' . F::name($file->filename()) . '.jpg"' );
      //For debuggin//F::write( kirby()->roots()->index() .'/logfile.txt', option('thumbs.video.bin'). ' -y -i "' . $file->root() . '" -frames:v 1 "' . $file->parent()->root() . '/' . F::name($file->filename()) . '.jpg"' );
    }
  ],
]);
