<?php

namespace CloudExam\Exam\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="\CloudExam\Exam\Repository\Choice")
* @ORM\Table(name="Choice")   
* 
**/

class Choice 
{
    /**
     * @ORM\Id @ORM\Column @ORM\GeneratedValue
     */
    private $id;
    private $questionId; 
    private $title; 
    private $createdAt; 
    private $updateAt;    

    public function getId()
    {
        return $this->id;
    }

    public function setQuestionId($questionId) 
    {
        $this->questionId = $questionId;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle($title)
    {
        return $this->title;
    }

    public function setCreatedAt($created)
    {
        $this->createAt = $created;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setUpdateAt($created)
    {
        $this->updatedAt = $created;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}