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

    public function selectOne($data)
    {
        $statement = $this->pdo->prepare("SELECT * FROM events WHERE `id` = '{$data['id']}' ");
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

    public function updateEvent($data) {
        $query = $this->pdo->prepare("UPDATE events 
        SET `date_event` = '{$data['date_event']}', `eventname` = '{$data['eventname']}', `pictures` = '{$data['pictures']}', 
        `description` = '{$data['description']}')
        WHERE `id` = '{$data['id']}'");

        $query->execute();
    }

    public function deleteEvent($id) {
        $query = $this->pdo->prepare("DELETE FROM events WHERE `id` = '{$id}'");

        $query->execute();
    }
}


