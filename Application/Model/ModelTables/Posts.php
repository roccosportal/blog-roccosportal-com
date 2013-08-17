<?php
namespace Blog\Model\ModelTables;
use \Pvik\Database\ORM\FieldDefinition\Type;
class Posts extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){

        $this->tableName = 'posts';

        $this->entityName = 'Post';

        $this->primaryKeyName = 'postId';

        $this->fieldDefinition['postId'] = array ('Type' => Type::PRIMARY_KEY);

        $this->fieldDefinition['content'] =  array ('Type' => Type::NORMAL);
        
        $this->fieldDefinition['contentPreview'] =  array ('Type' => Type::NORMAL);

        $this->fieldDefinition['isPublished'] =  array ('Type' => Type::NORMAL);
        
        $this->fieldDefinition['created'] =  array ('Type' => Type::NORMAL);
        
        $this->fieldDefinition['title'] =  array ('Type' => Type::NORMAL);
          
        $this->fieldDefinition['uniqueName'] =  array ('Type' => Type::NORMAL);
     
    }
}