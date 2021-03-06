<?php
// src/AppBundle/Entity/News.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="newstbl")
*/
class News
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $news_id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide the news title.")
    */
    private $news_title;

    /**
    * @ORM\Column(type="string", length=100)
    */
    private $news_author;
    
    /**
    * @ORM\Column(type="text")
     * @Assert\NotBlank(groups={"add","edit"}, message = "Provide the news content.")
    */
    private $news_content;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"add","edit"}, message = "Select news status.")
    */
    private $news_status;
    
    /**
    * @ORM\Column(type="datetime")
    */
    private $news_date;

    /**
     * Get newsId
     *
     * @return integer
     */
    public function getNewsId()
    {
        return $this->news_id;
    }

    /**
     * Set newsTitle
     *
     * @param string $newsTitle
     *
     * @return News
     */
    public function setNewsTitle($newsTitle)
    {
        $this->news_title = $newsTitle;

        return $this;
    }

    /**
     * Get newsTitle
     *
     * @return string
     */
    public function getNewsTitle()
    {
        return $this->news_title;
    }

    /**
     * Set newsAuthor
     *
     * @param string $newsAuthor
     *
     * @return News
     */
    public function setNewsAuthor($newsAuthor)
    {
        $this->news_author = $newsAuthor;

        return $this;
    }

    /**
     * Get newsAuthor
     *
     * @return string
     */
    public function getNewsAuthor()
    {
        return $this->news_author;
    }

    /**
     * Set newsContent
     *
     * @param string $newsContent
     *
     * @return News
     */
    public function setNewsContent($newsContent)
    {
        $this->news_content = $newsContent;

        return $this;
    }

    /**
     * Get newsContent
     *
     * @return string
     */
    public function getNewsContent()
    {
        return $this->news_content;
    }

    /**
     * Set newsDate
     *
     * @param \DateTime $newsDate
     *
     * @return News
     */
    public function setNewsDate($newsDate)
    {
        $this->news_date = $newsDate;

        return $this;
    }

    /**
     * Get newsDate
     *
     * @return \DateTime
     */
    public function getNewsDate()
    {
        return $this->news_date;
    }

    /**
     * Set newsStatus
     *
     * @param string $newsStatus
     *
     * @return News
     */
    public function setNewsStatus($newsStatus)
    {
        $this->news_status = $newsStatus;

        return $this;
    }

    /**
     * Get newsStatus
     *
     * @return string
     */
    public function getNewsStatus()
    {
        return $this->news_status;
    }
}
