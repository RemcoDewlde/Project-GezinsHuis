<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 21:03
 */

class QueryBuilder
{
    protected $pdo;

    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    public function comparator($email){

        $password = $this->pdo->prepare("SELECT password FROM users WHERE email = '{$email}'");


        $password->execute();
        return $password->fetchAll(PDO::FETCH_ASSOC);



    }

    public function simpleSelectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insertUser($fname, $lname, $email, $password, $mobile){

        $query = $this->pdo->prepare("INSERT INTO users VALUES('{$fname}','{$lname}', '{$email}', '{$password}', '{$mobile}');");

        $query->execute();
    }

    public function insertEvent($date_event, $eventname, $pictures, $description) {
        $query = $this->pdo->prepare("INSERT INTO events (`date_event`, `eventname`, `pictures`, `description`) VALUES ('{$date_event}', '{$eventname}', '{$pictures}', '{$description}');");

        $query->execute();
    }

    public function updateEvent($date_event, $eventname, $pictures, $description, $id) {
        $query = $this->pdo->prepare("UPDATE events 
        SET (`date_event` = '{$date_event}', `eventname` = '{$eventname}', `pictures` = '{$pictures}', 
        `description` = '{$description}')
        WHERE `id` = '{$id}'");

        $query->execute();
    }

    public function deleteEvent($id) {
        $query = $this->pdo->prepare("DELETE FROM events WHERE `id` = '{$id}'");

        $query->execute();
    }
    public function insertMessage($naam, $email, $bericht, $datum){
        $query = $this->pdo->prepare("INSERT INTO contact(naam, email, bericht, datum) VALUES('{$naam}', '{$email}', '{$bericht}', '{$datum}')");
        $query->execute();
    }

    public function selectAllMessages($intoClass){
        $messages = $this->pdo->prepare("SELECT * FROM contact ORDER BY datum");
        $messages->execute();

        return $messages->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }


    public function selectMessage($id){
        $message= $this->pdo->prepare("SELECT * FROM contact WHERE id = {$id}");
        $message->execute();

        return $message->fetchAll(PDO::FETCH_CLASS, 'Berichten');
    }
}


