<?php
// src/AppBundle/Entity/Course.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="coursetbl")
*/
class Course
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $course_id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide a course title.")
    */
    private $course_title;

    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide a course code.")
    */
    private $course_code;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide the course level.")
    */
    private $course_level;

    /**
     * Get courseId
     *
     * @return integer
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * Set courseTitle
     *
     * @param string $courseTitle
     *
     * @return Course
     */
    public function setCourseTitle($courseTitle)
    {
        $this->course_title = $courseTitle;

        return $this;
    }

    /**
     * Get courseTitle
     *
     * @return string
     */
    public function getCourseTitle()
    {
        return $this->course_title;
    }

    /**
     * Set courseCode
     *
     * @param string $courseCode
     *
     * @return Course
     */
    public function setCourseCode($courseCode)
    {
        $this->course_code = $courseCode;

        return $this;
    }

    /**
     * Get courseCode
     *
     * @return string
     */
    public function getCourseCode()
    {
        return $this->course_code;
    }

    /**
     * Set creditLevel
     *
     * @param string $creditLevel
     *
     * @return Course
     */
    public function setCreditLevel($creditLevel)
    {
        $this->credit_level = $creditLevel;

        return $this;
    }

    /**
     * Get creditLevel
     *
     * @return string
     */
    public function getCreditLevel()
    {
        return $this->credit_level;
    }

    /**
     * Set courseLevel
     *
     * @param string $courseLevel
     *
     * @return Course
     */
    public function setCourseLevel($courseLevel)
    {
        $this->course_level = $courseLevel;

        return $this;
    }

    /**
     * Get courseLevel
     *
     * @return string
     */
    public function getCourseLevel()
    {
        return $this->course_level;
    }
}
