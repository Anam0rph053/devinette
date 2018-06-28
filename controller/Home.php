<?php


//class Home qui affiche la page d'accueil...

class Home {

    public function showHome($params)
    {

        $manager = new DevinetteManager();
        $devinettes = $manager->findAll();

        $myView = new View('home');
        $myView->render(array('devinettes' =>$devinettes));





       // include(VIEW.'home.php');


    }

    public function showContact($params)
    {

        $myView = new View('contact');
        $myView->render();


        //include(VIEW.'contact.php');
    }

    public function editDev($params)
    {
        extract ($params);

        if (isset($id)) {


            $manager = new DevinetteManager();
            $devinette = $manager->find($id);
        } else {

            $devinette = new Devinette();
        }

        $myView = new View('edit');
        $myView->render(array('devinette' => $devinette));

    }

    public function addDev($params)
    {
        $values = $_POST['values'];

        $manager = new DevinetteManager();
        $manager->create($values);

        $myView = new View();
        $myView->redirect('home');


    }

    public function delDev ($params)
    {
        extract ($params);

        $manager = new DevinetteManager();
        $manager->delete($id);

        $myView = new View();
        $myView->redirect('home');
    }









}
