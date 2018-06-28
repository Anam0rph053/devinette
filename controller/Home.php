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

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

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









}
