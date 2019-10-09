<?php
class Category{
    // DB Stuff
    private $conn;
    private $table = 'categories';

    // Properties
    public $id;
    public $name;
    public $created_at;

    // Constructop with DB
    public function __construct($db){
        $this->conn = $db;
    }

    // Get categories 
    public function read(){
    // Create query
    $query = 'SELECT 
        id,
        name,
        created_at
     FROM
        '. $this->table.'
     ORDER BY
        created_at DESC';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // Get Single Categorys
    public function read_single(){
        // Create query
    $query = 'SELECT
        id,
        name,
      FROM
        '. $this->table .'
       WHERE id = ?
       LIMIT 0,1';

    //Prepare statement
        $stmt = $this->prepare($query);

    // Bind ID
    $stmt->bindParam(1, $this->id);

    // Execute query
    $stmt = $stmt->fetch(PDO::FETCH_ASSOC);

    // set properties
    $this->id =$ror['id'];
    $this->name = $row['name'];
    }

    // Create Category
    public function create(){
        // create Query
        $query = 'INSERT INTO '. $this->table .'
        
      SET 
        name = :name';

       // Prepare Statement
  $stmt = $this->conn->prepare($query); 
    }
}

?>