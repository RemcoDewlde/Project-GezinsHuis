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


        $querypassword = $this->pdo->prepare("SELECT password FROM users WHERE email = '{$email}'");

        $querypassword->execute();
        return $querypassword->fetchAll(PDO::FETCH_CLASS);

        //$statement = $this->pdo->prepare("SELECT * FROM users WHERE email = '{$email}'");


        //$queryname = $this->pdo->prepare("SELECT fname FROM users WHERE email = '{$email}'");

        //AND password = '{$password}'
        //$statement->execute();



        //$queryname->execute();
        //return $queryname;







    }

}


