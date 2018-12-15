
/* this class connects to server.
and enables us to run sql querys with run_query($sql) 
or if we need to get result use get_row($sql)*/

class crud{

  private $dbhost = "localhost";
  private $dbname = "root";
  private $dbpass = "";
  
  private $conn;
  public $result;
  public $row;
  
  private function connect(){
    $this->conn = new mysqli($this->dbhost, $this->dbname, $this->dbpass);
  
  if (!$conn){
    die("connection failed");
  }
  
  public function run_query ($sql){
    $this->connect();
    $this->result = $this->conn->query($sql);
  }
  
  public function get_row ($sql){
    $this->connect();
    $this->result = %this->conn->query($sql);
    $this->row = $this->result->fetch_assoc();
  }
  
}
