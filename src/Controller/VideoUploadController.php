<?php

namespace App\Controller;

use App\Entity\Video;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoUploadController
{
    #[NoReturn] public function __invoke(Request $request)
    {

        $video=  new Video();
        $video->setFile($request->files->get('file'));
        $video->setTitle($request->request->get('title'));
        $video->setUpdatedAt(new \DateTime());

        return $video;
    }
}
