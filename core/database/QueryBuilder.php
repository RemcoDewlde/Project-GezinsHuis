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

    public function comparator($email)
    {

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

    public function selectOne($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM events WHERE `id` = '{$id}' ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insertEvent($date_event, $eventname, $pictures, $description)
    {
        $query = $this->pdo->prepare("INSERT INTO events (`date_event`, `eventname`, `pictures`, `description`) VALUES ('{$date_event}', '{$eventname}', '{$pictures}', '{$description}');");
        $query->execute();
    }

    public function updateEvent($data)
    {
        $statement = $this->pdo->prepare("UPDATE events
        SET `date_event` = '{$data['date_event']}', `eventname` ='{$data['eventname']}', `pictures` = '{$data['pictures']}',`description` = '{$data['description']}'
        WHERE `id` = '{$data['id']}'");

        $statement->execute();
    }

    public function deleteEvent($id)
    {
        $query = $this->pdo->prepare("DELETE FROM events WHERE `id` = '{$id}'");

        $query->execute();
    }

    public function insertMessage($naam, $email, $bericht, $datum)
    {
        $query = $this->pdo->prepare("INSERT INTO contact(naam, email, bericht, datum) VALUES('{$naam}', '{$email}', '{$bericht}', '{$datum}')");
        $query->execute();
    }

    public function selectAllMessages($intoClass)
    {
        $messages = $this->pdo->prepare("SELECT * FROM contact ORDER BY datum");
        $messages->execute();

        return $messages->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }


    public function selectMessage($id)
    {
        $message = $this->pdo->prepare("SELECT * FROM contact WHERE id = {$id}");
        $message->execute();

        return $message->fetchAll(PDO::FETCH_CLASS, 'Berichten');
    }

    public function selectUserID($email)
    {

        $password = $this->pdo->prepare("SELECT id FROM users WHERE email = '{$email}'");
        $password->execute();
        return $password->fetchAll(PDO::FETCH_ASSOC);


    }

    public function selectUser($id)
    {
        $user = $this->pdo->prepare("SELECT * FROM users WHERE id = {$id}");
        $user->execute();

        return $user->fetchAll(PDO::FETCH_ASSOC);
    }


    //select profile
    public function selectProfile($profile, $id)
    {
        $user = $this->pdo->prepare("SELECT * FROM {$profile} WHERE id = {$id}");
        $user->execute();

        return $user->fetchAll(PDO::FETCH_ASSOC);
    }


    //Insert users
    public function insertUser($fname, $lname, $email, $password, $mobile, $function)
    {

        $query = $this->pdo->prepare("INSERT INTO users(fname, lname, email, password, mobile, function) VALUES('{$fname}','{$lname}', '{$email}', '{$password}', '{$mobile}', '{$function}');");
        $query->execute();
    }

    public function insertAdmin($id, $nickname, $dob)
    {

        $query = $this->pdo->prepare("insert into profiles_owners(id, nickname, dob) values({$id}, '{$nickname}', '{$dob}')");
        $query->execute();
    }

    public function insertSpecialist($id, $nickname, $dob, $description)
    {

        $query = $this->pdo->prepare("insert into profiles_doctors(id, nickname, dob, description) values({$id}, '{$nickname}', '{$dob}', '{$description}')");
        $query->execute();
    }

    public function insertParent($id, $nickname, $dob, $rights)
    {

        $query = $this->pdo->prepare("insert into profiles_parents(id, nickname, dob, rights) values({$id}, '{$nickname}', '{$dob}', {$rights})");
        $query->execute();
    }

    public function insertKid($id, $nickname, $dob, $reason)
    {

        $query = $this->pdo->prepare("insert into profiles_kids(id, nickname, dob, reason) values({$id}, '{$nickname}', '{$dob}', '{$reason}')");
        $query->execute();
    }


    public function selectDBPassword($id)
    {

        $password = $this->pdo->prepare("SELECT password FROM users WHERE id = {$id}");


        $password->execute();
        return $password->fetchAll(PDO::FETCH_ASSOC);


    }

    public function changePassword($password, $id)
    {
        $statement = $this->pdo->prepare("update users set password = '{$password}' where id = '{$id}'");
        $statement->execute();



    }

    public function alterUser($email, $mobile, $id)
    {
        $user = $this->pdo->prepare("update users set email ='{$email}', mobile = '{$mobile}' where id = '{$id}';");
        $user->execute();



    }

}
