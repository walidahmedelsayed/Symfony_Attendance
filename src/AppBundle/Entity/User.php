<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Track", inversedBy="users")
     * @ORM\JoinColumn(name="track_id", referencedColumnName="id")
     */
    private $track;

    

    /**
     * @ORM\OneToMany(targetEntity="Request", mappedBy="user")
     */
    private $requests;

    /**
     * @ORM\OneToMany(targetEntity="StudentAttendance", mappedBy="user", cascade={"all"})
     * */
    protected $studentAttendance;

    public function __construct() {
        $this->requests = new ArrayCollection();
        $this->studentAttendance = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set track
     *
     * @param \AppBundle\Entity\Track $track
     *
     * @return User
     */
    public function setTrack(Track $track = null)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return \AppBundle\Entity\Track
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Add request
     *
     * @param \AppBundle\Entity\Request $request
     *
     * @return User
     */
    public function addRequest(\AppBundle\Entity\Request $request)
    {
        $this->requests[] = $request;

        return $this;
    }

    /**
     * Remove request
     *
     * @param \AppBundle\Entity\Request $request
     */
    public function removeRequest(\AppBundle\Entity\Request $request)
    {
        $this->requests->removeElement($request);
    }

    /**
     * Get requests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequests()
    {
        return $this->requests;
    }


    /**
     * Add studentAttendance
     *
     * @param \AppBundle\Entity\StudentAttendance $studentAttendance
     *
     * @return User
     */
    public function addStudentAttendance(\AppBundle\Entity\StudentAttendance $studentAttendance)
    {
        $this->studentAttendance[] = $studentAttendance;

        return $this;
    }

    /**
     * Remove studentAttendance
     *
     * @param \AppBundle\Entity\StudentAttendance $studentAttendance
     */
    public function removeStudentAttendance(\AppBundle\Entity\StudentAttendance $studentAttendance)
    {
        $this->studentAttendance->removeElement($studentAttendance);
    }

    /**
     * Get studentAttendance
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudentAttendance()
    {
        return $this->studentAttendance;
    }
}
