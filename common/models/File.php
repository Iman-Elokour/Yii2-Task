<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class File extends Model
{
    const TOKEN = "ya29.a0ARrdaM8OHzA2d0ZlRN8KVHFdtYe01LcokwBoGt2yFzCbNNv7_Gz09uSYcq19fXtmoFfsBIbj9ptT-kVppyZU-0GxStUEuizlddvBrABKmp80WO6coxBGNnKmXTumyi2huUqW3EVYQEzUbe4OITrvrhwqjcn7Eg";
    public $title;
    public $thumbnailLink;
    public $embedLink;
    public $modifiedDate;
    public $fileSize;
    public $ownerNames;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [["title", "thumbnailLink", "embedLink", "modifiedDate", "fileSize", "ownerNames"], "safe"]
        ];
    }

    public function getFileSizeMB()
    {
        if (!empty($this->fileSize))
            return number_format($this->fileSize / 1048576, 2) . ' MB';
        else
            return "Not Specified";
    }

}
