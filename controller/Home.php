<?php


//class Home qui affiche la page d'accueil...

class Home {

    public function showHome(){
        /*** accès au model***/

        $query = "SELECT * FROM devinette";

        $bdd = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "root");

        $req = $bdd->prepare($query);
        $req->execute();

        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $devinette['id']         = $row['id'];
            $devinette['name']       = $row['name'];
            $devinette['question']   = $row['question'];
            $devinette['answer']     = $row['answer'];
            $devinette['created_at'] = $row['created_at'];

            $devinettes[] = $devinette; // tableau de tableau

        };
        //var_dump($devinettes);
        include(VIEW.'home.php');


    }

    public function showContact(){

        include(VIEW.'contact.php');
    }
}
