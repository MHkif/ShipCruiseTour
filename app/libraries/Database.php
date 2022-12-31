<?php
/*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
class Database
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh;
  private $stmt;
  private $error;

  public \PDO $pdo;
  public function __construct()
  {
    // Set DSN
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    // Create PDO instance
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }

    // Create PDO instance
    $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
  }

  // Prepare statement with query
  public function query($sql)
  {
    $this->stmt = $this->dbh->prepare($sql);
  }

  // Bind values
  public function bind($param, $value, $type = null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  // Execute the prepared statement
  public function execute()
  {
    return $this->stmt->execute();
  }
  public function exec()
  {
    return $this->stmt->exec();
  }

  // Get result set as array of objects
  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  // Get single record as object
  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }

  // Get row count
  public function rowCount()
  {
    return $this->stmt->rowCount();
  }


  public function applyMigrations()
  {
    $this->createMigrationsTable();
    $appliedMigrations = $this->getAppliedMigration();
    $newMigrations = [];
    $files = scandir('C:\xampp\htdocs\ShipCruiseTour\migrations');
    
    // echo scandir('C:\xampp\htdocs\ShipCruiseTour\migrations') ? $files : 'Empty';
    // exit;
    $toApplyMigrations = array_diff($files, $appliedMigrations);
    foreach ($toApplyMigrations as $migration) {
      if ($migration === "." || $migration === "..") {
        continue;
      }
      require_once 'C:\xampp\htdocs\ShipCruiseTour\migrations/'. $migration;
      $className = pathinfo($migration, PATHINFO_FILENAME);
      $instance = new $className();
      echo "Applying migration $migration" . PHP_EOL;
      $instance->create();
      echo "Applied migration $migration" . PHP_EOL;
      $newMigrations[] = $migration;
    }
    if (!empty($newMigrations)) {
      $this->saveMigrations($newMigrations);
    } else {

      $this->log("all Migrations are Applied");
    }
  }

  public function createMigrationsTable()
  {
    $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (id INT AUTO_INCREMENT PRIMARY KEY, migration VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP) ENGINE=INNODB;");
  }

  private function getAppliedMigration()
  {
    $stmt = $this->pdo->prepare('SELECT migration FROM migrations');
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_COLUMN);
  }


  private function saveMigrations(array $migrations)
  {
    $migs = implode(',', array_map(fn ($m) => "('$m')", $migrations));
    $stmt = $this->pdo->prepare("INSERT INTO migrations(migration) VALUES $migs");
    $stmt->execute();
  }





  private function log($message)
  {
    echo "[" . date("Y-m-d H:i:s") . "] - " . $message . PHP_EOL;
  }
}
