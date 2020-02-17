<?php

class Database {

    protected $pdo;

    public function __construct( $config ) {

        try {

            $this->pdo = new PDO( "mysql:host=$config->host;dbname=$config->dbname;", $config->username, $config->password );

        } catch( PDOException $e ) {

            die( "Could not connect to the database:<br> " . $e->getMessage() );

        }

    }

    public function addQuote( $quote, $author ) {

        try {

            $query = $this->pdo->prepare( "insert into `quotes` ( `quote`, `author` ) values ( :quote, :author );" );
            $query->bindParam( ":quote", $quote );
            $query->bindParam( ":author", $author );
            $query->execute();

        } catch ( PDOException $e ) {

            die( "Could not add the quote to the database:<br> " . $e->getMessage() );

        }

    }

    public function getQuotes( $limit = 10 ) {

        try {

            $query = $this->pdo->prepare( "select * from `quotes` order by rand() limit $limit;" );
            $query->bindParam( ":limit", $limit );
            $query->execute();

            return $query->fetchAll( PDO::FETCH_CLASS );

        } catch ( PDOException $e ) {

            die( "Could not fetch the records from the database:<br> " . $e->getMessage() );

        }

    }

}