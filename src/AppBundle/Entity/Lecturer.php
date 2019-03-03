<?php
// src/AppBundle/Entity/Student.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
* @ORM\Entity
* @ORM\Table(name="lecturertbl")
* @UniqueEntity(fields="staff_id", message="Staff Identification already exists.")
* @UniqueEntity(fields="email", message="Email already taken.")
*/
class Lecturer
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $lecturer_id;
    
    /**
    * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank(groups={"add","edit"},message="Provide staff ID.")
    */
    private $staff_id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message="Provide staff surname.")
    */
    private $surname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $othername;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide staff firstname.")
    */
    private $firstname;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide staff mobile number.")
    */
    private $mobile;
    
    /**
    * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide staff email address.")
     * @Assert\Email(groups={"add","edit"}, message = "Provide a valid staff email address.")
    */
    private $email;
    
    /**
    * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"add","edit"}, message = "Choose staff gender.")
    */
    private $sex;

    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"},message = "Choose staff marital status.")
    */
    private $mstatus;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide staff residential address.")
    */
    private $address;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add"}, message = "Upload staff passport.")
     * @Assert\Image(groups={"add","edit"})
    */
    private $passport;

    

    /**
     * Get studentId
     *
     * @return integer
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * Set staffId
     *
     * @param string $staffId
     *
     * @return Lecturer
     */
    public function setStaffId($staffId)
    {
        $this->staff_id = $staffId;

        return $this;
    }

    /**
     * Get staffId
     *
     * @return string
     */
    public function getStaffId()
    {
        return $this->staff_id;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Lecturer
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set othername
     *
     * @param string $othername
     *
     * @return Lecturer
     */
    public function setOthername($othername)
    {
        $this->othername = $othername;

        return $this;
    }

    /**
     * Get othername
     *
     * @return string
     */
    public function getOthername()
    {
        return $this->othername;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Lecturer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Lecturer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Lecturer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Lecturer
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set mstatus
     *
     * @param string $mstatus
     *
     * @return Lecturer
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;

        return $this;
    }

    /**
     * Get mstatus
     *
     * @return string
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Lecturer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set passport
     *
     * @param string $passport
     *
     * @return Lecturer
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }

    /**
     * Get passport
     *
     * @return string
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * Get lecturerId
     *
     * @return integer
     */
    public function getLecturerId()
    {
        return $this->lecturer_id;
    }
}
