<?php

namespace App\Form;

/**
 * Class UploadImage.
 *
 */
class UploadImage
{
    private $targetDir;
    private $targetFile;
    private $targetFileName;
    private $filePost;
    private $imgFolder;
    private $maxFileSize = 2000000;
    private $mimeType;
    public $status = "";



    /**
     * Construct get FILE-object and set img folder.
     * @method __construct
     * @param  FILE-object      $filePost
     * @param  image folder     Folder to upload image into.
     */
    public function __construct($filePost, $imgFolder)
    {
        $this->targetDir        = public_path() . "/img/upload/";
        $this->filePost         = $filePost;
        $this->imgFolder        = $imgFolder;
        $this->targetFileName   = $filePost->getClientOriginalName();
        $this->targetFile       = $this->targetDir . $this->imgFolder . "/" . $this->targetFileName;
        $this->mimeType         = $this->filePost->getMimeType();
    }



    /**
     * Private method to check if file is not to big.
     * @method  checkFileSize
     * @return  boolean     Return true or false if image is to big or not.
     */
    private function checkFileSize()
    {
        if ($this->filePost->getSize() > $this->maxFileSize) {
            $this->result = "Sorry, filen är för stor.";
            return false;
        }
        return true;
    }



    /**
     * Private method to check if file is correct format.
     * @method  checkFormat
     * @return  boolean     Return true or false if image is of correct format.
     */
    private function checkFormat()
    {
        if ($this->mimeType != "image/jpg" &&
            $this->mimeType != "image/png" &&
            $this->mimeType != "image/jpeg"
        ) {
            $this->result = "Only, JPG, JPEG, PNG allowed.";
            return false;
        }
        return true;
    }



    /**
     * Method to upload image to the server..
     * @method  uploadImage
     * @return  boolean     Return true or false if image is uploaded.
     */
    public function uploadImage()
    {
        if ($this->checkFileSize() && $this->checkFormat()) {
            if (file_exists($this->targetFile)) {
                $this->result = "Image already exists. Will use old image.";
                return true;
            }
            $this->filePost->move($this->targetDir . $this->imgFolder, $this->targetFileName);
            $this->status = "Image is uploaded.";
            return true;
        }
        return false;
    }
}
