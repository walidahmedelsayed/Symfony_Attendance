<?php

namespace AppBundle\Controller;


use AppBundle\Entity\QR;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Branch;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\SvgWriter;


class QrController extends FOSRestController
{
    /**
     * @Rest\Get("/api/qr")
     */
    public function getAction()
    {
        $text = 'ITIOpenSOURCE';

        $qr = new QR();
        $qr->setQr($text);
        $em = $this->getDoctrine()->getManager();
        $em->persist($qr);
        $em->flush();
        // Create a QR code
        $qrCode = new QrCode($text);
        $qrCode->setSize(300);


// Output the QR code
        header('Content-Type: ' . $qrCode->getContentType(PngWriter::class));
        echo $qrCode->writeString(PngWriter::class);

// Save it to a file (guesses writer by file extension)
        $qrCode->writeFile(__DIR__ . '/qrcode.png');

// Create a response object
        $response = new Response(
            $qrCode->writeString(SvgWriter::class),
            Response::HTTP_OK,
            ['Content-Type' => $qrCode->getContentType(SvgWriter::class)]);

        return $response;

    }
}