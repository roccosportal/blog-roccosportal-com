<?php

namespace Blog\Controllers;

class Index extends \Pvik\Web\Controller {
    public function indexAction(){
        $selectQuery = \Pvik\Database\ORM\ModelTable::get('Posts')->getEmptySelectBuilder();
        $selectQuery->where('posts.isPublished IS TRUE');
        $selectQuery->orderBy('posts.created DESC, posts.postId DESC');
        $posts = $selectQuery->select();
        $this->viewData->set('posts', $posts);
        
        $this->executeView();
    }
}