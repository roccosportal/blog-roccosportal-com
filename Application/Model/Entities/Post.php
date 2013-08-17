<?php
namespace Blog\Model\Entities;
// this phpdoc is usefull for code completion
/**
 * @property int $postId
 * @property string $content
 * @property string $contentPreview
 * @property bool $isPublished
 * @property string $created
 * @property string $title
 * @property string $uniqueName
 */
class Post extends \Pvik\Database\ORM\Entity {
    public function __construct(){
        $this->modelTableName = 'Posts';
    }
    
    public function getConvertedCreated(){
        return date('j M Y', strtotime($this->created));
    }
}