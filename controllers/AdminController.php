<?php


namespace app\controllers;
use app\models\MainForm;
use Yii;
use app\models\Main;
use app\models\PartnersForm;
use app\models\Partners;
use app\models\ServiceForm;
use app\models\Service;
use app\models\LoginForm;
use app\models\Contacts;
use app\models\ContactForm;
use yii\web\UploadedFile;

use app\models\Results;
use app\models\ResultsForm;



class AdminController extends \yii\web\Controller
{

	public function init()
    {
        $this->layout = 'admin';
    }



    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/admin/panel');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
          return $this->redirect('/admin/panel');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionPanel()
    {

        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }

        $main = new MainForm;



        $data_main = new Main;

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('main');
        
        $command = $query->createCommand();

        if(Yii::$app->request->post("MainForm")){
            $data = Yii::$app->request->post("MainForm");

            $main = $command->update('main', [
                'title' =>  $data['title'],
                'description' =>  $data['description'],
                'keywords' =>  $data['keywords'],
                'section1' =>  $data['section1'],
                'section2' =>  $data['section2'],
                'section3' =>  $data['section3'],
                'section4' =>  $data['section4'],
                'section5' =>  $data['section5'],

                ], 'id =1')->execute();
            $success = 'success';

             return $this->redirect('/admin/panel');
        }

            $data_main = $command->queryAll();
            $success = null;

                return $this->render('panel',[
                    'success' => $success,
                    'main' => $main,
                    'data_main' => $data_main,
                    ]);
    }

    public function actionService(){


        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }

        $service = new ServiceForm();
        $table_service = new Service();

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('service');
        
        $command = $query->createCommand();
        $table_service = $command->queryAll();

       if((Yii::$app->request->post("ServiceForm")['action'] == 'update')){

            $data = Yii::$app->request->post("ServiceForm");

            $query = (new \yii\db\Query())
                    ->select("*")
                    ->from('service');
                
            $command = $query->createCommand();

            $service->attributes = Yii::$app->request->post("ServiceForm");

            $service->img = UploadedFile::getInstance($service, 'img');  

        if(isset($service->img->name)){
           $updimg = $service->img->name;
        }else{
              $updimg = $data['defaultimg'];
        }

            // var_dump($service); die();         

                $data = $command->update('service', [
                    'img' =>  $updimg,
                    'article_head' =>  $data['article_head'],
                    'article_text' =>  $data['article_text'],
                    ], 'id ='.$data['id'])->execute();  


        if(isset($service->img->name)){
            $service->img->saveAs('images/' . '.' . $service->img->extension);
        }
       

         return $this->redirect('/admin/service');


       }elseif(Yii::$app->request->post("ServiceForm")){

            $service->attributes = Yii::$app->request->post("ServiceForm");

            $service->img = UploadedFile::getInstance($service, 'img');

            if($service->validate() && $service->writearticle()){

                $service->img->saveAs('images/' . '.' . $service->img->extension);

                return $this->redirect('/admin/service');
            }
        }

        return $this->render('service',[
            'service' => $service,
            'table_service' => $table_service,
            ]);
     }

    public function actionPartners(){



        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }

        $partners = new PartnersForm;
        $table_partners = new Partners;

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('partners');
        
        $command = $query->createCommand();
        $table_partners = $command->queryAll();

  if((Yii::$app->request->post("PartnersForm")['action'] == 'update')){

        $data =  Yii::$app->request->post("PartnersForm");

        $partners->attributes = Yii::$app->request->post("PartnersForm");

        $partners->src = UploadedFile::getInstance($partners, 'src'); 

        if(isset($partners->src->name)){
           $updimg = $partners->src->name;
        }else{
              $updimg = $data['defaultimg'];
        }

       // var_dump($updimg); die();
        

        $data = $command->update('partners', [
            'src' =>  $updimg,
            'description' =>  $data['description'],
            ], 'id ='.$data['id'])->execute();  

        if(isset($partners->src->name)){
            $partners->src->saveAs('images/' . '.' . $partners->src->extension);
        }
        

         return $this->redirect('/admin/partners');
           

      }elseif(Yii::$app->request->post("PartnersForm")){

            $partners->attributes = Yii::$app->request->post("PartnersForm");

            $partners->src = UploadedFile::getInstance($partners, 'file');

            if($partners->validate() && $partners->upload()){

                $partners->src->saveAs('images/partners' . '.' . $src->file->extension);

                return $this->redirect('/admin/partners');
            }
        }

        return $this->render('partners',[
                'partners' => $partners,
                'table_partners' => $table_partners,
            ]);
    }

    public function actionContacts(){

        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }
        $contacts = new ContactForm;
        $table_contacts = new Contacts;

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('contacts');
        
        $command = $query->createCommand();
        $table_contacts = $command->queryAll();

    if((Yii::$app->request->post("ContactForm")['action'] == 'update')){
     $data = Yii::$app->request->post("ContactForm");
   
        $data = $command->update('contacts', [
            'address' =>  $data['address'],
            'telephone' =>  $data['telephone'],
            ], 'id ='.$data['id'])->execute();

        return $this->redirect('/admin/contacts');
        }


            return $this->render('contacts',[
                'contacts' => $contacts,
                'table_contacts' => $table_contacts,
                ]);
     }





    public function actionResults(){



        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }

        $results = new ResultsForm;
        $table_results = new Results;

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('results');

        $command = $query->createCommand();
        $table_results = $command->queryAll();

        if((Yii::$app->request->post("ResultsForm")['action'] == 'update')){

            $data =  Yii::$app->request->post("ResultsForm");

            $results->attributes = Yii::$app->request->post("ResultsForm");

            $data = $command->update('results', [
                'section' =>  $data['section'],
            ], 'id ='.$data['id'])->execute();

            return $this->redirect('/admin/results');


        }elseif(Yii::$app->request->post("ResultsForm")){

            $results->attributes = Yii::$app->request->post("ResultsForm");

            if($results->validate() && $results->upload()){
                return $this->redirect('/admin/results');
            }
        }

        return $this->render('results',[
            'results' => $results,
            'table_results' => $table_results,
        ]);
    }
}


