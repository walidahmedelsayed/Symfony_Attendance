<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudentAttendance
 *
 * @ORM\Table(name="student_attendance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentAttendanceRepository")
 */
class StudentAttendance
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
     * @var int
     *
     * @ORM\Column(name="minLate", type="integer")
     */
    private $minLate;

    /**
     * @var int
     *
     * @ORM\Column(name="marksDeduct", type="integer")
     */
    private $marksDeduct;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrivalTime", type="datetime")
     */
    private $arrivalTime;


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
     * Set minLate
     *
     * @param integer $minLate
     *
     * @return StudentAttendance
     */
    public function setMinLate($minLate)
    {
        $this->minLate = $minLate;

        return $this;
    }

    /**
     * Get minLate
     *
     * @return int
     */
    public function getMinLate()
    {
        return $this->minLate;
    }

    /**
     * Set marksDeduct
     *
     * @param integer $marksDeduct
     *
     * @return StudentAttendance
     */
    public function setMarksDeduct($marksDeduct)
    {
        $this->marksDeduct = $marksDeduct;

        return $this;
    }

    /**
     * Get marksDeduct
     *
     * @return int
     */
    public function getMarksDeduct()
    {
        return $this->marksDeduct;
    }


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="studentAttendance")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Attendance", inversedBy="studentAttendance")
     * @ORM\JoinColumn(name="attendance_id", referencedColumnName="id")
     * */
    protected $attendance;

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return StudentAttendance
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set attendance
     *
     * @param \AppBundle\Entity\Attendance $attendance
     *
     * @return StudentAttendance
     */
    public function setAttendance(\AppBundle\Entity\Attendance $attendance = null)
    {
        $this->attendance = $attendance;

        return $this;
    }

    /**
     * Get attendance
     *
     * @return \AppBundle\Entity\Attendance
     */
    public function getAttendance()
    {
        return $this->attendance;
    }

    /**
     * Set arrivalTime
     *
     * @param \DateTime $arrivalTime
     *
     * @return StudentAttendance
     */
    public function setArrivalTime($arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;

        return $this;
    }

    /**
     * Get arrivalTime
     *
     * @return \DateTime
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }
}
