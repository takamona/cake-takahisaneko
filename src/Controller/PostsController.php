<?php 
namespace App\Controller;

class PostsController extends AppController{

   public $paginate = [
      'limit' =>10,
      'order' =>[
         'Posts.created' =>'desc'
      ]
   ];

//  public $autoRender = false;

// public function initialize() :void
// {
//     parent::initialize();
//     $this->viewBuilder()->setLayout("test");

// }



 public function index()
 {
    //echo "Posts index";
    $posts = $this->paginate($this->Posts->find())
    ->where(['created >' => "2020-05-01"])
   //  ->where(['title Like'=> "%タイトル%"])
    ->andwhere(['published' =>true]);
            //  'published' => true
      // dd($posts->toArray());         


    $this->set(compact('posts'));
 }

 public function view($id=null)
 {

    $post = $this->Posts->get($id);

    $this->set(compact('post'));
 }

};

?>
