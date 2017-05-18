<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QR
 *
 * @ORM\Table(name="q_r")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QRRepository")
 */
class QR
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="qr", type="string", length=255)
     */
    private $qr;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qr
     *
     * @param string $qr
     *
     * @return QR
     */
    public function setQr($qr)
    {
        $this->qr = $qr;

        return $this;
    }

    /**
     * Get qr
     *
     * @return string
     */
    public function getQr()
    {
        return $this->qr;
    }
}

