<?php

namespace Blog\Controllers;

class Post extends \Pvik\Web\Controller {
    public function indexAction(){
        $uniqueName = $this->request->getParameters()->get('uniqueName');
        
        $selectQuery = \Pvik\Database\ORM\ModelTable::get('Posts')->getEmptySelectBuilder();
        $selectQuery->where('posts.uniqueName = %s');
        $selectQuery->addParameter($uniqueName);
        
      
        $post = $selectQuery->selectSingle();
        
        $this->request->sessionStart();
        $isAdmin = false;
        if(isset($_SESSION['AdminPvikToolsLoggedIn']) && $_SESSION['AdminPvikToolsLoggedIn']  == true){
            $isAdmin = true;
        }
        
        if($post==null || ($post->isPublished==false && !$isAdmin)){
             $this->redirectToPath('~/');
             return;
        }
        
        
        $this->viewData->set('post', $post);
        
        $this->executeView();
    }
}