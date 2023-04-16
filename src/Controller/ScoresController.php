<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class ScoresController extends AppController
{

    public function initialize(): void
    {

        parent::initialize();

        $this->scores = TableRegistry::get('scores');

    }






    public function index()
    {
        $scores = $this->paginate($this->Scores);

        $this->set(compact('scores'));
    }



    public function add()
    {
        $score = $this->Scores->newEmptyEntity();
        if ($this->request->is('post')) {
            $person = $this->Persons->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $this->set(compact('score'));
    }

    public function scores()
    {



    }








    public function view()
    {

    // $this->scores = TableRegistry::get('sample');

    $scores= $this->scores->find();
    $data = $scores->all();

    // $scores = $this->Scores->find();
    // dd($scores->toArray());
    $this->set(compact('data'));
    }

    public function store()
    {
        // // formのデータを取得
        $paramname = $this->request->getData('name');
        $paramscore = $this->request->getData('score');
        // // パラメータがなければ入力画面にリダイレクト
        if (empty($paramname) || empty($paramscore)) {
            $this->redirect(['controller'=>'Scores','action'=>'add']);
        }

        $score = $this->Scores->newEmptyEntity();
        if ($this->request->is('post')) {
            $score = $this->Scores->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                // return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $this->set(compact('score'));
        // モデルをロード
        // $this->loadModel('Scores');

        // // scoresテーブルに保存
        // $this->Scores->save(array('name' => $name, 'score' => $score));

        // $Score = new Scores();
        // $Score->name = $name;
        // $Score->score = $score;
        // $Score->save();
        // $this->Score->Save($this->data);
        $score = $this->scores->newEmptyEntity();

        // if(!$score->errors()) {
            //エラーなし、登録処理
          
        // $score = $this->scores->newEntity($this->request->getData());
        // $score->name = $paramname;
        // $score->score = $paramscore;
        $this->scores->save($score);
    
        // }
    }

    public function addtemp()
    {
        $score = $this->Scores->newEmptyEntity();
        if ($this->request->is('post')) {
            $score = $this->Scores->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $this->set(compact('score'));
    }











}
?>