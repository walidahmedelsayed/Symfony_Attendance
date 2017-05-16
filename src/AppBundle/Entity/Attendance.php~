<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Attendance
 *
 * @ORM\Table(name="attendance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttendanceRepository")
 */
class Attendance
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Attendance
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * @ORM\OneToMany(targetEntity="StudentAttendance", mappedBy="attendance", cascade={"all"})
     * */
    protected $studentAttendance;

    public function __construct()
    {
        $this->studentAttendance = new ArrayCollection();
    }

    /**
     * Add studentAttendance
     *
     * @param \AppBundle\Entity\StudentAttendance $studentAttendance
     *
     * @return Attendance
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
