<?php

namespace WuCore\ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * WuCore\ResourcesBundle\Entity\Picture
 *
 * @ORM\Entity
 * @ORM\Table(name="picture")
 * @ORM\HasLifecycleCallbacks()
 */
class Picture {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=45, nullable=false)
     */
    private $path;

    /**
     * @var string $mimeType
     *
     * @ORM\Column(name="mime_type", type="string", length=45, nullable=false)
     */
    private $mimeType;

    /**
     * @var \DateTime $uploadedAt
     *
     * @ORM\Column(name="uploaded_at", type="datetime", nullable=false)
     */
    private $uploadedAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=false)
     */
    private $label;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $fileSize
     *
     * @ORM\Column(name="file_size", type="string", length=45, nullable=false)
     */
    private $fileSize;

    /**
     * @var boolean $isUsed
     *
     * @ORM\Column(name="is_used", type="boolean", nullable=false)
     */
    private $isUsed;

    /**
     * @var integer $width
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width;

    /**
     * @var integer $height
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var string $xiff
     *
     * @ORM\Column(name="xiff", type="text", nullable=true)
     */
    private $xiff;

    /**
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @Assert\File(maxSize="2097152")
     */
    private $file;

    /**
     * @var array
     *
     * @ORM\Column(name="credentials", type="array", nullable=true)     */
    private $credentials;

    /**
     * Constructor
     */
    public function __construct() {
        
    }

    public function __toString() {
        return $this->label;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Picture
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     * @return Picture
     */
    public function setMimeType($mimeType) {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType() {
        return $this->mimeType;
    }

    /**
     * Set uploadedAt
     *
     * @param \DateTime $uploadedAt
     * @return Picture
     */
    public function setUploadedAt($uploadedAt) {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    /**
     * Get uploadedAt
     *
     * @return \DateTime
     */
    public function getUploadedAt() {
        return $this->uploadedAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Picture
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Picture
     */
    public function setLabel($label) {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Picture
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set fileSize
     *
     * @param string $fileSize
     * @return Picture
     */
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return string
     */
    public function getFileSize() {
        return $this->fileSize;
    }

    /**
     * Set isUsed
     *
     * @param boolean $isUsed
     * @return Picture
     */
    public function setIsUsed($isUsed) {
        $this->isUsed = $isUsed;

        return $this;
    }

    /**
     * Get isUsed
     *
     * @return boolean
     */
    public function getIsUsed() {
        return $this->isUsed;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return Picture
     */
    public function setWidth($width) {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Picture
     */
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Set xiff
     *
     * @param string $xiff
     * @return Picture
     */
    public function setXiff($xiff) {
        $this->xiff = $xiff;

        return $this;
    }

    /**
     * Get xiff
     *
     * @return string
     */
    public function getXiff() {
        return is_array($this->xiff) ? unserialize($this->xiff) : $this->xiff;
    }

    /**
     * Set file
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @return Picture
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file) {
        if (is_file($this->getAbsolutePath())) {
            unlink($this->getAbsolutePath());
        }
        $this->file = $file;
        $this->label = $file->getClientOriginalName();
        $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $file->guessExtension();
        $this->xiff = serialize(@exif_read_data($file->getPath() . '/' . $file->getFilename()));
        $this->fileSize = $file->getClientSize();
        $this->isUsed = true;
        $this->mimeType = $file->getClientMimeType();
        $sizes = getimagesize($file->getPath() . '/' . $file->getFilename());
        $this->width = $sizes[0];
        $this->height = $sizes[1];
        return $this;
    }

    /**
     * Get file
     *
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : realpath($this->getUploadRootDir() . '/' . $this->path);
    }

    public function getWebPath() {
        return null === $this->path ? null : '/' . $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return realpath(__DIR__ . '/../Resources/private/' . $this->getUploadDir());
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'images/';
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }
        if ($this->uploadedAt == null):
            $this->uploadedAt = new \DateTime();
        endif;
        $this->updatedAt = new \DateTime();
        $this->file->move($this->getUploadRootDir(), $this->path);
        $this->file = null;
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload() {
        if (is_file($file = $this->getAbsolutePath())) {
            unlink($file);
        }
    }

    public function addCredential($credential) {
        $credential = strtoupper($credential);
        if ($credential === static::ROLE_DEFAULT) {
            return $this;
        }

        if (!in_array($credential, $this->credentials, true)) {
            $this->credentials[] = $credential;
        }

        return $this;
    }

    public function removeCredential($credential) {
        if (false !== $key = array_search(strtoupper($credential), $this->credentials, true)) {
            unset($this->credentials[$key]);
            $this->credentials = array_values($this->credentials);
        }
        return $this;
    }

    /**
     * Returns the picture credentials
     *
     * @return array The credentials
     */
    public function getCredentials() {
        return $this->credentials;
    }

}