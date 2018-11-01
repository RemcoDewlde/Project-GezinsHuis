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

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
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

    public function selectOne($table, $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE `id` = '{$id}' ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    //<editor-fold desc="EVENTS">


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

    //</editor-fold>

    public function delete($id, $table)
    {
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE `id` = {$id}");
        var_dump($statement);

        $statement->execute();
    }

    public function insertMessage($naam, $email, $bericht, $datum)
    {
        $statement = $this->pdo->prepare("INSERT INTO contact(naam, email, bericht, datum) VALUES('{$naam}', '{$email}', '{$bericht}', '{$datum}')");
        $statement->execute();
    }

    public function selectAllMessages($intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM contact ORDER BY datum");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }


    public function selectMessage($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM contact WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Berichten');
    }

    public function selectUserID($email)
    {
        $statement = $this->pdo->prepare("SELECT id FROM users WHERE email = '{$email}'");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
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

    //<editor-fold desc="INSERT USERS">
    public function insertUser($fname, $lname, $email, $password, $mobile, $function)
    {
        $statement = $this->pdo->prepare("INSERT INTO users(fname, lname, email, password, mobile, function) VALUES('{$fname}','{$lname}', '{$email}', '{$password}', '{$mobile}', '{$function}');");
        $statement->execute();
    }

    public function insertAdmin($id, $nickname, $dob)
    {
        $statement = $this->pdo->prepare("insert into profiles_owners(id, nickname, dob) values({$id}, '{$nickname}', '{$dob}')");
        $statement->execute();
    }

    public function insertSpecialist($id, $nickname, $dob, $description)
    {
        $statement = $this->pdo->prepare("insert into profiles_doctors(id, nickname, dob, description) values({$id}, '{$nickname}', '{$dob}', '{$description}')");
        $statement->execute();
    }

    public function insertParent($id, $nickname, $dob, $rights)
    {
        $statement = $this->pdo->prepare("insert into profiles_parents(id, nickname, dob, rights) values({$id}, '{$nickname}', '{$dob}', {$rights})");
        $statement->execute();
    }

    public function insertKid($id, $nickname, $dob, $reason)
    {
        $statement = $this->pdo->prepare("insert into profiles_kids(id, nickname, dob, reason) values({$id}, '{$nickname}', '{$dob}', '{$reason}')");
        $statement->execute();
    }

    //</editor-fold>

    public function selectDBPassword($id)
    {
        $statement = $this->pdo->prepare("SELECT password FROM users WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
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

    public function addNote($by, $date, $description, $kidID)
    {
        $user = $this->pdo->prepare("insert into day2dayinformation(byname, date, description, idkid) values('{$by}', '{$date}', '{$description}', '{$kidID}')");
        $user->execute();
    }

    public function selectNotes($kidID)
    {
        $user = $this->pdo->prepare("select * from day2dayinformation where idkid = {$kidID}");
        $user->execute();

        return $user->fetchAll(PDO::FETCH_ASSOC);
    }

    public function safeuseredit($data)
    {
        $statement = $this->pdo->prepare("Update users set fname = '{$data["fname"]}', lname = '{$data["lname"]}', email = '{$data["email"]}',
                                          mobile = '{$data["mobile"]}', nickname = '{$data["nickname"]}', function = '{$data["function"]}' where id = '{$data["id"]}' ");
        $statement->execute();
    }

}
